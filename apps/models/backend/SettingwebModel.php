<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class SettingwebModel extends Model
{
    public $timestamps = false;
    protected $table = 'web_setting';
    protected $guarded = ['id'];
}
