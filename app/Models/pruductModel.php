<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pruductModel extends Model
{
use HasFactory;
protected $table = 'product';
protected $primaryKey = 'PName';
protected $keyType = 'string';
protected $fillable = [
    'Stock'
];
}
