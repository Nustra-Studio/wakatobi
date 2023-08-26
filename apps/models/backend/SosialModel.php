<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class SosialModel extends Model
{
    protected $table = 'data_sosial';
    protected $guarded = ['id'];
    public $timestamps = false;
}
