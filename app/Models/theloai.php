<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class theloai extends Model
{
    use HasFactory;
    protected $table = 'theloais';
    protected $fillable = [
        'tentheloai',
        'hinhanh',
    ];
}
