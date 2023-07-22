<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class PertanianModel extends Model
{
    protected $table = 'data_pertanian';
    protected $guarded = ['id'];
    public $timestamps = false;
}
