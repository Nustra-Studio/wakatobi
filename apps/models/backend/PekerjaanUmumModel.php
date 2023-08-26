<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class PekerjaanUmumModel extends Model
{
    protected $table = 'data_pekerjaan_umum';
    protected $guarded = ['id'];
    public $timestamps = false;
}
