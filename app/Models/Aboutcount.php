<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aboutcount extends Model
{
    use HasFactory;

    protected $table = 'aboutcount';

    protected $fillable = [
        'insan_satylaksana',
        'distribution_center',
        'csr_partner',
        'sku_products',
    ];
}
