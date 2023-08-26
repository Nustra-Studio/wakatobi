<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class PerdaganganModel extends Model
{
    protected $table = 'data_perdagangan';
    protected $guarded = ['id'];
    public $timestamps = false;
}
