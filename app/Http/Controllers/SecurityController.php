<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;

class SecurityController extends Controller
{
    public function index()
{
    $data = Guest::get();
    return view('security.index',[
        'data'=>$data
    ]);
}
}
