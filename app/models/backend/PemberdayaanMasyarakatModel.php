<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class PemberdayaanMasyarakatModel extends Model
{
    protected $table = 'data_pemberdayaan_masyarakat';
    protected $guarded = ['id'];
    public $timestamps = false;
}
