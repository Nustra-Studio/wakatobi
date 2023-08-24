<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class KehutananModel extends Model
{
    protected $table = 'data_kehutanan';
    protected $guarded = ['id'];
    public $timestamps = false;
}
