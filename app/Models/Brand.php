<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'namabrand',
        'gambar',
        'logo',
        'deskripsi_singkat',
        'deskripsi_lengkap',
        'link',
    ];
}
