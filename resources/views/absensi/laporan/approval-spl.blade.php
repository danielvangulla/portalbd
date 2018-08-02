@extends('layouts.none')
@section('content')
<?php $xurl = Setup::url(); ?>
<div id="app-message" style="margin-top:-60px">
    <div class="scroll-wrapper">
        <div class="menubar relative">
            <div class="page-title">
                <strong>Surat Perintah Lembur</strong>
            </div>
			<div class="page-title pull-right">
				<strong>
				<?php
					$array_hari = array(1=>'Senin','Selasa','Rabu','Kamis','Jumat', 'Sabtu','Minggu');	 
					$hari = $array_hari[date('N')];			 
					$tanggal = date ('j');			 
					$array_bulan = array(1=>'Januari','Februari','Maret', 'April', 'Mei', 'Juni','Juli','Agustus','September','Oktober', 'November','Desember');
					$bulan = $array_bulan[date('n')];
					$tahun = date('Y');
					echo $hari .", ". $tanggal ." ". $bulan ." ". $tahun;
				?>
				</strong>
			</div>
        </div>		
		<div class="profile-content">
			<div class="tabs">
				<ul class="nav nav-tabs" role="tablist">
				  <li class="active"><a href="#tab1" role="tab" data-toggle="tab">SPL Belum Approval</a></li>
				  <li><a href="#tab2" role="tab" data-toggle="tab">SPL Approved</a></li>
				  <li><a href="#tab3" role="tab" data-toggle="tab">SPL Rejected</a></li>
				</ul>
			</div> 
		</div>
        <div class="body">
			<div id="myTabContent" class="tab-content">
				<div class="tab-pane fade in active" id="tab1"><br/>
					<table id="datatab1" class="table table-condensed">
						<thead>
							<tr>
								<th tabindex="0" rowspan="1" colspan="1" style="text-align: center">ID</th>
								<th tabindex="0" rowspan="1" colspan="1" style="text-align: center">Tgl Pengajuan</th>
								<th tabindex="0" rowspan="1" colspan="1" style="text-align: left">Nama Karyawan</th>
								<th tabindex="0" rowspan="1" colspan="1" style="text-align: center">Tgl Lembur</th>
								<th tabindex="0" rowspan="1" colspan="1" style="text-align: center">Jumlah Jam</th>
								<th tabindex="0" rowspan="1" colspan="1" style="text-align: left;">Alasan</th>
							</tr>
						</thead>
						<tbody id="data2">
							@foreach($blmApp as $key => $value)
							@if(count($value->karyawan))
							<tr>
								<td align="center">{{ $value->id }}</td>
								<td align="center">{{ $value->tglbuat }}</td>
								<td align="left">{{ $value->karyawan->nama }}</td>
								<td align="center">{{ $value->tgllembur }}</td>
								<td align="center">{{ $value->totaljam }} Jam</td>
								<td >{{ $value->keterangan }}</td>
								<td>
									<a class="btn btn-xs btn-default" href="#" onclick="batal({{ $value->id }})"> <i class="fa fa-trash-o"></i> Batal</a> 
								</td>
							</tr>
							@endif
							@endforeach                
						</tbody>
					</table>
				</div>
				<div class="tab-pane fade in" id="tab2"><br/>
					<table id="datatab2" class="table table-condensed">
						<thead>
							<tr>
								<th tabindex="0" rowspan="1" colspan="1" style="text-align: center">ID</th>
								<th tabindex="0" rowspan="1" colspan="1" style="text-align: center">Tgl Pengajuan</th>
								<th tabindex="0" rowspan="1" colspan="1" style="text-align: left">Nama Karyawan</th>
								<th tabindex="0" rowspan="1" colspan="1" style="text-align: center">Tgl Lembur</th>
								<th tabindex="0" rowspan="1" colspan="1" style="text-align: center">Jumlah Jam</th>
								<th tabindex="0" rowspan="1" colspan="1" style="text-align: left;">Alasan</th>
							</tr>
						</thead>
						<tbody id="data2">
							@foreach($setuju as $key => $value)
							@if(count($value->karyawan))
							<tr>
								<td align="center">{{ $value->id }}</td>
								<td align="center">{{ $value->tglbuat }}</td>
								<td align="left">{{ $value->karyawan->nama }}</td>
								<td align="center">{{ $value->tgllembur }}</td>
								<td align="center">{{ $value->totaljam }} Jam</td>
								<td >{{ $value->keterangan }}</td>
								@if (Auth::user()->level <= 0)
								<td>
									<a class="btn btn-xs btn-default" href="#" onclick="batal({{ $value->id }})"> <i class="fa fa-trash-o"></i> Batal</a> 
								</td>
								@endif
							</tr>
							@endif
							@endforeach                
						</tbody>
					</table>
				</div>
				<div class="tab-pane fade in" id="tab3"><br/>
					<table id="datatab3" class="table table-condensed">
						<thead>
							<tr>
								<th tabindex="0" rowspan="1" colspan="1" style="text-align: center">ID</th>
								<th tabindex="0" rowspan="1" colspan="1" style="text-align: center">Tgl Pengajuan</th>
								<th tabindex="0" rowspan="1" colspan="1" style="text-align: left">Nama Karyawan</th>
								<th tabindex="0" rowspan="1" colspan="1" style="text-align: center">Tgl Lembur</th>
								<th tabindex="0" rowspan="1" colspan="1" style="text-align: center">Jumlah Jam</th>
								<th tabindex="0" rowspan="1" colspan="1" style="text-align: left;">Alasan</th>
							</tr>
						</thead>
						<tbody id="data2">
							@foreach($tolak as $key => $value)
							@if(count($value->karyawan))
							<tr>
								<td align="center">{{ $value->id }}</td>
								<td align="center">{{ $value->tglbuat }}</td>
								<td align="left">{{ $value->karyawan->nama }}</td>
								<td align="center">{{ $value->tgllembur }}</td>
								<td align="center">{{ $value->totaljam }} Jam</td>
								<td >{{ $value->keterangan }}</td>
							</tr>
							@endif
							@endforeach                
						</tbody>
					</table>
				</div>
			</div>			
        </div>
    </div>
</div>
<script type="text/javascript">
	var xurl	= "<?php echo $xurl; ?>";
	
    $(function () {
        $("html, body").css('height', '100%');
    });
    
	$(function() {
		$('#datatab1, #datatab2, #datatab3').dataTable({
			"sPaginationType": "full_numbers",
			"iDisplayLength": 10,
					"aLengthMenu": [[5,10,20, 50, 100, -1], [5,10,20, 50, 100, "All"]]
		});
	});
    
    function batal(id)
    {
		var app = confirm("Membatalkan Pengajuan ID : "+id+" ?");
		if (app){
			$.ajax({
				url:xurl+'spl-batal/'+id,
				type:'GET',
				success: function(info) {
					if (info==="ok")
					{
						location.reload();
					}
				}
			});
		}
    }
</script>
@stop