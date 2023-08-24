<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class SipilModel extends Model
{
    protected $table = 'data_sipil';
    protected $guarded = ['id'];
    public $timestamps = false;
}
