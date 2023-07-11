<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        // 'id_Role',
        'img_profile',
        'fname',
        'email',
        'password',
        'role',
    ];
}
