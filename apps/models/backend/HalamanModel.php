<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class HalamanModel extends Model
{
    public $timestamps = false;
    protected $table = 'halaman';
    protected $guarded = ['id'];
}
