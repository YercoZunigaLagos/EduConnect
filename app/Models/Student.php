<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    //One to many relationship inverse
    public function guardian()
    {
        return $this->belongsTo(Guardian::class);
    }
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    //One to one inverse
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    //One to many relationship

    public function assessment()
    {
        return $this->hasMany(Assessment::class);
    }

    public function grades() {
        return $this->hasMany(Grade::class);
    }
}
