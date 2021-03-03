<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tamu;

class TamuController extends Controller
{
    public function index() 
    {
        $Tamu = Tamu::all();
        return $Tamu;
    }
}
