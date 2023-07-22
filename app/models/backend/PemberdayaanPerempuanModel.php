<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class PemberdayaanPerempuanModel extends Model
{
    protected $table = 'data_pemberdayaan_perempuan';
    protected $guarded = ['id'];
    public $timestamps = false;
}
