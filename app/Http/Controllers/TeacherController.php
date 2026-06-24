<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseClass;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    public function dashboard()
    {
        $teacher = Auth::user();
        $classes = CourseClass::with(['course', 'enrollments'])
            ->where('teacher_id', $teacher->id)
            ->get();

        return view('teacher.dashboard', compact('classes'));
    }
}
