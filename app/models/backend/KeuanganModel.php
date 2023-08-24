<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class KeuanganModel extends Model
{
    protected $table = 'data_keuangan';
    protected $guarded = ['id'];
    public $timestamps = false;
}
