<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class ModalModel extends Model
{
    protected $table = 'data_modal';
    protected $guarded = ['id'];
    public $timestamps = false;
}
