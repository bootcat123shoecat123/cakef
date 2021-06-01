<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class memberModel extends Model
{
    use HasFactory;
    protected $table = 'member';
protected $fillable = [
    'Accoount',
    'Password',
    'Name',
    'Email',
    'Tel'
];
}
