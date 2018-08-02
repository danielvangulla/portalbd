@extends('layouts.none')
@section('content')
<?php $xurl = Setup::url(); ?>
<div class="menubar">
    <div class="sidebar-toggler visible-xs">
        <i class="ion-navicon"></i>
    </div>

    <div class="page-title">
        <b>Pengajuan Emergency Schedule (2nd Approval)</b>
    </div>    
</div>

<div class="body">
	<br/>
	<table id="datatable" class="table table-striped">
		<thead>
			<tr>
				<th style="text-align: center; width:40px;">#ID</th>
				<th style="text-align: center; width:50px;">Tanggal</th>
				<th style="text-align: left">Nama Karyawan</th>
				<th style="text-align: center; width:150px;">Jadwal Lama</th>
				<th style="text-align: center; width:150px;">Yang Diajukan</th>
				<th>Keterangan</th>
				<th style="text-align: center; width:140px;"></th>
			</tr>
		</thead>
		<tbody>
			@foreach($note as $key => $v)
			@if(Karyawan::ifExist($v->karyawan_id) == True)
			<tr>
				<td style="text-align: center">{{ $v->id }}</td>
				<td style="text-align: center">{{ $v->tgl }}</td>
				<td style="text-align: left">{{ Karyawan::getNama($v->karyawan_id) }}</td>
				<td style="text-align: center">{{ date('H:i', strtotime($v->masuk_old)) }} - {{ date('H:i', strtotime($v->pulang_old)) }}</td>
				<td style="text-align: center">{{ date('H:i', strtotime($v->masuk_new)) }} - {{ date('H:i', strtotime($v->pulang_new)) }}</td>
				<td>{{ $v->ket }}</td>
				<td>
					<a class="btn btn-xs btn-primary" href="#" onclick="approve({{ $v->id }})"> <i class="fa fa-edit"></i> Aprv</a> 
					<a class="btn btn-xs btn-default" href="#" onclick="batal({{ $v->id }})"> <i class="fa fa-trash-o"></i> Batal</a> 
				</td>
			</tr>
			@endif
			@endforeach
		</tbody>
	</table>
</div>

<script type="text/javascript">
	var xurl	= "<?php echo $xurl; ?>";
	
	$(function() {
		$('#datatable').dataTable({
			"sPaginationType": "full_numbers",
			"iDisplayLength": -1,
					"aLengthMenu": [[5,10,20, 50, 100, -1], [5,10,20, 50, 100, "All"]]
		});
	});
	
    function approve(id)
    {
		// var app = confirm("Setujui Pengajuan ID : "+id+" ?");
		// if (app){
			$.ajax({
				url:xurl+'note-approve2/'+id,
				type:'GET',
				success: function(info) {
					if (info==="ok")
					{
						location.reload();
					}
				}
			});
		// }
    }
    
    function batal(id)
    {
		var app = confirm("Membatalkan Pengajuan ID : "+id+" ?");
		if (app){
			$.ajax({
				url:xurl+'note-batal2/'+id,
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