<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = "pelanggan";
    protected $primaryKey = 'email';
    protected $fillable = ['username','password','email'];
}
