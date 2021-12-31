<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model {
    use HasFactory;

    protected $table = 'feedback';
    protected $primaryKey = 'id';
    // protected $timestamp = false;
    protected $fillable = [
        'nama_sender',
        'email_sender',
        'phone_sender',
        'pesan',
        'rating',
        'created_at',
        'updated_at'
    ];
}
