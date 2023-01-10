<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Protection extends Model
{
    use HasFactory;

    protected $table = 'protection';

    protected $fillable = [
        'image','title'
    ];
}
