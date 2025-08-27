<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'judul',
        'deskripsi_singkat',
        'tanggal',
        'isi_berita',
        'writer',
        'editor',
        'gambar',
    ];
}
