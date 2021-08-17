<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderform_mainInput extends Model
{
    use HasFactory;
    protected $table = 'order_main';
protected $primaryKey = 'order_ID';
protected $keyType = 'int';
protected $fillable = [
    'Account'
];
}
