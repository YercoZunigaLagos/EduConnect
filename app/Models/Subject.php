<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    //One to many relationship inverse
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    //One to many relationship
    public function assessment() {
        return $this->hasMany(Assessment::class);
    }
    //Many to many (subject_teacher)
    public function subject() {
        return $this->belongsToMany(Subject::class, 'subject_teacher');
    }
}
