@extends('layouts.absensi')
@section('content')
<?php $xurl = \App\AbsensiSetup::url(); ?>
<div class="menubar">
    <div class="sidebar-toggler visible-xs">
        <i class="ion-navicon"></i>
    </div>

    <div class="page-title">
        <b>Komponen Gaji</b>
    </div>
    <a href="{{ $xurl.'komponen-penghasilan/create' }}" class="btn btn-success pull-right">
        <span>Tambah Data</span>
    </a>   
</div>

<div class="body">
	<br/>
	<table id="datatable" class="table table-condensed">
		<thead>
			<tr>
				<th tabindex="0" rowspan="1" colspan="1" style="text-align: center">#ID</th>
				<th tabindex="0" rowspan="1" colspan="1" style="text-align: center">Kode</th>
				<th tabindex="0" rowspan="1" colspan="1" style="text-align: left">Keterangan</th>
				<th tabindex="0" rowspan="1" colspan="1" style="text-align: center">Jenis</th>   
				<th tabindex="0" rowspan="1" colspan="1" style="text-align: right">Action</th>
			</tr>
		</thead>
		<tbody>
		@if (count($komponen) > 0)
			@foreach($komponen as $key => $value)
			<tr>
				<?php
					if($value->jenis==0){
						$jenis="Pendapatan";
					}
					else if ($value->jenis==1){
						$jenis="Potongan";
					}
				?>

				<td align="center">{{ $value->id }}</td>
				<td align="center">{{ $value->kode }}</td>
				<td align="left">{{ $value->keterangan }}</td>
				<td align="center">{{ $jenis }}</td>
				
			   <td align="right">

				<!--{{ Form::open(array('url' => 'komponen-penghasilan/' . $value->id, 'class' => 'pull-right')) }}
					{{Form::hidden('_method', 'DELETE') }}
					{{Form::submit('Hapus', array('class' => 'btn btn-xs btn-danger','style'=>'margin-right:20px;')) }}
				{{Form::close() }}-->
		
					 <a style="text-align:right; margin-right:5px;" class="btn btn-xs btn-info pull-right" href="{{ $xurl.'komponen-penghasilan/'. $value->id .'/edit' }}">Edit Data</a>
				</td>                       
			</tr>
			@endforeach
		@endif
		</tbody>
	</table>
</div>

<script type="text/javascript">
    $(function () {
        $("html, body").css('height', '100%');
    });
    
	$(function() {
		$('#datatable').dataTable({
			"sPaginationType": "full_numbers",
			"iDisplayLength": -1,
			"aLengthMenu": [[5,10,20, 50, 100, -1], [5,10,20, 50, 100, "All"]]
		});
	});
</script>
@stop