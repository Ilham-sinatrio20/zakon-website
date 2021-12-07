<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD

class Lawyer extends Model
{
    use HasFactory;
=======
use App\Models\Transaksi;

class Lawyer extends Model {
    use HasFactory;

    protected $table = 'lawyer';
    protected $primaryKey = 'id';
    // protected $timestamp = false;
    protected $fillable = [
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
>>>>>>> c2d0e55bcf7d763c03e61d09107a3eea15bc81e5
}
