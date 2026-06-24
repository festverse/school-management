<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    protected $fillable = ['student_id', 'course_class_id', 'status'];

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function courseClass()
    {
        return $this->belongsTo(CourseClass::class);
    }

    public function grade()
    {
        return $this->hasOne(Grade::class);
    }
}
