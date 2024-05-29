<?php

namespace App\Http\Controllers;

use App\Models\PesanModel;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    //
    public function Index(){
        return view('pesan.index');
    }
    public function simpan(Request $request){
        $data = $request->validated([
            'nama_pemesan' => ['required'],
            'nama_pengantin_pria' => ['required'],
            'nama_pengantin-wanita' => ['required'],
            'pria_anak_dari' => ['required'],
            'wanita_anak_dari' => ['required'],

        ]);
        $dataBaru = PesanModel::create($data);
        if($dataBaru):
            $pesan = [
                'status' => 'success',
                'pesan'  => 'Data Barang Baru berhasil ditambahkan ke dalam database'
            ];
        else:
            $pesan = [
                'status' => 'error',
                'pesan'  => 'Data Barang Baru gagal ditambahkan'
            ];
        endif;
return response()->json($pesan);

    }
}
