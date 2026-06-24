<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'fName', 'mName', 'lName', 'studentId', 'email', 'pNumber', 'course', 'age', 'gender', 'brgy', 'city', 'province', 'studentImage', 'enrolled'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
