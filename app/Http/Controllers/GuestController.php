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
use Validator;


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
            $gc = DB::table('guest_cat')->where('gc_tipe', $request->guestcategory)->first();

            $pic = $request->pic;
/*
            $pic_telp = $request->pic_telp;

            $simbol = '@';

            if (preg_match("/$simbol/i", $pic_telp))
                {
                    $pic_conv = strtolower($pic_telp);
                }

            else
                {
                    $pic_conv = strtolower($pic_telp);
                }

            if($pic == null || empty($pic) || $pic_telp == null || empty($pic_telp))
                {
                    Alert::error('ERROR', 'Nama/Telp/Email PIC tidak diisi, Silahkan masukan kembali!');
                }

            else
                {

                    $url = 'http://hris.hariff.co.id/api/get_nama/'.$pic_conv;
                    $response = file_get_contents($url);
                    $check = json_decode($response);

                    if($check === 'Tidak Ada')
                        {

                            $pic_conv = strtoupper(str_replace(' ', '%20', $pic));

                            $url = 'http://hris.hariff.co.id/api/get_nama/'.$pic_conv;
                            $response = file_get_contents($url);
                            $check = json_decode($response);

                            if($check === 'Tidak Ada')
                            {
                                Alert::error('ERROR', 'Nama/Telp/Email PIC tidak sesuai, Silahkan masukan kembali!');
                            }

                            elseif ($pic_conv == $check->emp_nama || $check->bio_email || $check->bio_no_hp)
                            {
                                $a = $check->emp_nama;
                                $nama = $request->nama;
                                if(!preg_match("/^[a-zA-Z ]*$/",$nama))
                                {
                                    $nama = false;
                                    Alert::error('ERROR', 'Nama Harus diisi Dengan Huruf, Silahkan masukan kembali!');
                                }

                                else
                                {
                                    $store = [
                                        'gm_id' => Uuid::uuid4(),
                                        'gc_id' => $gc->gc_id,
                                        'gm_nama' => strtoupper($nama),
                                        'gm_tlp' => $request->tlp,
                                        'gm_almt' => $request->alamat,
                                        'gm_inst' => $request->nama_aktif,
                                        'gm_pic' => $a,
                                        'gm_wj' => $request->jam,
                                        'gm_tjn' => $request->dtltujuan,
                                        'gm_jd' => Carbon::now()->setTimezone('asia/jakarta'),
                                        'gm_suhu' => $request->suhu,
                                        'gm_srv1' => ($request->r1 == "Ya") ? 1 : 0,
                                        'gm_srv2' => ($request->r2 == "Ya") ? 1 : 0,
                                        'gm_srv3' => ($request->r3 == "Ya") ? 1 : 0,
                                        'gm_srv4' => ($request->r4 == "Ya") ? 1 : 0
                                    ];

                                    \DB::table('guest_master')->insert($store);

                                    Alert::success('Success Title', 'Data berhasil diisi, Silahkan Menunggu di Lobby');
                                }

                            }

                        }


                    elseif ($pic_conv == $check->emp_nama || $check->bio_email || $check->bio_no_hp)
                        {
                            $a = $check->emp_nama;
                            $nama = $request->nama;
                            if(!preg_match("/^[a-zA-Z ]*$/",$nama))
                                {
                                    $nama = false;
                                    Alert::error('ERROR', 'Nama Harus diisi Dengan Huruf, Silahkan masukan kembali!');
                                }

                            else
                                {
                                    $store = [
                                        'gm_id' => Uuid::uuid4(),
                                        'gc_id' => $gc->gc_id,
                                        'gm_nama' => strtoupper($nama),
                                        'gm_tlp' => $request->tlp,
                                        'gm_almt' => $request->alamat,
                                        'gm_inst' => $request->nama_aktif,
                                        'gm_pic' => $a,
                                        'gm_wj' => $request->jam,
                                        'gm_tjn' => $request->dtltujuan,
                                        'gm_jd' => Carbon::now()->setTimezone('asia/jakarta'),
                                        'gm_suhu' => $request->suhu,
                                        'gm_srv1' => ($request->r1 == "Ya") ? 1 : 0,
                                        'gm_srv2' => ($request->r2 == "Ya") ? 1 : 0,
                                        'gm_srv3' => ($request->r3 == "Ya") ? 1 : 0,
                                        'gm_srv4' => ($request->r4 == "Ya") ? 1 : 0
                                    ];

                                    \DB::table('guest_master')->insert($store);

                                    Alert::success('Success Title', 'Data berhasil diisi, Silahkan Menunggu di Lobby');
                                }
                        }

                }
*/
            $store = [
                'gm_id' => Uuid::uuid4(),
                'gc_id' => $gc->gc_id,
                'gm_nama' => $request->nama,
                'gm_tlp' => $request->tlp,
                'gm_almt' => $request->alamat,
                'gm_inst' => $request->nama_aktif,
                'gm_pic' => $pic,
                'gm_wj' => $request->jam,
                'gm_tjn' => $request->dtltujuan,
                'gm_jd' => Carbon::now()->setTimezone('asia/jakarta'),
                'gm_suhu' => $request->suhu,
                'gm_srv1' => ($request->r1 == "Ya") ? 1 : 0,
                'gm_srv2' => ($request->r2 == "Ya") ? 1 : 0,
                'gm_srv3' => ($request->r3 == "Ya") ? 1 : 0,
                'gm_srv4' => ($request->r4 == "Ya") ? 1 : 0
            ];

            \DB::table('guest_master')->insert($store);

            Alert::success('Success Title', 'Data berhasil diisi, Silahkan Menunggu di Lobby');

            return back();

        }



//---------------------------ADMIN GUEST MASTER----------------------------------------------
    public function guest_master(Request $request)
        {
            if(($request->has('min')) && ($request->has('max'))) {
                $data = Guest::select('*')
                    ->join('guest_cat', 'guest_cat.gc_id','=', 'guest_master.gc_id')
                    ->wherebetween('gm_jd',[$request->min.' 00:00:00', $request->max.' 23:59:59'])
                    ->get();
                //dd($request->min, $request->max);
            }
            else {
                $data = Guest::select('*')
                    ->join('guest_cat', 'guest_cat.gc_id','=', 'guest_master.gc_id')
                    ->get();
            }
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

    public function guest_cat_store()
        {
            return view('admin.guest_category.store');
        }

    public function guest_cat_crt(Request $request)
        {
            $gc_tipe_conv = strtoupper($request->gc_tipe);

            $store = [
                'gc_id' => Uuid::uuid4(),
                'gc_tipe' => $gc_tipe_conv,
            ];

            \DB::table('guest_cat')->insert($store);
            return redirect()->route('gc_get')->with(['success' => 'Update successfully']);
        }

    public function guest_cat_edit($id)
        {
            $tipe ['gc'] = \DB::table('guest_cat')->where('gc_id', $id)->first();

            return view('admin.guest_category.edit', $tipe);
        }

    public function guest_cat_upt(Request $request, $id)
        {
            $gc_tipe_conv = strtoupper($request->gc_tipe);

            $store = [
                //'id' => Uuid::uuid4(),
                'gc_tipe' => $gc_tipe_conv
            ];

            \DB::table('guest_cat')->where('gc_id', $id)->update($store);
            return redirect()->route('gc_get')->with(['success' => 'Update successfully']);
        }

    public function guest_cat_del($id)
        {

            \DB::table('guest_cat')->where('gc_id', $id)->delete();

            return redirect()->back()->with('warning','User deleted successfully, Can not be returned!');
        }
//END---------------------------CATEGORY----------------------------------------------

//---------------------------RECEPTIONIST----------------------------------------------
    public function receptionist(Request $request)
        {
            /*$data = Guest::select('*')
                ->join('guest_cat', 'guest_cat.gc_id','=', 'guest_master.gc_id')
                ->get();*/

            if(($request->has('min')) && ($request->has('max'))) {
                $data = Guest::select('*')
                    ->join('guest_cat', 'guest_cat.gc_id','=', 'guest_master.gc_id')
                    ->wherebetween('gm_jd',[$request->min.' 00:00:00', $request->max.' 23:59:59'])
                    ->get();
                //dd($request->min, $request->max);
            }
            else {
                //dd($request->date_filter);
                $data = Guest::select('*')
                    ->join('guest_cat', 'guest_cat.gc_id','=', 'guest_master.gc_id')
                    ->get();
            }
            return view('receptionist.index',[
                'data'=>$data
            ]);

        }



//END---------------------------RECEPTIONIST----------------------------------------------

//---------------------------SECURITY----------------------------------------------
    public function security(Request $request)
        {

            /*
            $data = Guest::select('*')
            ->join('guest_cat', 'guest_cat.id','=', 'guest_master.gc_id')
            ->get();
            return view('security.index',[
                'data'=>$data
            ]);
            */
            if(($request->has('min')) && ($request->has('max'))) {
                $data = Guest::select('*')
                    ->join('guest_cat', 'guest_cat.gc_id','=', 'guest_master.gc_id')
                    ->wherebetween('gm_jd',[$request->min.' 00:00:00', $request->max.' 23:59:59'])
                    ->get();
                //dd($request->min, $request->max);
            }
            else {
                //dd($request->date_filter);
                $data = Guest::select('*')
                    ->join('guest_cat', 'guest_cat.gc_id','=', 'guest_master.gc_id')
                    ->get();
            }
                /*$data ['data'] = \DB::table('guest_master')
                                ->join('guest_cat','guest_cat.gc_id','=','guest_master.gc_id')
                                //->select('guest_master.id' ,'guest_cat.gc_tipe','guest_mstr.gm_nama')
                                ->get();*/
                return view ('security.index', [
                    'data'=>$data
                ]);

        }

    public function security_upt($id)
        {

            $store = [
                'gm_klr' => Carbon::now()->setTimezone('asia/jakarta')
            ];

            \DB::table('guest_master')->where('gm_id', $id)->update($store);
            return redirect()->back();
        }

    public function security_upl(Request $request, $id)
    {
        //dd($request->all());

        $this->validate($request, [
            'ktp' => 'required|mimes:jpeg,png,jpg',
        ]);

        $file = $request->file('ktp');
        $tujuan_upload = 'img/doc_ktp/';
        $file->move($tujuan_upload,$file->getClientOriginalName());

        $store = [
            'gm_path' => $tujuan_upload."".$file->getClientOriginalName(),
            'gm_u_stat' => '1',
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

//--------------------------roll----------------------------------------------
