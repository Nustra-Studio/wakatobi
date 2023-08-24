<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class BeritaModel extends Model
{
    public $timestamps = true;
    protected $table = 'berita';
    protected $guarded = ['id'];
}
