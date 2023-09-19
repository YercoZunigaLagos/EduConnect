<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    use HasFactory;

    //One to many relationship

    public function student()
    {
        return $this->hasMany(Student::class);
    }
}
