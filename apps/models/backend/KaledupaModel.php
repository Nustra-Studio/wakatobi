<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class KaledupaModel extends Model
{
    protected $table = 'data_kaledupa';
    protected $guarded = ['id'];
    public $timestamps = false;
}
