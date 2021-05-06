<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class TambahDataController extends Controller
{
    public function pginsert()
    {
        return view('tambah');
    }
    public function insert(Request $req)
    {
        $data = new Data();
        $data->judul = $req->get('judul');
        $data->studio = $req->get('studio');
        $data->tahun = $req->get('tahun');
        $data->verified = 0;
        $data->save();

        return redirect()->route('home');
    }
}
