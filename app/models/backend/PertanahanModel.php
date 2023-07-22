<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class PertanahanModel extends Model
{
    protected $table = 'data_pertanahan';
    protected $guarded = ['id'];
    public $timestamps = false;
}
