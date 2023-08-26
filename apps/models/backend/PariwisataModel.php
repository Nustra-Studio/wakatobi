<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class PariwisataModel extends Model
{
    protected $table = 'data_pariwisata';
    protected $guarded = ['id'];
    public $timestamps = false;
}
