<?php

namespace App\Http\Controllers;

use App\Http\Requests\PesanRequest;
use App\Models\PesanModel;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    //
    public function Index(){

        return view('pesan.index');
    }
    public function simpan(PesanRequest $request){
        $data = $request->validated();
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
