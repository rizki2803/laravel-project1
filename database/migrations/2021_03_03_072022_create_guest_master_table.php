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
            $table->string('nama_tamu')->nullable();
            $table->integer('tlp')->nullable();
            $table->string('alamat')->nullable();
            $table->string('instansi')->nullable();
            $table->string('tujuan')->nullable();
            $table->string('nama_pic')->nullable();            
            $table->time('jam_janji')->nullable();
            $table->string('detail_tujuan')->nullable();
            $table->time('jam_kedatangan')->nullable();
            $table->float('suhu_tubuh')->nullable();
            $table->boolean('survey1')->nullable();
            $table->boolean('survey2')->nullable();
            $table->boolean('survey3')->nullable();
            $table->boolean('survey4')->nullable();
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
