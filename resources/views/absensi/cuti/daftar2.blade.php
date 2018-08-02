@extends('layouts.none')
@section('content')
<?php $xurl = Setup::url(); ?>
<div class="menubar">
    <div class="sidebar-toggler visible-xs">
        <i class="ion-navicon"></i>
    </div>

    <div class="page-title">
        <b>Daftar Pengajuan Cuti Karyawan (2nd Approval)</b>
    </div>    
</div>

<div class="body">
	<br>
	<table id="datatable" class="table table-striped">
		<thead>
			<tr>
				<th style="text-align: center">#ID</th>
				<th style="text-align: center">#Finger</th>
				<!--th style="text-align: center">#Outlet</th-->
				<th>Nama</th>
				<th style="text-align: center">Create</th>
				<th style="text-align: center">Mulai</th>
				<th style="text-align: center">Selesai</th>
				<th style="text-align: center">TotHari</th>
				<th>Keterangan</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($cuti as $key => $value)
			@if(Karyawan::ifExist($value->karyawan_id) == True)
			<tr>
				<td style="text-align: center">{{ $value->id }}</td>
				<td style="text-align: center">{{ Karyawan::getFinger($value->karyawan_id) }}</td>
				<!--td style="text-align: center">{{ Karyawan::getOutlet($value->id) }}</td-->
				<td>{{ Karyawan::getNama($value->karyawan_id) }}</td>
				<td style="text-align: center">{{ $value->tglbuat }}</td>
				<td style="text-align: center">{{ $value->mulai }}</td>
				<td style="text-align: center">{{ $value->selesai }}</td>
				<td style="text-align: center">{{ $value->totalhari }}</td>
				<td>{{ $value->keterangan }}</td>
				<td>                           
					<a class="btn btn-xs btn-primary" href="#" onclick="approve({{ $value->id }})"> <i class="fa fa-edit"></i> Approve</a> 
					<a class="btn btn-xs btn-default" href="#" onclick="batal({{ $value->id }})"> <i class="fa fa-trash-o"></i> Batal</a> 
				</td>
			</tr>
			@endif
			@endforeach                
		</tbody>
	</table>
</div>

<script type="text/javascript">
	var xurl	= "<?php echo $xurl; ?>";
	
    $(function () {
        //$("html, body").css('height', '100%');                
    });

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
				url:xurl+'cuti-approve2/'+id,
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
				url:xurl+'cuti-batal2/'+id,
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