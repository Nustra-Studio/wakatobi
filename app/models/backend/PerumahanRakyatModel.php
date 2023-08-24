<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class PerumahanRakyatModel extends Model
{
    protected $table = 'data_perumahan_rakyat';
    protected $guarded = ['id'];
    public $timestamps = false;
}
