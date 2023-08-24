<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class PendidikanModel extends Model
{
    protected $table = 'data_pendidikan';
    protected $guarded = ['id'];
    public $timestamps = false;
}
