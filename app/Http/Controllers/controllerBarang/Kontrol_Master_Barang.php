<?php

namespace App\Http\Controllers\controllerBarang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\master_barang_model as mbm;

class Kontrol_Master_Barang extends Controller
{
    public function index()
    {

    }

    public function view_barang()
    {
        $data = mbm::all();

        return view('pages.view_barang', compact('data'));
    }
}