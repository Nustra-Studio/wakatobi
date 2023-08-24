<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class PanganModel extends Model
{
    protected $table = 'data_pangan';
    protected $guarded = ['id'];
    public $timestamps = false;
}
