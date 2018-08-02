@extends('layouts.none')
@section('content')

<div class="menubar">
    <div class="sidebar-toggler visible-xs">
        <i class="ion-navicon"></i>
    </div>

    <div class="page-title">
        <b>Jadwal Karyawan</b>
    </div>
</div>

<div class="body">
    <br/>
    <div class="pull-right">
        <h4 class="text-info">Periode : {{ $periode }}</h4>
    </div>
    <div class="row">
        <!--div class="col-lg-12 col-md-12" style="overflow: auto; overflow-y:hidden;"-->
            <table class="table table-bordered" id="datatable" style="width: auto;">
                <thead>
                    <tr>
                        <th style="text-align: center">#Fin</th>
                        <th style="text-align: center">Outlet</th>
                        <th style="width: 250px; text-align: center;">Nama</th>
                        @foreach ($jadwal[0] as $k)
                        @if(is_array($k))
                        <th style="text-align: center">{{ substr($k['tgl'],5,5) }}</th>
                        @endif
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jadwal as $dt)
					<?php
						$outlet = Karyawan::outletCase($dt['outlet']);
					?>
                    <tr>
                        <td style="text-align: center">{{ $dt['idmesin'] }}</td>
                        <td style="text-align: center">{{ $outlet }}</td>
					@if (Auth::user()->level<=3)
                        <td><a href="{{ URL::to('jadwal/'.$dt['karyawan_id'].'/info') }}"> {{ $dt['nama'] }} </a></td>
					@else
                        <td><a href="#"> {{ $dt['nama'] }} </a></td>
					@endif
                        @foreach ($dt as $kl)
                        @if(is_array($kl))
                        <th style="text-align:center;">{{ $kl['title'] }}</th>   
                        @endif 
                        @endforeach
                    </tr>
                    @endforeach
                </tbody>
            </table><br><br>
        <!--/div-->
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