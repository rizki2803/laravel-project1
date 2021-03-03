<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Ramsey\Uuid\Uuid;

class CreateTbTamuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_tamu', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama_tamu')->nullable();
            $table->integer('no_ktp')->unique()->nullable();
            $table->integer('id_tipetamu')->unique()->nullable();
            $table->string('alamat')->nullable();
            $table->string('email')->nullable();
            $table->string('instansi')->nullable();
            $table->integer('id_pegawai')->unique()->nullable();
            $table->string('tujuan')->nullable();
            $table->boolean('janji')->nullable();
            $table->time('jam_bertemu')->nullable();
            $table->float('suhu_tubuh')->nullable();
            $table->boolean('survey1')->nullable();
            $table->boolean('survey2')->nullable();
            $table->boolean('survey3')->nullable();
            $table->boolean('survey4')->nullable();
            $table->boolean('survey5')->nullable();
            $table->boolean('survey6')->nullable();
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
