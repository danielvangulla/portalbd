<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbsensiGroupgajidetail extends Model
{
    protected $table = "absensi_groupgajidetails";
	
	
	public function komponengaji()
    {
        return $this->belongsTo('\App\AbsensiKomponengaji', 'komponengaji_id');
    }
	
	public function groupgaji()
    {
        return $this->belongsTo('\App\AbsensiGroupgaji', 'groupgaji_id');
    }
	
}
