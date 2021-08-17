<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderformInput extends Model
{
    use HasFactory;
    protected $table = 'orderform';
    protected $primaryKey = 'OID';
    protected $keyType = 'int';
    protected $fillable = [
        'PName',
        'Price',
        'Num',
        'order_ID'
    ];
}
