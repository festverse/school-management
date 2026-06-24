<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Public RESTful API Endpoints for External Integrations (Mobile App / Third-Party Consumer)
Route::get('/departments', function () {
    return response()->json(\App\Models\Department::with('courses')->get(), 200);
});

Route::get('/courses', function () {
    return response()->json(\App\Models\Course::with('department')->get(), 200);
});

Route::get('/students', function (Request $request) {
    $query = \App\Models\Student::with('user');
    
    if ($request->has('course')) {
        $query->where('course', 'LIKE', '%' . $request->input('course') . '%');
    }

    if ($request->has('search')) {
        $search = $request->input('search');
        $query->where(function($q) use ($search) {
            $q->where('fName', 'LIKE', "%{$search}%")
              ->orWhere('lName', 'LIKE', "%{$search}%")
              ->orWhere('studentId', 'LIKE', "%{$search}%");
        });
    }

    return response()->json($query->paginate(15), 200);
});
