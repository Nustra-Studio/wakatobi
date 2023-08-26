<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class KaledupaSelatanModel extends Model
{
    protected $table = 'data_kaledupaselatan';
    protected $guarded = ['id'];
    public $timestamps = false;
}
