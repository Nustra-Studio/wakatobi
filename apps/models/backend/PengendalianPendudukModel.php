<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class PengendalianPendudukModel extends Model
{
    protected $table = 'data_pengendalian_penduduk';
    protected $guarded = ['id'];
    public $timestamps = false;
}
