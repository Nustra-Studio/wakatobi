<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class KominfoModel extends Model
{
    protected $table = 'data_kominfo';
    protected $guarded = ['id'];
    public $timestamps = false;
}
