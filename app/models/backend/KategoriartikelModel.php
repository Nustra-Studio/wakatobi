<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class KategoriartikelModel extends Model
{
    public $timestamps = false;
    protected $table = 'kategori_artikel';
    protected $guarded = ['id'];
}
