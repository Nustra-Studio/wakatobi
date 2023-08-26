<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class StatistikModel extends Model
{
    protected $table = 'data_statistik';
    protected $guarded = ['id'];
    public $timestamps = false;
}
