<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class KeamananKetertibanModel extends Model
{
    protected $table = 'data_keamanan_ketertiban';
    protected $guarded = ['id'];
    public $timestamps = false;
}
