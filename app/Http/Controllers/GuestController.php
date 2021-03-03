<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller{
    //
    public function createform(request $REQUEST) {
        return view('guest');  
}
public function GuestController(request $request) {

    $this->validate($request,[
        'nama_tamu' => 'required',
        'tlp' => 'required',
        'alamat' => 'required',
        'instansi' => 'required',
        'tujuan' => 'required',
        'nama_pic' => 'required',
        'jam_janji' => 'required',
        'detail_tujuan' => 'required',
        'jam_kedatangan' => 'required',
        'suhu tubuh'=> 'required',
        'survey1' => 'required',
        'survey2' => 'required',
        'survey3' => 'required',
        'survey4' => 'required'
    ]);

    guest::create($request ->all());

    return back()->with('success');
    }
}
