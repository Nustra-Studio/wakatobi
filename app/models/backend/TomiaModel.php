<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class TomiaModel extends Model
{
    protected $table = 'data_tomia';
    protected $guarded = ['id'];
    public $timestamps = false;
}
