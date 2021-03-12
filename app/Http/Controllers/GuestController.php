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
        $gc = DB::table('guest_cat')->where('gc_tipe', $request->guestcategory)->first();

        $store = [
            'gm_id' => Uuid::uuid4(),
            'gc_id' => $gc->gc_id,
            'gm_nama' => $request->nama,
            'gm_tlp' => $request->tlp,
            'gm_almt' => $request->alamat,
            'gm_inst' => $request->nama_aktif,
            'gpic_id' => Uuid::uuid4(),
            'gm_wj' => $request->jam,
            'gm_tjn' => $request->dtltujuan,
            'gm_jd' => Carbon::now()->setTimezone('asia/jakarta'),
            'gm_suhu' => $request->suhu,
            'gm_srv1' => ($request->r1 == "Ya") ? 1 : 0,
            'gm_srv2' => ($request->r2 == "Ya") ? 1 : 0,
            'gm_srv3' => ($request->r3 == "Ya") ? 1 : 0,
            'gm_srv4' => ($request->r4 == "Ya") ? 1 : 0
        ];


        dd($store);
        //   \DB::table('guest_master')->insert($store);
        if ($store) {
            Alert::success('Success Title', 'Data berhasil diisi');
        } else {
            Alert::error('Error Title', 'Data yang diisi mungkin belum sesuai atau ada yang masih kosong!');
        }

        return back();

        // return redirect()->back();
        /* $validator = $this->validate($request, [
            'gm_nama' => 'required|min:3',
            'gm_tlp'  =>'required|min:3'
          
         ]);
         dd($validator);
        if ($this->fails()) {

            return back()->with('toast_error', $this->messages()->all()[0])->withInput();
        }
        $task = Guest::create($request->all());
        return redirect()->back()-> with('toast_success', 'Task Created Successfully!');*/
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


//---------------------------ADMIN GUEST MASTER----------------------------------------------
    public function guest_master()
    {
        $data = Guest::select('*')
        ->join('guest_cat', 'guest_cat.gc_id','=', 'guest_master.gc_id')
        ->get();
        return view('admin.guest_master.index', [
            'data'=>$data
        ]);
    }
//END---------------------------ADMIN GUEST MASTER----------------------------------------------

//---------------------------CATEGORY----------------------------------------------    
    public function guest_cat()
    {
        $data['gc'] = \DB::table('guest_cat')->get();
        //$data ['gm'] = \DB::table('guest_master')->select('gm_nama')->first();
        //$data ['gc'] = GuestCategory::all();
        return view('admin.guest_category.index', $data);
    }

    public function guest_cat_form()
    {

        return view('admin.guest_category.form');
    }

    public function guest_cat_crt(Request $request)
    {
        $store = [
            'gc_id' => Uuid::uuid4(),
            'gc_tipe' => $request->gc_tipe,
        ];

        \DB::table('guest_cat')->insert($store);
        return view('admin.guest_category.success');
    }

    public function guest_cat_edit($id)
    {
        $tipe ['gc'] = \DB::table('guest_cat')->where('gc_id', $id)->first();

        return view('admin.guest_category.edit', $tipe);
    }

    public function guest_cat_upt(Request $request, $id)
    {
        $store = [
            //'id' => Uuid::uuid4(),
            'gc_tipe' => $request->gc_tipe
        ];

        \DB::table('guest_cat')->where('gc_id', $id)->update($store);
        return view('admin.guest_category.success');
    }

    public function guest_cat_del($id)
    {

        $a = \DB::table('guest_cat')->where('gc_id', $id)->delete();

        /*return $id;
            $del_id = GuestCategory::find($id)->delete();
            if($del_id){}*/
                
            return redirect()->back();   
        }
//END---------------------------CATEGORY----------------------------------------------

//---------------------------RECEPTIONIST----------------------------------------------
        public function receptionist()
        {
            /*$data ['data'] = \DB::table('guest_master')
            ->leftjoin('guest_cat', 'guest_cat.id','=', 'guest_master.gc_id')
            ->get();
            dd($data['data']);
            */
            $data = Guest::select('*')
                    ->join('guest_cat', 'guest_cat.gc_id','=', 'guest_master.gc_id')
                    ->get();
                    //dd($data2);
            return view('receptionist.index',[
                'data'=>$data
            ]);
        }
//END---------------------------RECEPTIONIST----------------------------------------------
       
//---------------------------SECURITY----------------------------------------------
    public function security()
    {
        
            /*
            $data = Guest::select('*')
            ->join('guest_cat', 'guest_cat.id','=', 'guest_master.gc_id')
            ->get();
            return view('security.index',[
                'data'=>$data
            ]);
            */

                $data ['data'] = \DB::table('guest_master')
                                ->join('guest_cat','guest_cat.gc_id','=','guest_master.gc_id')
                                //->select('guest_master.id' ,'guest_cat.gc_tipe','guest_mstr.gm_nama')
                                ->get();
                return view ('security.index', $data);

        }

        public function security_upt($id)
        {
            
            $store = [
                'gm_klr' => Carbon::now()->setTimezone('asia/jakarta')
            ];
    
            \DB::table('guest_master')->where('gm_id', $id)->update($store);                
            return redirect()->back();   
        }
//END---------------------------SECURITY----------------------------------------------

    public function try()
    {
        
        $a = \DB::table('guest_master')
                ->join('guest_cat','guest_cat.gc_id','=','guest_master.gc_id')
                ->get();

            echo $a;
    }


}
