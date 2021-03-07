<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Guest;
use Ramsey\Uuid\Uuid;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
            Guest::create([
             /*   'id'=>Uuid::uuid4(),
                'nama_tamu'=>'nama tamu',
                'id_category'=>Uuid::uuid4(),
                'tlp'=>'123123',
                'alamat'=>'alamat',
                'instansi'=>'instansi',
                'tujuan'=>'tujuan',
                'nama_pic'=>'nama pic',
                'jam_janji'=>Carbon::now(),
                'detail_tujuan'=>'detail tujuan',
                'jam_kedatangan'=>Carbon::now(),
                'suhu_tubuh'=>'12.3',
               */  
                'id'=>Uuid::uuid4(),
                'gc_id'=>Uuid::uuid4(),
                'gm_nama'=>'nama tamu',
                'gm_tlp'=>'123123',
                'gm_almt'=>'alamat',
                'gm_inst'=>'instansi',
                'gpic_id'=>Uuid::uuid4(),            
                'gm_wj'=>Carbon::now(),
                'gm_tjn'=>'tujuan',
                'gm_jd'=>Carbon::now(),
                'gm_suhu'=>'35.5'
            ]);
    }
}
