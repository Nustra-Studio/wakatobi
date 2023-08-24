<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class KepegawaianModel extends Model
{
    protected $table = 'data_kepegawaian';
    protected $guarded = ['id'];
    public $timestamps = false;
}
