<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = "barang";
    protected $primaryKey = 'kd_brg';
    protected $fillable = ['kd_brg','nm_brg','harga','image','deskripsi'];
}
