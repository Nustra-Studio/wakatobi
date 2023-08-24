<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class LingkunganHidupModel extends Model
{
    protected $table = 'data_lingkungan_hidup';
    protected $guarded = ['id'];
    public $timestamps = false;
}
