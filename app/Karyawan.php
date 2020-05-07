<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Karyawan extends Model
{
    protected $guarded = [];
    use SoftDeletes;
    public function gaji()
    {
        return $this->hasOne('App\Gaji');
    }
}
