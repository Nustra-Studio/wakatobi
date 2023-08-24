<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class BinongkoModel extends Model
{
    protected $table = 'data_binongko';
    protected $guarded = ['id'];
    public $timestamps = false;
}
