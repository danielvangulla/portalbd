<div id="sidebar-default" class="main-sidebar">
    <div class="current-user">
		<!--form action="/image/save" method="post" style="height:20px;">
			<input name="image" type="file" style="height:20px;width:60px;float:left;font-size:10px;"/>
			<input class="btn btn-primary" type="submit" value="simpan"  style="height:20px;color:black;font-size:10px;"/>
		</form-->
	
        <a href="index.html" class="name">
            <img class="avatar" src="{{ asset('/munter/images/icon/iconBigData_glow.png') }}"/>
			
            <span>
			@if (Auth::user()->level==10)
                {{ Auth::user()->nama_karyawan }}
			@else
                {{ Auth::user()->username }}				
			@endif
                <i class="fa fa-chevron-down"></i>
            </span>
			<span id="user_id" class="hidden">
				{{ Auth::user()->id }}
			</span>
        </a>
		<?php 
			// if (Auth::user()->level <=0){
				// $cuti	= Cuti::where('stat2', '=', 0)->get()->count();
				// $cuti2	= Cuti::where('stat', '=', 0)->where('stat2', '=', 1)->get()->count();
				// $sakit	= Sakit::where('stat2', '=', 0)->get()->count();
				// $sakit2	= Sakit::where('stat', '=', 0)->where('stat2', '=', 1)->get()->count();
				// $spl	= Spl::where('stat2', '=', 0)->get()->count();
				// $spl2	= Spl::where('stat', '=', 0)->where('stat2', '=', 1)->get()->count();
				// $splk	= Splk::where('stat2', '=', 0)->get()->count();
				// $splk2	= Splk::where('stat', '=', 0)->where('stat2', '=', 1)->get()->count();
				// $idt	= Ijintelat::where('stat2', '=', 0)->get()->count();
				// $idt2	= Ijintelat::where('stat', '=', 0)->where('stat2', '=', 1)->get()->count();
				// $ipa	= Ijinpulang::where('stat2', '=', 0)->get()->count();
				// $ipa2	= Ijinpulang::where('stat', '=', 0)->where('stat2', '=', 1)->get()->count();
				// $izin	= Izin::where('stat2', '=', 0)->get()->count();
				// $izin2	= Izin::where('stat', '=', 0)->where('stat2', '=', 1)->get()->count();
				// $note	= Note::where('stat2', '=', 0)->get()->count();
				// $note2	= Note::where('st', '=', 0)->where('stat2', '=', 1)->get()->count();
				// $dns	= Dinas::where('stat2', '=', 0)->get()->count();
				// $dns2	= Dinas::where('stat', '=', 0)->where('stat2', '=', 1)->get()->count();
				// $exc	= Exceptions::where('stat2', '=', 0)->get()->count();
				// $exc2	= Exceptions::where('stat', '=', 0)->where('stat2', '=', 1)->get()->count();
			// } else {
				// $dept	= Auth::user()->departemen;
				// $cuti	= Cuti::where('stat2', '=', 0)->where('departemen_id', '=', $dept)->get()->count();
				// $cuti2	= Cuti::where('stat', '=', 0)->where('stat2', '=', 1)->where('departemen_id', '=', $dept)->get()->count();
				// $sakit	= Sakit::where('stat2', '=', 0)->where('departemen_id', '=', $dept)->get()->count();
				// $sakit2	= Sakit::where('stat', '=', 0)->where('stat2', '=', 1)->where('departemen_id', '=', $dept)->get()->count();
				// $spl	= Spl::where('stat2', '=', 0)->where('departemen_id', '=', $dept)->get()->count();
				// $spl2	= Spl::where('stat', '=', 0)->where('stat2', '=', 1)->where('departemen_id', '=', $dept)->get()->count();
				// $splk	= Splk::where('stat2', '=', 0)->where('departemen_id', '=', $dept)->get()->count();
				// $splk2	= Splk::where('stat', '=', 0)->where('stat2', '=', 1)->where('departemen_id', '=', $dept)->get()->count();
				// $idt	= Ijintelat::where('stat2', '=', 0)->where('departemen_id', '=', $dept)->get()->count();
				// $idt2	= Ijintelat::where('stat', '=', 0)->where('stat2', '=', 1)->where('departemen_id', '=', $dept)->get()->count();
				// $ipa	= Ijinpulang::where('stat2', '=', 0)->where('departemen_id', '=', $dept)->get()->count();
				// $ipa2	= Ijinpulang::where('stat', '=', 0)->where('stat2', '=', 1)->where('departemen_id', '=', $dept)->get()->count();
				// $izin	= Izin::where('stat2', '=', 0)->where('departemen_id', '=', $dept)->get()->count();
				// $izin2	= Izin::where('stat', '=', 0)->where('stat2', '=', 1)->where('departemen_id', '=', $dept)->get()->count();
				// $note	= Note::where('stat2', '=', 0)->where('departemen_id', '=', $dept)->get()->count();
				// $note2	= Note::where('st', '=', 0)->where('stat2', '=', 1)->where('departemen_id', '=', $dept)->get()->count();
				// $dns	= Dinas::where('stat2', '=', 0)->where('departemen_id', '=', $dept)->get()->count();
				// $dns2	= Dinas::where('stat', '=', 0)->where('stat2', '=', 1)->where('departemen_id', '=', $dept)->get()->count();
				// $exc	= Exceptions::where('stat2', '=', 0)->where('departemen_id', '=', $dept)->get()->count();
				// $exc2	= Exceptions::where('stat', '=', 0)->where('stat2', '=', 1)->where('departemen_id', '=', $dept)->get()->count();
			// }
			
			// $kasbon	= KasbonTrans::where('posting', '=', 0)->get()->count();
		?>
        <ul class="menu">
           
            <li>
                <a href="/absensi/user">Pengaturan User Login</a>
            </li>
			<li>
                <a href="#">Notifications</a>
            </li>
            <li>
                <a href="#">Help / Support</a>
            </li>
            <li>
                <a href="/absensi/logout">Sign out</a>
            </li>
        </ul>
    </div>
	
	
    <div class="menu-section">
        <ul>
            <li>
                <a href="/absensi/" class="active">
                    <i class="ion-android-earth"></i> 
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/absensi/pengaturan-jabatan">
                    <i class="ion-settings"></i>
                    <span>Pengaturan Data</span>
                </a>
            </li>
            <li>
                <a href="#" data-toggle="sidebar">
                    <i class="ion-person-stalker"></i><span> Karyawan</span>
                    <i class="fa fa-chevron-down"></i>
                </a>
                <ul class="submenu">
						<li><a href="/absensi/karyawan/create">Buat Baru</a></li>
                    <li><a href="/absensi/karyawan">Daftar Karyawan</a></li>
                </ul>
            </li>
			<li>
                <a href="#" data-toggle="sidebar">
                    <i class="ion-filing"></i><span> Group Penghasilan</span>
                    <i class="fa fa-chevron-down"></i>
                </a>
                <ul class="submenu">
                    <li><a href="/absensi/komponen-penghasilan">Komponen Penghasilan</a></li>
                    <li><a href="/absensi/group-penghasilan">Group Gaji</a></li>
                </ul>
            </li>
            <li>
                <a href="/absensi/jadwal-isi-tanggal">
                    <i class="fa fa-bookmark-o"></i> 
                    <span>Informasi Jadwal</span>
                </a>
            </li>
            <li>
                <a href="/absensi/libur">
                    <i class="ion-calendar"></i>
                    <span>Input Tanggal Merah</span>
                </a>
            </li>
            <li>
                <a href="#" data-toggle="sidebar">
                    <i class="ion-ios7-compose-outline"></i><span> 1st Approval</span>
                    <i class="fa fa-chevron-down"></i>
                </a>
                <ul class="submenu">
                    <li><a href="/absensi/cuti-daftar">({{$cuti}}) Pengajuan Cuti</a></li>
                    <li><a href="/absensi/sakit-daftar">({{$sakit}}) Keterangan Sakit</a></li>
                    <!--li><a href="/absensi/izin-belum-approve">({{$izin}}) Izin Tidak Kerja</a></li-->
                    <li><a href="/absensi/spl-belum-approve">({{$spl}}) Surat Lembur</a></li>
                    <li><a href="/absensi/splk-belum-approve">({{$splk}}) Surat Lembur Khusus</a></li>
                    <li><a href="/absensi/ijintelat-belum-approve">({{$idt}}) Ijin Datang Telat</a></li>
                    <li><a href="/absensi/ijinpulang-belum-approve">({{$ipa}}) Ijin Pulang Awal</a></li>
                    <li><a href="/absensi/dinas-belum-approve">({{$dns}}) Dinas Luar</a></li>
                    <li><a href="/absensi/exc-belum-approve">({{$exc}}) Pengecualian Finger</a></li>
                    <!--li><a href="/absensi/note-belum-approve">({{$note}}) Emergency Schedule</a></li-->
                    <!--li><a href="/absensi/kasbon-approval">({{$kasbon}}) Kasbon Karyawan</a></li-->
                </ul>
            </li>
            <li>
                <a href="#" data-toggle="sidebar">
                    <i class="ion-ios7-compose-outline"></i><span> 2nd Approval</span>
                    <i class="fa fa-chevron-down"></i>
                </a>
                <ul class="submenu">
                    <li><a href="/absensi/cuti-daftar2">({{$cuti2}}) Pengajuan Cuti</a></li>
                    <li><a href="/absensi/sakit-daftar2">({{$sakit2}}) Keterangan Sakit</a></li>
                    <li><a href="/absensi/spl-belum-approve2">({{$spl2}}) Surat Lembur</a></li>
                    <li><a href="/absensi/splk-belum-approve2">({{$splk2}}) Surat Lembur Khusus</a></li>
                    <li><a href="/absensi/ijintelat-belum-approve2">({{$idt2}}) Ijin Datang Telat</a></li>
                    <li><a href="/absensi/ijinpulang-belum-approve2">({{$ipa2}}) Ijin Pulang Awal</a></li>
                    <li><a href="/absensi/dinas-belum-approve2">({{$dns2}}) Dinas Luar</a></li>
                    <li><a href="/absensi/exc-belum-approve2">({{$exc2}}) Pengecualian Finger</a></li>
                </ul>
            </li>
            <li>
                <a href="#" data-toggle="sidebar">
                    <i class="ion-ios7-compose-outline"></i> <span>Rekap Pengajuan</span>
                    <i class="fa fa-chevron-down"></i>
                </a>
                <ul class="submenu">
					<li><a href="/absensi/Laporan-Cuti">Pengajuan Cuti</a></li>
					<li><a href="/absensi/Laporan-Sakit">Pengajuan Sakit</a></li>
					<li><a href="/absensi/Laporan-SPL">Pengajuan Lembur</a></li>
					<li><a href="/absensi/Laporan-SPLK">Pengajuan Lembur Khusus</a></li>
					<li><a href="/absensi/Laporan-IjinTelat">Ijin Datang Telat</a></li>
					<li><a href="/absensi/Laporan-IjinPulang">Ijin Pulang Awal</a></li>
					<li><a href="/absensi/Laporan-Dinas">Dinas Luar</a></li>
					<li><a href="/absensi/Laporan-Exc">Pengecualian Finger</a></li>
					<!--li><a href="/absensi/Laporan-Note">Emergency Schedule</a></li-->
                </ul>
            </li>
			<li>
                <a href="#" data-toggle="sidebar" class="active">
                    <i class="ion-upload"></i> <span>Proses Absensi</span>
                    <i class="fa fa-chevron-down"></i>
                </a>
                <ul class="submenu">
                    <li><a href="/absensi/upload-absensi">Upload Absensi</a></li>
                    <li><a href="/absensi/recount-absensi">Recount Absensi</a></li>
                </ul>
            </li>
            <li>
                <a href="/absensi/generate-gaji-show" class="active">
                    <i class="ion-gear-a"></i> 
                    <span>Hitung Gaji</span>
                </a>
            </li>
            <li>
                <a href="#" data-toggle="sidebar">
                    <i class="ion-printer"></i> <span>Laporan</span>
                    <i class="fa fa-chevron-down"></i>
                </a>
                <ul class="submenu">
                    <li><a href="/absensi/laporan-kehadiran-filter">Absensi</a></li>
					
						<li><a href="/absensi/laporan-gaji-filter">Daftar Gaji</a></li>
						<!--li><a href="/absensi/Laporan-SlipGaji">Slip Gaji</a></li-->
                </ul>
            </li>
        </ul>
    </div>
	
	
	
	
    <div class="bottom-menu hidden-sm hidden">
        <ul>
            <li><a href="#"><i class="ion-help"></i></a></li>
            <li>
                <a href="#">
                    <i class="ion-archive"></i>
                    <span class="flag"></span>
                </a>
                <ul class="menu">
                    <!--li><a href="/bellaGroup/public/listApprovePending">5 Transaksi Menunggu Persetujuan</a></li>
                    <li><a href="/bellaGroup/public/listPenyelesaianPending">12 Transaksi Menunggu Penyelesaian</a></li>
                    <li><a href="#">3 features added</a></li-->
                </ul>
            </li>
            <li><a href="#"><i class="ion-log-out"></i></a></li>
        </ul>
    </div>
</div>