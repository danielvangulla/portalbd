<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbsensiKaryawan extends Model
{
    protected $table = "absensi_karyawans";
	
	public static function outlet()
	{
		return [1=>"Big Data"];
	}
	
    public function departemen()
    {
        return $this->belongsTo('\App\AbsensiDepartemen', 'departemen_id');
    }
    
    public function departemensub() {
        return $this->belongsTo('\App\AbsensiDepartemensub', 'departemensub_id');
    }
    
    public function jabatan() {
        return $this->belongsTo('\App\AbsensiJabatan', 'jabatan_id');
    }
    
    public function groupgaji() {
        return $this->belongsTo('\App\AbsensiGroupgaji', 'groupgaji_id');
    }
    
}
