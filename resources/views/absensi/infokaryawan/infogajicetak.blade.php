@extends('layouts.nosidemenu')
@section('content')

<div class="menubar">
    <div class="page-title">
        <h4>Slip Gaji</h4>
		Karyawan : <b>{{ $nama }}</b><br>
		Periode Gaji : {{ $period }}
    </div>
</div>

<div class="body">
	<br/>
	<table id="datatable" class="table table-striped">
		<thead>
			<tr>
				<th style="text-align: center; width: 100px;">Kode</th>
				<th style="text-align: left; width: 250px;">Keterangan</th>
				<th style="text-align: center; width: 100px;">Jenis</th>
				<th style="text-align: center; width: 100px;">Qty</th>
				<th style="text-align: right; width: 100px;">Jumlah Rp.</th>
			</tr>
		</thead>
		<tbody>
			<?php $total = 0; ?>
			@foreach($gaji as $key => $v)
			<?php
				if ($v->jenis == 0){$jenis = "Diterima";}else{$jenis = "Potongan";}
				if ($v->total == 0){$qty = 0;}else{$qty = $v->qty;}
				$total = $total + $v->total;
			?>
			<tr>
				<td style="text-align: center">{{ $v->kode }}</td>
				<td style="text-align: left">{{ $v->keterangan }}</td>
				<td style="text-align: center">{{ $jenis }}</td>
				<td style="text-align: center">{{ $qty }}</td>
				<td style="text-align: right">{{ number_format($v->total) }}</td>
			</tr>
			@endforeach
			<?php if($total<0){$total=0;} ?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="5" style="text-align: right"><h4><b>Total Rp. {{ number_format($total) }}</b></h4></td>
			</tr>
		</tfoot>
	</table>
</div>
@stop