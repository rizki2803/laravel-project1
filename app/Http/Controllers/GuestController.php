<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GuestCategory;
use Ramsey\Uuid\Uuid;


class GuestController extends Controller{
    //
    
    public function index()
    {
        // for($i = 2;$i<=5;$i++){
        //     $res = GuestCategory::create([
        //         'id'=>Uuid::uuid4(),
        //         'category'=>'category'.$i
        //     ]);
        // }

        // if($res){
        //     return " berhasil ";
        // }else{
        //     return " gagal ";
        // }
    
    //    $Guest = GuestCategory::get();
    //     return $Guest;
    //     return view("receptionist.index",[
    //         "Guest" => $Guest
    //     ]);
    }
}
