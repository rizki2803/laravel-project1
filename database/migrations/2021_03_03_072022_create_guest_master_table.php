<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Ramsey\Uuid\Uuid;

class CreateGuestMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guest_master', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('gc_id');
            $table->string('gm_nama')->nullable();
            $table->integer('gm_tlp')->nullable();
            $table->string('gm_almt')->nullable();
            $table->string('gm_inst')->nullable();
            $table->uuid('gpic_id');            
            $table->time('gm_wj')->nullable();
            $table->string('gm_tjn')->nullable();
            $table->time('gm_jd')->nullable();
            $table->float('gm_suhu')->nullable();
           ->nullable();
            $table->time('gm_klr')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guest_master');
    }
}
