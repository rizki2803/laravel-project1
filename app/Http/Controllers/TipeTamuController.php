<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipeTamuController extends Controller
{
    public function index()
    {
        $TipeTamu = TipeTamu::all();
        return $TipeTamu;
    }
}
