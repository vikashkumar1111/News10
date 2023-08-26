<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccessControl extends Model
{
    use HasFactory;
    protected $fillable = [
        'roles',
        'access_permission',
        'is_checked',
    ];
}
