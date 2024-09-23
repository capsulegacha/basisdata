<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kontak extends Model
{
    use HasFactory, SoftDeletes; // Add this line

    protected $table = 'datakontak';
    protected $fillable = ['name', 'phone', 'email', 'city', 'work_info'];

    // Optional: Define the date for soft deletes
    protected $dates = ['deleted_at'];
}

