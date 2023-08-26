<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class PersandianModel extends Model
{
    protected $table = 'data_persandian';
    protected $guarded = ['id'];
    public $timestamps = false;
}
