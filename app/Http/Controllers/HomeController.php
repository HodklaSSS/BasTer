<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Verification;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $datas = Data::all();
        return view('home', compact('datas'));
    }
    public function verif(Request $req)
    {
        $data = Data::find($req->get('id'));
        $data->verif = 1;
        $data->save();

        $verif = new Verification();
        $verif->datas_id = $req->get('id');
        $verif->save();
    }

    public function delete(Request $req)
    {
        $data = Data::find($req->get('id'));
        $data->delete();
        return redirect()->route('home');

    }
}
