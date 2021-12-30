<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lawyer;

class Transaksi extends Model {
    use HasFactory;

    protected $table = 'transaksi';
    protected $primaryKey = 'id_transaksi';
    // protected $timestamp = false;
    protected $fillable = [
        'lawyer_id',
        'jenis_hukum',
        'nama_klien',
        'email_klien',
        'tgl_meet',
        'waktu_meet',
        'status',
        'deskripsi',
        'keterangan',
    ];

    public function transaksi(){
        return $this->belongsTo(Lawyer::class);
    }
}
