<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // protected $name = 'name';
    // protected $age = 'age';

    protected $fillable = ['name', 'age'];


}
