<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AddstudentController;
use Illuminate\Support\Facades\Route;
use App\Models\Student;

Route::get('/', function () {
    $students = Student::with('user')->paginate(12);
    return view('welcome', compact('students'));
});

Route::get('/search-welcome', function (\Illuminate\Http\Request $request) {
    $query = $request->input('search');
    $students = Student::with('user')
        ->where('fName', 'LIKE', "%{$query}%")
        ->orWhere('lName', 'LIKE', "%{$query}%")
        ->orWhere('studentId', 'LIKE', "%{$query}%")
        ->paginate(12)->withQueryString();
    return view('welcome', compact('students'));
})->name('search-welcome');

Route::get('/academics', [AddstudentController::class, 'showAcademics'])->name('academics');
Route::get('/admissions', function () { return view('admissions'); })->name('admissions');
Route::get('/virtual-tour', function () { return view('virtual-tour'); })->name('virtual-tour');
Route::get('/privacy-policy', function () { return view('privacy'); })->name('privacy');
Route::get('/terms-of-service', function () { return view('terms'); })->name('terms');
Route::get('/contact-support', function () { return view('contact'); })->name('contact');

Route::get('/gymkhana', function () { return view('gymkhana'); })->name('gymkhana');
Route::get('/wellness', function () { return view('wellness'); })->name('wellness');
Route::get('/gender-cell', function () { return view('gender-cell'); })->name('gender-cell');
Route::get('/sc-st-cell', function () { return view('sc-st-cell'); })->name('sc-st-cell');
Route::get('/irbs', function () { return view('irbs'); })->name('irbs');
Route::get('/asc', function () { return view('asc'); })->name('asc');
Route::get('/moodle', function () { return view('moodle'); })->name('moodle');
Route::get('/library', function () { return view('library'); })->name('library');
Route::get('/feedback', function () { return view('feedback'); })->name('feedback');
Route::get('/news-events', function () { return view('news-events'); })->name('news-events');

// Dynamic Dashboard Redirect based on Role
Route::get('/dashboard', function () {
    $role = auth()->user()->role;
    if ($role === 'admin') return redirect()->route('admin.dashboard');
    if ($role === 'teacher') return redirect()->route('teacher.dashboard');
    return redirect()->route('student.dashboard');
})->middleware(['auth'])->name('dashboard');

// Admin Routes
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/add-student', [AddstudentController::class, 'index'])->name('add-student');
    Route::post('/add-student', [AddstudentController::class, 'create'])->name('add-student.store');
    Route::get('/student/{id}/edit', [AddstudentController::class, 'showEdit'])->name('student.edit');
    Route::post('/student/{id}/update', [AddstudentController::class, 'update'])->name('student.update');
    Route::get('/student/{id}/view', [AddstudentController::class, 'showEach'])->name('student.view');
    Route::delete('/student/{id}', [AddstudentController::class, 'destroy'])->name('student.destroy');
});

// Teacher Routes
Route::middleware(['auth', 'role:teacher'])->prefix('teacher')->name('teacher.')->group(function () {
    Route::get('/dashboard', [TeacherController::class, 'dashboard'])->name('dashboard');
});

// Student Routes
Route::middleware(['auth', 'role:student'])->prefix('student')->name('student.')->group(function () {
    Route::get('/dashboard', [StudentController::class, 'dashboard'])->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
