<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    //One to many inverse
    public function student() {
        return $this->belongsTo(Student::class);
    }

    public function assessment() {
        return $this->belongsTo(Assessment::class);
    }
}
