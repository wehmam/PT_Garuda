<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gaji extends Model
{
    use SoftDeletes;

    public function karyawan()
    {
        return $this->belongsTo('App\Karyawan');
    }
}
