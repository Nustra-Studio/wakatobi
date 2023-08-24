<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class MenuModel extends Model
{
    public $timestamps = false;
    protected $table = 'menu';
    protected $guarded = ['id'];
}
