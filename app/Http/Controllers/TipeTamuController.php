<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipeTamu;

class TipeTamuController extends Controller
{
    public function index()
    {
        $TipeTamu = TipeTamu::all();
        return $TipeTamu;
    }
}
