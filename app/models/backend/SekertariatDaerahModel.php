<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class SekertariatDaerahModel extends Model
{
    protected $table = 'data_sekertariat_daerah';
    protected $guarded = ['id'];
    public $timestamps = false;
}
