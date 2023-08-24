<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class komenartikelModel extends Model
{
    public $timestamps = false;
    protected $table = 'komen_artikel';
    protected $guarded = ['id'];
}
