<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Best extends Model
{
    use HasFactory;

    protected $table = 'best';

    protected $fillable = [
        'image','title'
    ];
}
