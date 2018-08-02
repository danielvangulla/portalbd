@extends('layouts.none')
@section('content')

<div class="menubar">
    <div class="sidebar-toggler visible-xs">
        <i class="ion-navicon"></i>
    </div>

    <div class="page-title">
        <b>Daftar Surat Keterangan Sakit Karyawan</b>
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
				<th>Create</th>                        
				<th>Mulai</th>   
				<th>Selesai</th>
				<th>TotHari</th>
				<th>Dokter</th>
				<th>Keterangan</th>    
				<th>No.Surat</th>    
			</tr>
		</thead>
		<tbody>
			<?php
				$br=1;
			?>
			@foreach($sakit as $key => $value)
			<tr>
				<td style="text-align: center">{{ $br }}</td>
				<td style="text-align: center">{{ $value->karyawan->idmesin }}</td>
				<td>{{ $value->karyawan->nama }}</td>                        
				<td>{{ $value->tglbuat }}</td>
				<td>{{ $value->mulai }}</td>
				<td>{{ $value->selesai }}</td>
				<td>{{ $value->totalhari }}</td>
				<td>{{ $value->dokter }}</td>
				<td>{{ $value->keterangan }}</td>    
				<td>{{ $value->nosurat }}</td>
			</tr>
			<?php $br++; ?>
			@endforeach                
		</tbody>
	</table>
</div>

<script type="text/javascript">
	
    $(function () {
        //$("html, body").css('height', '100%');                
    });
            
    
</script>


@stop