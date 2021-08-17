<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cartSendModel extends Model
{
    use HasFactory;
    protected $table = 'cart';
    protected $primaryKey = 'Account';
    protected $keyType = 'string';
    protected  $fillable = [
        'Account',
        'Time',
        'PName',
        'Num'
    ];
}
