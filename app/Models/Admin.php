<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'users';

    // Specify which attributes can be mass-assigned
    protected $fillable = [
        'id',  // Unique identifier for the admin
        'name', // Admin's name
        'email', // Admin's email
        'password', // Admin's password
    ];

    // Optionally, you can hide sensitive attributes
    protected $hidden = [
        'password', // Hiding password when converting to array or JSON
    ];

    // If you want to use timestamps, you can keep this as true
    public $timestamps = true;

}
