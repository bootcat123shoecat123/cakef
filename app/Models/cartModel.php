<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cartModel extends Model
{
    use HasFactory;
    protected $table = 'cart';
    protected $primaryKey = array('Account','PName');
    protected $keyType = 'string';
    protected  $fillable = [
        'Account',
        'Time',
        'PName',
        'Num'
    ];
}
