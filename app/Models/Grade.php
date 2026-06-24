<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = ['enrollment_id', 'grade', 'remarks'];

    public function enrollment()
    {
        return $this->belongsTo(Enrollment::class);
    }
}
