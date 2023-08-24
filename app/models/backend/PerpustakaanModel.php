<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class PerpustakaanModel extends Model
{
    protected $table = 'data_perpustakaan';
    protected $guarded = ['id'];
    public $timestamps = false;
}
