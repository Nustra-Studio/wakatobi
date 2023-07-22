<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class SliderModel extends Model
{
    public $timestamps = false;
    protected $table = 'slider';
    protected $guarded = ['id'];
}
