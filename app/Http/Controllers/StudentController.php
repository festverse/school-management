<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Enrollment;

class StudentController extends Controller
{
    public function dashboard()
    {
        $student = Auth::user();
        $profile = $student->student; // The linked profile
        
        $enrollments = Enrollment::with(['courseClass.course', 'courseClass.teacher', 'grade'])
            ->where('student_id', $student->id)
            ->get();

        return view('student.dashboard', compact('profile', 'enrollments'));
    }
}
