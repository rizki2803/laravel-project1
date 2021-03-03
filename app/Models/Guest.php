<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $table="guest_master";
    protected $fillable=["nama_tamu", "tlp", "alamat", "instansi", "tujuan", 
    "nama_pic", "jam_janji", "detail_tujuan", "jam_kedatangan", "suhu_tubuh", 
    "survey1", "survey2", "survey3", "survey4"];
}
