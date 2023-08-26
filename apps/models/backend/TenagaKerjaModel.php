<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class TenagaKerjaModel extends Model
{
    protected $table = 'data_tenagakerja';
    protected $guarded = ['id'];
    public $timestamps = false;
}
