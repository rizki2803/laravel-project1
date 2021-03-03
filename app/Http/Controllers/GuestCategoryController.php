<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GuestCategory;

class GuestCategoryController extends Controller
{
public function index()
{
    $data = GuestCategory::get();
    return view('admin.guest_category.index',[
        'data'=>$data
    ]);
}
}
