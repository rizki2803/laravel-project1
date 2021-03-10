<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\GuestCategory;
use App\Models\Guest;
use DataTables;
use Ramsey\Uuid\Uuid;
use Carbon\Carbon;


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
        public function guest_master()
        {
            $data ['gc'] = \DB::table('guest_master')->get();
            return view('admin.guest_master.index', $data);
            
        }
        public function guest_cat()
        {
            $data ['gc'] = \DB::table('guest_cat')->get();
            //$data ['gm'] = \DB::table('guest_master')->select('gm_nama')->first();
            //$data ['gc'] = GuestCategory::all();
            return view('admin.guest_category.index', $data);
        }

        public function guest_cat_form()
        {

            return view ('admin.guest_category.form'); 
        }

        public function guest_cat_crt(Request $request)
        {
            $store = [
                'id' => Uuid::uuid4(),
                'gc_tipe' => $request->gc_tipe,
            ];
            
            \DB::table('guest_cat')->insert($store);
            return view ('admin.guest_category.success'); 
        }

        public function guest_cat_edit($id)
        {
            $tipe ['gc'] = \DB::table('guest_cat')->where('id',$id)->first();

            return view ('admin.guest_category.edit', $tipe);
        }

        public function guest_cat_upt(Request $request, $id)
        {
            $store = [
                //'id' => Uuid::uuid4(),
                'gc_tipe' => $request->gc_tipe
            ];

            \DB::table('guest_cat')->where('id', $id)->update($store);
            return view ('admin.guest_category.success'); 
        }

        public function guest_cat_del($id)
        {
            
            $a = \DB::table('guest_cat')->where('id', $id)->delete();
            
            /*return $id;
            $del_id = GuestCategory::find($id)->delete();
            if($del_id){}*/
                
            return redirect()->back();   
        }
        //---------------------------CATEGORY

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

        public function security_upt($id)
        {
            $a = \DB::table('guest_master')->where('id', $id)->first();
            /*->insert([
                'gm_klr' => Carbon::now()
                ]);*/
                dd($a);
            return redirect()->back();   
        }
}
