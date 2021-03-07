<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;

class ReceptionistController extends Controller
{
    public function index()
{
    $data = Guest::get();
    return view('receptionist.index',[
        'data'=>$data
    ]);
}
}
