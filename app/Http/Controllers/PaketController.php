<?php

namespace App\Http\Controllers;

use App\Models\PaketModel;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    //
    protected $id_paket;
    protected $harga;
    protected $paketModel;

    public function __construct(){
        $this->paketModel = new PaketModel();
    }

    public function index(){
        return view('paket.index');
    }

    public function tambah(){
        return view('paket.tambah');
    }
}
