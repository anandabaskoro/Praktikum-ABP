<?php

namespace App\Http\Controllers;

class Lat1Controller extends Controller
{
    public function index()
    {
        $data["nama"] = "NAMA_ANDA";
        $data["asal"] = "Bandung";
        $data["nim"]  = "NIM_ANDA";

        return view('v_latihan1', $data);
    }

    public function method2()
    {
        $data['title'] = "Daftar Mahasiswa";
        $data['nim'] = "NIM_ANDA";
        $data['nama_user'] = "NAMA_ANDA";

        $data['daf_mhs'] = [
            ["nama" => "Agus", "asal" => "Bandung"],
            ["nama" => "Budi", "asal" => "Jakarta"],
            ["nama" => "Roni", "asal" => "Surabaya"],
        ];

        return view('v_latihan2', $data);
    }
}
