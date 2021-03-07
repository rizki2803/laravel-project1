<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;
    protected $table="guest_master";
    protected $fillable=["gc_id", "gm_nama", "gm_tlp", "gm_almt", "gpic_ip", "gm_wj", 
    "gm_tjn", "gm_jd", "gm_suhu", "gm_srv1", "gm_srv2", "gm_srv3", "gm_srv4"];
}
