<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\GuestCategory;
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

        public function guest_cat()
        {
            $data = GuestCategory::get();
            return view('admin.guest_category.index',[
                'data'=>$data
            ]);
        }

        public function receptionist()
        {
            $data = Guest::get();
            return view('receptionist.index',[
                'data'=>$data
            ]);
            
        }

        public function security()
        {
            /*$data['data'] = \DB::table('guest_master')
            ->leftjoin('guest_cat', 'guest_cat.gc_id','=', 'guest_master.id')
            ->get();

            $data2 = \DB::table('guest_cat')
            ->join('guest_cat', 'guest_cat.gc_id','=', 'guest_master.id')
            ->get();
            dd($data['data'], $data2);

            return view('security.index', $data);
            */


            $data = Guest::get();
            return view('security.index',[
                'data'=>$data
            ]);
        }
}
