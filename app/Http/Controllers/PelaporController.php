<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Pelapor;
use App\Models\Pelapor as ModelsPelapor;

class PelaporController extends Controller
{
    public function home()
    {
        return view('dashboard.masyarakat.home');
    }
    public function pelapor()
    {
        $pelapor = ModelsPelapor::all();
        return view('dashboard.masyarakat.pelapor', compact('pelapor'));
    }
    public function store(Request $request){
        ModelsPelapor::create($request->except(['_token','submit']));
        return redirect('/home') ;
    }
}
