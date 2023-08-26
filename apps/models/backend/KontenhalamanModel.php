<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class KontenhalamanModel extends Model
{
    public $timestamps = true;
    protected $table = 'konten_halaman';
    protected $guarded = ['id'];
}
