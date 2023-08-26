<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class KategoriberitaModel extends Model
{
    public $timestamps = false;
    protected $table = 'kategori_berita';
    protected $guarded = ['id'];
}
