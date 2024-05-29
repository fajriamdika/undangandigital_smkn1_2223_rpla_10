<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengantinModel extends Model
{
    use HasFactory;
    protected $table = 'pengantin';
    protected $primarykey = 'id_pengantin';
    protected $fillable = ['nama_pengantin_pria','nama_pengantin_wanita','pria_anak_dari','wanita_anak_dari','nomor_rekening'];

}
