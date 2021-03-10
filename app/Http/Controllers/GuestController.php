<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GuestCategory;
use App\Models\Guest;
use DataTables;
use Ramsey\Uuid\Uuid;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class GuestController extends Controller
{
    //
    public function index()
    {
        $data['gc'] = \DB::table('guest_cat')->pluck('gc_tipe', 'gc_tipe');

        return view('guest.guest', $data);
        /*  $data = Guest::get();
          return view('guest.index',[
              'data'=>$data
          ]);
          */
    }
    public function guest(Request $request)
    {
        return view('guest.survey');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $gc = DB::table('guest_cat')->where('gc_tipe',$request->guestcategory)->first();
        
        $store =[
            'id' => Uuid::uuid4(),
            'gc_id' => $gc->id,
            'gm_nama' => $request->nama,
            'gm_tlp' => $request->tlp,
            'gm_almt' => $request->alamat,
            'gm_inst' => $request->instansi,
            'gpic_id' => Uuid::uuid4(),
            'gm_wj' => $request->jam,
            'gm_tjn' => $request->dtltujuan,
            'gm_jd' => Carbon::now()->setTimezone('asia/jakarta'),
            'gm_suhu' => $request->suhu,
            'gm_srv1' => ($request->r1 == "Ya")?1:0,
            'gm_srv2' => ($request->r2 == "Ya")?1:0,
            'gm_srv3' => ($request->r3 == "Ya")?1:0,
            'gm_srv4' => ($request->r4 == "Ya")?1:0
        ];
        // dd($store);
        
        \DB::table('guest_master')->insert($store);
        return redirect()->back(); 
      
    }
    /* $store =[
        'id'=>Uuid::uuid4(),
        'gc_id'=>$request->gc,
        'gm_nama'=>'nama tamu',
        'gm_tlp'=>'123123',
        'gm_almt'=>'alamat',
        'gm_inst'=>'instansi',
        'gpic_id'=>Uuid::uuid4(),            
        'gm_wj'=>Carbon::now(),
        'gm_tjn'=>'tujuan',
        'gm_jd'=>Carbon::now(),
        'gm_suhu'=>'35.5',
        'gm_srv1'=>''
        $table->boolean('gm_srv1')
        $table->boolean('gm_srv2')
        $table->boolean('gm_srv3')
        $table->boolean('gm_srv4')
      ];

      Alert::question('Data yang diisi sudah selesai?');
        return back();*/


    // return $request;
    // return view ('guest.survey');


    
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
