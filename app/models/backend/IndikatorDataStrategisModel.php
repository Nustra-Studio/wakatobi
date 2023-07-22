<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class IndikatorDataStrategisModel extends Model
{
    protected $table = 'data_indikator_data_strategis';
    protected $guarded = ['id'];
    public $timestamps = false;
}
