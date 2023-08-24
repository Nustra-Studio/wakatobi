<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class KebudayaanModel extends Model
{
    protected $table = 'data_kebudayaan';
    protected $guarded = ['id'];
    public $timestamps = false;
}
