<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Transaksi;

class Lawyer extends Model {
    use HasFactory;

    protected $table = "lawyer";
    protected $primaryKey = 'id';
    // protected $timestamp = false;
    protected $fillable = [
        'id',
        'nama_lawyer',
        'phone',
        'place_birth',
        'date_birth',
        'address',
        'picture',
        'email',
        'jenis_hukum',
        'deskripsi'
    ];

    public function transaksi(){
        return $this->hasMany(Transaksi::class);
    }
}
