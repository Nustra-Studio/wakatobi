<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class ArtikelModel extends Model
{
    public $timestamps = true;
    protected $table = 'artikel';
    protected $guarded = ['id'];
}
