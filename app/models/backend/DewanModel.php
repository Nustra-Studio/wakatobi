<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class DewanModel extends Model
{
    protected $table = 'data_sekertariat_dewan';
    protected $guarded = ['id'];
    public $timestamps = false;
}
