<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class GaleriModel extends Model
{
    public $timestamps = false;
    protected $table = 'galeri';
    protected $guarded = ['id'];
}
