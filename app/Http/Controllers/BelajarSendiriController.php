<?php

namespace App\Http\Controllers;

use App\Models\Belajar_sendiri;
use Illuminate\Http\Request;

class BelajarSendiriController extends Controller
{
    public function index() {
        $belajar_sendiri = Belajar_sendiri::all();
        //dd($belajar_sendiri);
        return view('belajar.index', compact('belajar_sendiri'));
    }
    public function store(Request $request) {
        dd($request->all());
    }
}
