<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    public function create() {
        return view('pertanyaan.form');
    }

    public function store(Request $request){
        $now_jawaban = PertanyaanModel::save($request->except('_token'));

        return redirect('/pertanyaan');
    }

    public function index() {
        $pertanyaan = PertanyaanModel::get_all();
        // dd($pertanyaan);
        return view('pertanyaan.index', compact('pertanyaan'));
    }
}
