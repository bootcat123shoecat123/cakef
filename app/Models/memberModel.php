<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class memberModel extends Model
{
    use HasFactory;
    protected $table = 'member';
    protected $primaryKey = 'Account';
    protected $keyType = 'string';
    protected $fillable = [
        'Password',
        'Email',
        'Tel',
        'Name'
    ];
}
