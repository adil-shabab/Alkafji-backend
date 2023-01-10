<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foam extends Model
{
    use HasFactory;
    protected $table = 'foam';

    protected $fillable = [
        'image','title'
    ];
}
