<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class backProduct extends Model
{
    use HasFactory;
    protected $table = 'product';
protected $primaryKey = 'PName';
protected $keyType = 'string';
protected $fillable = [
    "PName",
    "Price",
    "Ingredient",
    "Pic",
    "Introduction",
    "Type",
    'Stock'
];
}
