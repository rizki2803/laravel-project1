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
            $table->uuid('guest_id')->primary()->nullable();
            $table->string('guest_nama')->unique()->nullable();
            $table->string('guest_tipe')->nullable();
            $table->integer('guest_nik')->unique()->nullable();
            $table->integer('guest_telp')->nullable();
            $table->string('guest_tujuan')->nullable();
            $table->string('guest_perjanjian')->nullable();
            $table->time('guest_jamkunjung')->nullable();
            $table->float('guest_suhu')->nullable();
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
