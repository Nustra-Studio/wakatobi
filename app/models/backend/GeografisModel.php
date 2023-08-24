<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class GeografisModel extends Model
{
    protected $table = 'data_geografis';
    protected $guarded = ['id'];
    public $timestamps = false;
}
