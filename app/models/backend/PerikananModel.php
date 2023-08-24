<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class PerikananModel extends Model
{
    protected $table = 'data_perikanan';
    protected $guarded = ['id'];
    public $timestamps = false;
}
