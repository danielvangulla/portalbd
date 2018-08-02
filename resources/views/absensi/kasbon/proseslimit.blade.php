@extends('layouts.schedule')
@section('content')
<?php $xurl = Setup::url(); ?>
<div class="menubar">
    <div class="sidebar-toggler visible-xs">
        <i class="ion-navicon"></i>
    </div>
    <div class="page-title">
        BitPayroll
    </div>	
</div>

<div class="content-wrapper">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>Proses Pengeluaran/Pengembalian Kasbon </h4>
            <div class="row">
                <div class="col col-md-10">
                    <table>
                        <tr>
                            <td style="width: 100px;"><strong>Karyawan</strong></td>
                            <td><strong>: {{ $karyawan->nama }}</strong></td>
                        </tr>
                        <tr>
                            <td style="width: 100px;">Departemen</td>
                            <td>: {{ $karyawan->departemen->keterangan }}</td>
                        </tr>
						<tr>
                            <td style="width: 100px;">Limit Kasbon</td>
                            <td>: Rp. {{ number_format($limit) }},-</td>
                        </tr>
						<tr>
                            <td style="width: 100px;">Total Kasbon</td>
                            <td>: Rp. {{ number_format($total) }},-</td>
                        </tr>
						<tr>
                            <td style="width: 100px;"><b>Sisa Limit</b></td>
                            <td><b>: Rp. {{ number_format($max) }},-</b></td>
                        </tr>
                    </table>
                </div>
                <div class="col col-md-6">                    
                </div>
            </div>
        </div>
        <div class="panel-body">     
            @if (count($errors->all())>0)
            <div class="alert alert-warning">
               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               <!-- if there are creation errors, they will show here -->
               {{ HTML::ul($errors->all()) }}
            </div>        
			@endif
			@if(Session::has('message'))
				<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
			@endif
			<form class="form-horizontal" action="{{ $xurl }}prosesKasbonSave" method="POST">
                <input type="hidden" name="kasbonstatus_id" value="{{ $ks_id }}"/>
                <input type="hidden" name="karyawan_id" value="{{ $karyawan->id }}"/>
                <input type="hidden" name="karyawan" value="{{ $karyawan->nama }}"/>
                <input type="hidden" name="max" value="{{ $max }}"/>
                <div class="form-group">
                    <label class="col-sm-2 col-md-2 control-label">Tanggal</label>
                    <div class="col-sm-6 col-md-2">
                        <input id="tgl" name="tgl" type="text" class="form-control datepicker" data-provide="datepicker" data-date-format="yyyy-mm-dd"/>
                    </div>
					<div class="col-sm-6 col-md-2 pull-right">
						<a href="{{$xurl}}limitKasbon/{{$karyawan->id}}" class="btn btn-warning" id="atur">Atur Limit Kasbon</a>
					</div>	
                </div>
				<div class="form-group">
                    <label class="col-sm-2 col-md-2 control-label">Jenis Transaksi</label>
                    <div class="col-sm-6 col-md-3">
                        <select class="form-control" name="jenis">
							<option val=1>Pengeluaran</option>
							<option val=2>Pengembalian</option>
						</select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-md-2 control-label">Jumlah Rp. </label>
                    <div class="col-sm-6 col-md-3">
                        <input type="text" class="form-control" name="jumlah" placeholder="Rp." id="jumlah"/>
                    </div>
                </div>
				<div class="form-group">
                    <label class="col-sm-2 col-md-2 control-label">Catatan Tambahan</label>
                    <div class="col-sm-6 col-md-7">
                        <input type="text" class="form-control" name="catatan" placeholder="Maks. 250 Karakter" id="catatan"/>
                    </div>
                </div>
                <div class="form-group form-actions">
                    <div class="col-sm-offset-2 col-sm-10">                        
                        <button type="submit" class="btn btn-success" id="simpan">Proses Transaksi</button>
                    </div>
                </div>                   
            </form>
        </div>
    </div>
	<h4>History Transaksi Kasbon</h4>
	<table id="datatable" class="table table-condensed">
		<thead>
			<tr>
				<th tabindex="0" rowspan="1" colspan="1" style="text-align: center">Tanggal</th>
				<th tabindex="0" rowspan="1" colspan="1" style="text-align: left">Keterangan</th>
				<th tabindex="0" rowspan="1" colspan="1" style="text-align: right">Kasbon Rp.</th>
				<th tabindex="0" rowspan="1" colspan="1" style="text-align: right">Pengembalian Rp.</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($history as $key=>$v)
			<tr>
				<td align="center">{{ $v->tgl }}</td>
				<td align="left">{{ $v->catatan }}</td>
				<td align="right">{{ number_format($v->debet) }}</td>
				<td align="right">{{ number_format($v->kredit) }}</td>
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
	
	$('#tgl').datepicker({      
        todayHighlight: true,
        autoclose: true,
        weekStart: 1,
    });
    $("#tgl").datepicker("setDate", new Date());
	
	var max	= <?php echo $max; ?>;
	if (max<=0){
		$('#simpan').attr('disabled','');
	}
</script>

@stop
