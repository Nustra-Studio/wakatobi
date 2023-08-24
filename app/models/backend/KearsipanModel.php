<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class KearsipanModel extends Model
{
    protected $table = 'data_kearsipan';
    protected $guarded = ['id'];
    public $timestamps = false;
}
