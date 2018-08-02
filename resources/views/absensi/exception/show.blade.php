@extends('layouts.none')
@section('content')

<div class="menubar">
    <div class="sidebar-toggler visible-xs">
        <i class="ion-navicon"></i>
    </div>

    <div class="page-title">
        <b>Pengajuan Pengecualian Scan Finger</b>
    </div>
</div>

<div class="body">
	<br/>
	<table id="datatable" class="table table-striped">
		<thead>
			<tr>
				<th style="text-align: center">No</th>
				<th style="text-align: center">#Fin</th>
				<th>Nama</th>
				<th>Tgl. Pengajuan</th>
				<th>Tgl. Pengecualian</th>
				<th>Keterangan</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php
				$br=1;
			?>
			@foreach($exception as $key => $value)
			@if(Karyawan::ifExist($value->karyawan_id) == True)
			<tr>
				<td style="text-align: center">{{ $br }}</td>
				<td style="text-align: center">{{ Karyawan::getFinger($value->karyawan_id) }}</td>
				<td>{{ Karyawan::getNama($value->karyawan_id) }}</td>
				<td>{{ $value->tglbuat }}</td>
				<td>{{ $value->tgl }}</td>
				<td>{{ $value->alasan }}</td>
				<td>
					<a class="btn btn-xs btn-primary" href="#" onclick="approve({{ $value->id }})"> <i class="fa fa-edit"></i> Approve</a> 
					<a class="btn btn-xs btn-default" href="#" onclick="batal({{ $value->id }})"> <i class="fa fa-trash-o"></i> Batal</a> 
				</td>
			</tr>
			<?php $br++; ?>
			@endif
			@endforeach
		</tbody>
	</table>
</div>

<script type="text/javascript">
	var xurl	= "<?php echo Setup::url(); ?>";
    
	$(function() {
		$('#datatable').dataTable({
			"sPaginationType": "full_numbers",
			"iDisplayLength": -1,
					"aLengthMenu": [[5,10,20, 50, 100, -1], [5,10,20, 50, 100, "All"]]
		});
	});
	
    function approve(id)
    {
        $.ajax({
            url:xurl+'exc-approve/'+id,
            type:'GET',
            success: function(info) {
                if (info==="ok")
                {
                    location.reload();
                }
            }
        });
    }
    
    function batal(id)
    {
        $.ajax({
            url:xurl+'exc-batal/'+id,
            type:'GET',
            success: function(info) {
                if (info==="ok")
                {
                    location.reload();
                }
            }
        });
    }
</script>
@stop