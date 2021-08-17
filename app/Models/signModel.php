<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class signModel extends Model
{
    use HasFactory;
    
    protected $table = 'member';
    protected $primaryKey = 'Account';
    protected $keyType = 'string';
    protected $filable=[
        "Account",
        "Password",
        "Name",
        "Email",
        "Tel"
    ];
}
