<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbsensiSetup extends Model
{
	protected $table = "absensi_setups";
	
    public static function url()
	{
		return "/absensi/";
	}
}
