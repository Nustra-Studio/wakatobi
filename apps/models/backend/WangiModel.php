<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class WangiModel extends Model
{
    protected $table = 'data_wangi';
    protected $guarded = ['id'];
    public $timestamps = false;
}
