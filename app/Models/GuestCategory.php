<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestCategory extends Model
{
    protected $table="guest_cat";
    protected $fillable=["id", "gc_tipe"];
}
