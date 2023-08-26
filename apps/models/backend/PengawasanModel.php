<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class PengawasanModel extends Model
{
    protected $table = 'data_pengawasan';
    protected $guarded = ['id'];
    public $timestamps = false;
}
