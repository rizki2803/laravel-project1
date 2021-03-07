<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Guest;
use Ramsey\Uuid\Uuid;


class GuestController extends Controller{
    //
    public function index()
    {
        return view ('guest.guest');
      /*  $data = Guest::get();
        return view('guest.index',[
            'data'=>$data
        ]);
        */
    }
    public function combo() {
        $katdb = Kategori::lists('title', 'id');
        return View::make('combo')->with('dcom', $katdb);
      }
}


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
  