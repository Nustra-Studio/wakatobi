<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class RangkingModel extends Model
{
    protected $table = 'rangking';
    protected $guarded = ['id'];
    public $timestamps = false;
}
