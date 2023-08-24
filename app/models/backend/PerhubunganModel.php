<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class PerhubunganModel extends Model
{
    protected $table = 'data_perhubungan';
    protected $guarded = ['id'];
    public $timestamps = false;
}
