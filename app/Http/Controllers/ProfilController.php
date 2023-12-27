<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
  public function index(){
    $nama = "Leni NurJannah";
    $alamat = "Kota Bandung";
    $tanggal_lahir = "21 juli 2002";
    $data_array = array(
        "nama" => array(
            "Leni NurJannah", "Warsa", "awokwok",
        ),
    );

    return view('profil', compact('nama',
    'alamat',
    'tanggal_lahir',
    'data_array')
  );
  }
}
