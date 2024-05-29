<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesanModel extends Model
{
    use HasFactory;
    protected $table = 'pemesanan';
    protected $primarykey = 'id_pemesanan';
    protected $fillable = ['nama_pemesan','nama_pengantin_pria','nama_pengantin_wanita',
                            'pria_anak_dari','wanita_anak_dari','nomor_rekening','tanggal_pernikahan','alamat_resepsi',];
    protected $timestamp = false;
}
