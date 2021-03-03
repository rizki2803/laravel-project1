<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TamuController extends Controller
{
    public function index() 
    {
        $Tamu = Tamu::all();
        return $Tamu;
    }
}
