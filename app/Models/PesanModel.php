<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesanModel extends Model
{
    use HasFactory;
    protected $table = 'pemesanan';
    protected $primarykey = 'id_pemesanan';
    protected $fillable = ['nama_pemesan','alamat_akad','alamat_resepsi','tanggal_pernikahan'];
    protected $timestamp = false;
}
