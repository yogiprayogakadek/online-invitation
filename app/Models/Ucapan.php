<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ucapan extends Model
{
    use HasFactory;

    protected $table = 'ucapans';

    protected $fillable = [
        'nama',
        'ucapan',
        'kehadiran'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}