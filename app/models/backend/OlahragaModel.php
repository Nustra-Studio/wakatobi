<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class OlahragaModel extends Model
{
    protected $table = 'data_olahraga';
    protected $guarded = ['id'];
    public $timestamps = false;
}
