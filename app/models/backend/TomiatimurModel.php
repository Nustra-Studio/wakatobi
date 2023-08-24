<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class TomiatimurModel extends Model
{
    protected $table = 'data_tomiatimur';
    protected $guarded = ['id'];
    public $timestamps = false;
}
