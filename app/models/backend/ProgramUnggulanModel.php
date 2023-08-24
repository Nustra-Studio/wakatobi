<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class ProgramUnggulanModel extends Model
{
    protected $table = 'data_program_unggulan';
    protected $guarded = ['id'];
    public $timestamps = false;
}
