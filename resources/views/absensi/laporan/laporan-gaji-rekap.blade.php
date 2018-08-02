@extends('layouts.none')
@section('content')

<div class="menubar">
    <div class="sidebar-toggler visible-xs">
        <i class="ion-navicon"></i>
    </div>

    <div class="page-title">
        <b>Laporan Rekapan Gaji</b>
    </div>    
</div>

<div class="body">
    <br/>
    <div class="pull-right">
        <h4 class="text-info">Periode : {{ $periode }}</h4>
    </div>
    <div class="row">
        <!--div class="col-lg-12 col-md-12" style="overflow: auto; overflow-y:auto; height: 550px;"-->
            <table class="table table-bordered" style="width:auto;" id="datatable">
                <thead>
                    <tr>
                        <th style="text-align: center; width: 20px;">Outlet</th>
                        <th style="text-align: center; width: 20px;">#ID Fin</th>
                        <th style="text-align: center; width: 100px;">Tgl Masuk</th>
                        <th style="text-align: center; width: 200px;">Nama</th>
                        <th style="text-align: center;">Jabatan</th>
                        @foreach ($rekapgaji[0]['komponengaji'] as $v)
                        <th style="text-align: center;"> {{ $v['keterangan'] }} </th>
                        @endforeach
                        <th style="text-align: right; width: 150px;"><b>Total Bayar</b></th>
                        <th style="text-align: center; width: 100px;">Total Jadwal</th>
                        <th style="text-align: center; width: 100px;">Hadir</th>
                    </tr>
                </thead>
                <tbody>
					<?php $gtotal=0; ?>
                    @foreach ($rekapgaji as $n)
					<?php
						$outlet = $n['outlet'];
					?>
                    <tr>
                        <td style="text-align: center; width: 20px;">{{ Karyawan::outletCase($outlet) }}</td>
                        <td style="text-align: center; width: 20px;">{{ $n['idmesin'] }}</td>
                        <td style="text-align: center; width: 100px;">{{ $n['masuk'] }}</td>
                        <td>{{ $n['nama'] }}</td>
                        <td style="text-align: center;">{{ $n['jabatan'] }}</td>
                        <?php $totalbayar=0; $z=1; ?>
                        @foreach ($n['komponengaji'] as $x)
                        <td style="text-align: right;">
							{{ number_format($x['total']) }}<br>
							@if (($z == 2) || ($z >= 4))
								@if ($x['total'] != 0)
									({{ $x['qty'] }}x)
								@endif
							@endif
						</td>
                        <?php $totalbayar=$totalbayar + $x['total']; $z=$z+1; ?>
                        @endforeach
                        <?php
							if ($totalbayar<0){
								$totalbayar=0;
							}
							$gtotal = $gtotal + $totalbayar;
						?>
						<td style="text-align: right;"><b>{{ number_format($totalbayar) }}</b></td>
						<td style="text-align: center;">{{ $n['totaljadwal'] }}</td>
						<td style="text-align: center;">{{ $n['totalhadir'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
				<tfoot>
					<tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        @foreach ($rekapgaji[0]['komponengaji'] as $v)
                        <th></th>
                        @endforeach
                        <th colspan="3" style="text-align: center; font-size:16px;"><b>Total Rp. {{ number_format($gtotal) }}</b></th>
                    </tr>
				</tfoot>
            </table>
        <!--/div-->
    </div>
</div>

<script type="text/javascript">
    
    $(function() {
		$('#datatable').dataTable({
			"sPaginationType": "full_numbers",
			"iDisplayLength": 10,
			"aLengthMenu": [[5,10,20, 50, 100, -1], [5,10,20, 50, 100, "All"]]
		});
	});
    
</script>


@stop