<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class KoperasiModel extends Model
{
    protected $table = 'data_koperasi';
    protected $guarded = ['id'];
    public $timestamps = false;
}
