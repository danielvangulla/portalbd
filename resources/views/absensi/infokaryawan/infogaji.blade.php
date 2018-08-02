@extends('layouts.none')
@section('content')
<?php $xurl = Setup::url(); ?>
<div class="menubar">
    <div class="sidebar-toggler visible-xs">
        <i class="ion-navicon"></i>
    </div>

    <div class="page-title">
        <b>{{ $nama }}</b> - Rincian Komponen Hitungan Gaji - Periode {{ $period }}
    </div>
	
	<div class="pull-right">
		<a class="btn btn-md btn-success" href="#" href="#" data-target="#form-modalperiode" data-toggle="modal">Ganti Periode</a>
		<a class="btn btn-md btn-primary" href="#" onclick="cetak()">Cetak Slip</a>
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
<!-- Form Modal -->
<div class="modal fade" id="form-modalperiode" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!--form method="post" action="#" role="form"-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">
                        Rubah Periode Gaji,<b style="margin-left:10px;"></b>
                    </h4>
                </div>
                <div class="modal-body">
					<div class="form-group">
						<label class="col-sm-2 col-md-2 control-label"> Dari </label>
						<div class="col-sm-5 col-md-3">
							<input id="tgl1" class="form-control datepicker" placeholder="" data-provide="datepicker" data-date-format="yyyy-mm-dd"/>
						</div>
						<label class="col-sm-2 col-md-2 control-label"> s/d </label>
						<div class="col-sm-5 col-md-3">
							<input id="tgl2" class="form-control" disabled/>
						</div>
					</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default hidden" data-dismiss="modal" id="closeModal">Cancel</button>
                    <!--button type="button" class="btn btn-success" id="update">Update</button-->
					<div class="form-group form-actions">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="button" class="btn btn-sm btn-success" onclick="gantiPeriode()">Proses!</button>
						</div>
					</div>   
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
	var xurl	= "<?php echo $xurl; ?>";
	
	function cetak(){
		window.open(xurl+'gaji-user/1', '_blank');
	}
    
	function gantiPeriode() {
		var tgl = $('#tgl1').val();	
		jsonArr = [{'tgl':tgl}];
		$.ajax({
			url:xurl+'changeUserPeriode',
			type:'POST',
			data:{'data':jsonArr},
			success: function(info) {
				if (info==='ok') {
					location.reload();
				}
			}
		});
	}
	
    $("#tgl1").val("<?php echo $setup->period1; ?>");
    $("#tgl2").val("<?php echo $setup->period2; ?>");
	
	$('#tgl1').datepicker({      
        todayHighlight: true,
        autoclose: true,
        weekStart: 1
    });
	
	$('#tgl1').change(function() {
		var tgl1 = ($(this).val()).split("-");
		var tgl = tgl1[2];
		var bln = parseInt(tgl1[1]);
		var thn = tgl1[0];
		var tgl2 = "";
		if (bln<9){ 
			tgl2 = thn+"-0"+(parseInt(bln)+1)+"-"+tgl;
		} else 
		if (bln<12) {
			tgl2 = thn+"-"+(parseInt(bln)+1)+"-"+tgl;
		} else 
		if (bln==12) {
			tgl2 = (parseInt(thn)+1)+"-01-"+tgl;
		}
		
		$("#tgl2").val(tgl2);
	});
</script>
@stop