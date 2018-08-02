@extends('layouts.absensi')
@section('content')

<div class="menubar">
    <div class="sidebar-toggler visible-xs">
        <i class="ion-navicon"></i>
    </div>

    <div class="page-title">
        <b>Laporan Absensi</b>
    </div>
</div>
<div class="body">
    <br/>
    <div class="pull-right">
        <h4 class="text-info">Periode : {{ $periode }}</h4>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12" style="height: auto;">
            <table class="table table-bordered" style="width: 2000px;" id="datatable">
                <thead>
                    <tr>
                        <th style="text-align: center; width: 20px;" rowspan="2">No</th>
                        <th style="text-align: center; width: 125px;" rowspan="2">Outlet</th>
                        <th style="width: 200px;" rowspan="2">Nama</th>
                        @foreach ($absensi[0]['detail'] as $v)
                        <th colspan="3" style="text-align: center;"> {{ $v['tgl'] }} </th>
                        @endforeach
                    </tr>
                    <tr>
                        @foreach ($absensi[0]['detail'] as $v)
                        <th style="width: 50px;"> Jadwal </th>
                        <th style="width: 50px;"> Absen </th>
                        <th style="width: 50px;"> Status </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($absensi as $n)
                    <tr>
                        <td style="text-align: center;">{{ $n['idmesin'] }}</td>
                        <td style="text-align: center;">{{ $n['outlet'] }}</td>
                        <td>{{ $n['nama'] }}</td>
                        @foreach ($n['detail'] as $x)
                        <td style="text-align: center;">{{ $x['detail']['jadwalin']."<br><br><br>".$x['detail']['jadwalout'] }}</td>
                        <td style="text-align: center;">
							{{ $x['detail']['absenin']."<br>
							".$x['detail']['absenoutist']."<br>
							".$x['detail']['abseninist']."<br>
							".$x['detail']['absenout'] }}
						</td>
                        <td style="text-align: center;">
							@if ($x['detail']['status'] == "L")
								OFF
							@else
								{{ $x['detail']['status'] }}
							@endif
							<br><span class="text-danger"><b>{{ $x['detail']['late'] }}</b></span>
							<br><span class="text-danger"><b>{{ $x['detail']['rest'] }}</b></span>
							<br><span class="text-danger"><b>{{ $x['detail']['cek'] }}</b></span>
						</td>
                        @endforeach
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script type="text/javascript">

    $(function() {
		$('#datatable').dataTable({
			"sPaginationType": "full_numbers",
			"iDisplayLength": 5,
			"aLengthMenu": [[5,10,20, 50, 100, -1], [5,10,20, 50, 100, "All"]]
		});
	});
    
</script>


@stop