<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suscriber extends Model
{
    use HasFactory;

    protected $table = 'suscriber';
    // protected $timestamp = false;
    protected $fillable = [
        'email_suscriber',
        'created_at',
        'updated_at'
    ];
}
