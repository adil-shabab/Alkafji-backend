<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluminium extends Model
{
    use HasFactory;
    protected $table = 'aluminium';

    protected $fillable = [
        'image','title'
    ];
}
