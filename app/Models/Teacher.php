<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    //One to One inverse
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
    //One to many
    public function assessment() {
        return $this->hasMany(Assessment::class);
    }
    //Many to many (subject_teacher)
    public function teacher() {
        return $this->belongsToMany(Teacher::class, 'subject_teacher');
    }
}
