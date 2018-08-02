@extends('layouts.absensi')
@section('content')
<?php $xurl = \App\AbsensiSetup::url(); ?>

<div class="menubar">
    <div class="sidebar-toggler visible-xs">
        <i class="ion-navicon"></i>
    </div>

    <div class="page-title">
        <b>Group Gaji</b>
    </div>
    <a href="{{ $xurl }}group-penghasilan/create" class="btn btn-success pull-right">
        <span>Tambah Data</span>
    </a>
</div>

<div class="body">
	<br/>
	<table id="datatable" class="table table-condensed">
		<thead>
			<tr>
				<th tabindex="0" rowspan="1" colspan="1" style="text-align: center">#ID</th>
				<th tabindex="0" rowspan="1" colspan="1" style="text-align: left">Keterangan</th>
				<th tabindex="0" rowspan="1" colspan="1" style="text-align: right">Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($group as $key => $value)
			<tr>
				<td align="center">{{ $value->id }}</td>
				<td align="left">{{ $value->keterangan }}</td>
				<td align="right">
				{{ Form::open(array('url' => 'group-penghasilan/' . $value->id, 'class' => 'pull-right')) }}
					{{Form::hidden('_method', 'DELETE') }}
					{{Form::submit('Hapus', array('class' => 'btn btn-xs btn-danger','style'=>'margin-right:20px;')) }}
				{{Form::close() }}
					 <a style="text-align:right; margin-right:5px;" class="btn btn-xs btn-info pull-right" href="{{ $xurl.'group-penghasilan/'. $value->id .'/edit' }}">Rename</a>
					 <a style="text-align:right; margin-right:5px;" class="btn btn-xs btn-warning pull-right" href="{{ $xurl.'group-penghasilan/'. $value->id }}">Atur Komponen</a>
				</td>
			</tr>
			@endforeach
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
			"iDisplayLength": 10,
			"aLengthMenu": [[5,10,20, 50, 100, -1], [5,10,20, 50, 100, "All"]]
		});
	});
</script>
@stop