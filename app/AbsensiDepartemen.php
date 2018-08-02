<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbsensiDepartemen extends Model
{
    protected $table = "absensi_departemens";
	
	
	public function departemensub()
    {
        return $this->hasMany('\App\AbsensiDepartemensub', 'departemen_id');
    }
	
}
