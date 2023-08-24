<?php

namespace App\models\backend;

use Illuminate\Database\Eloquent\Model;

class PajakRetribusiDaerahModel extends Model
{
    protected $table = 'data_pajak_retribusi_daerah';
    protected $guarded = ['id'];
    public $timestamps = false;
}
