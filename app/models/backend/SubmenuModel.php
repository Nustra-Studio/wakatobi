<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class SubmenuModel extends Model
{
    public $timestamps = false;
    protected $table = 'submenu';
    protected $guarded = ['id'];
}
