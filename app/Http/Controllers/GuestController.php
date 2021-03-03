<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;

class GuestController extends Controller{
    //
    
    public function index()
    {
    
       $Guest = \Guest::get();
        dd($Guest);
        return view("guest.index",[
            "Gues" => $data
        ]);
    }
}
