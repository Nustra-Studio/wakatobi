<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class PenelitianPengembanganModel extends Model
{
    protected $table = 'data_penelitian_pengembangan';
    protected $guarded = ['id'];
    public $timestamps = false;
}
