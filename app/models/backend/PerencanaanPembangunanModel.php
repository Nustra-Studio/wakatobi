<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class PerencanaanPembangunanModel extends Model
{
    protected $table = 'data_perencanaan_pembangunan';
    protected $guarded = ['id'];
    public $timestamps = false;
}
