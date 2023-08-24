<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class PerindustrianModel extends Model
{
    protected $table = 'data_perindustrian';
    protected $guarded = ['id'];
    public $timestamps = false;
}
