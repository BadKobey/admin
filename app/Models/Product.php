<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded = false;

    protected $fillable = [
        'article',
        'nomenclature',
        'price',
        'count',
    ];
    use HasFactory;
}
