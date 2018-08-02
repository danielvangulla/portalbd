<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbsensiDepartemensub extends Model
{
    protected $table = "absensi_departemensubs";
	
	public function departemen()
    {
        return $this->belongsTo('AbsensiDepartemen');
    }
	
}
