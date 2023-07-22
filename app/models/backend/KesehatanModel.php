<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class KesehatanModel extends Model
{
    protected $table = 'data_kesehatan';
    protected $guarded = ['id'];
    public $timestamps = false;
}
