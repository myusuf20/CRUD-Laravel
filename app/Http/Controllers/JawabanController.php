<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;

class JawabanController extends Controller
{
    public function create() {
        return view('jawaban.form');
    }

    public function store(Request $request){
        $now_jawaban = JawabanModel::save($request->except('_token'));

        return redirect('/jawaban');
    }

    public function index() {
        $jawaban = JawabanModel::get_all();
        // dd($jawaban);
        return view('jawaban.index', compact('jawaban'));
    }
}
