@extends('layouts.schedule')
@section('content')
<?php $xurl = Setup::url(); ?>
<div class="menubar">
    <div class="sidebar-toggler visible-xs">
        <i class="ion-navicon"></i>
    </div>
</div>
@if (Session::has('message'))
     <div class="alert alert-success">
         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
         {{ Session::get('message') }}
     </div>
@endif

<div class="content-wrapper">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4>Recount Data Absensi</h4>
		</div>
		<div class="panel-body">
			<div class="alert alert-info text-center">
				<h4>
					<div class="pull-right">Periode Absen : 
						<span class="label label-primary">{{ $setup->absenperiod1 }}</span> s.d <span class="label label-primary">{{ $setup->absenperiod2 }}</span> 
						<span style="margin-left:20px;" class="btn btn-xs btn-warning" href="#" data-target="#form-modalperiode" data-toggle="modal">Rubah Periode</span>
					</div> 
				</h4>
				<br>
				<strong>Perhatian!... </strong> <br/><br/>
				Proses ini dijalankan untuk menghitung ulang Absen.. <br>
				Lakukan Proses ini <b>Hanya Jika</b> terdapat Approval Sakit/Cuti/Izin yang Belum di Input <b>Setelah</b> Upload Absensi dilakukan..
			</div>
			{{ Form::select('outlet',Karyawan::outlet(),Input::old('outlet'),
			array('class'=>'form-control','id'=>'out','style'=>'width:200px;')) }}
			<br>
			<div style="text-align: center">
				<a href="#" class="btn btn-info" onclick="uploadData2()" id="tombolUpload2"> <i class="ion-upload"></i> Recount Data by Outlet</a>
			</div>
			<br>
			<br>
			<div style="text-align: center">
				<a href="#" class="btn btn-success" onclick="uploadData()" id="tombolUpload"> <i class="ion-upload"></i> Recount Data Semua Oultet</a>
			</div>
			<div class="row">
				<div class="col col-md-12 text-center" id="statusProgres" style="display: none;">
					<br/>
					<span class="text-danger"><img src="{{ URL::asset('images/select2-spinner.gif') }}" /> mohon tunggu, sedang proses........</span>
				</div>
				<!--div class="col col-md-12 text-center" id="wapo1" style="display: none;">
					<br>
					<span class="text-danger"><img src="{{ URL::asset('images/select2-spinner.gif') }}" />
					<span class="text-info">Sedang Menghitung Wapo Manado..</span>
				</div>
				<div class="col col-md-12 text-center" id="wapo2" style="display: none;">
					<br>
					<span class="text-danger"><img src="{{ URL::asset('images/select2-spinner.gif') }}" />
					<span class="text-info">Sedang Menghitung Wapi Manado..</span>
				</div>
				<div class="col col-md-12 text-center" id="wapo3" style="display: none;">
					<br>
					<span class="text-danger"><img src="{{ URL::asset('images/select2-spinner.gif') }}" />
					<span class="text-info">Sedang Menghitung Wapo Kendari..</span>
				</div>
				<div class="col col-md-12 text-center" id="wapo4" style="display: none;">
					<br>
					<span class="text-danger"><img src="{{ URL::asset('images/select2-spinner.gif') }}" />
					<span class="text-info">Sedang Menghitung Wapo Jayapura..</span>
				</div>
				<div class="col col-md-12 text-center" id="wapo6" style="display: none;">
					<br>
					<span class="text-danger"><img src="{{ URL::asset('images/select2-spinner.gif') }}" />
					<span class="text-info">Sedang Menghitung Wapo Lippo..</span>
				</div>
				<div class="col col-md-12 text-center" id="wapo7" style="display: none;">
					<br>
					<span class="text-danger"><img src="{{ URL::asset('images/select2-spinner.gif') }}" />
					<span class="text-info">Sedang Menghitung Wapo Palu..</span>
				</div-->
				<div class="col col-md-12 text-center" id="wapoFinish" style="display: none;">
					<br>
					<span class="text-danger"><img src="{{ URL::asset('images/select2-spinner.gif') }}" />
					<span class="text-info">Finishing Recount..</span>
				</div>
				<div class="col col-md-12 text-center" id="statusProgresBerhasil" style="display: none;">
					<br>
					<span class="text-info">Recount Data Absensi Selesai</span>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Form Modal -->
<div class="modal fade" id="form-modalperiode" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!--form method="post" action="#" role="form"-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">
                        Rubah Periode Absen,<b style="margin-left:10px;"></b>
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
	var status = 0;
	
	function uploadData2()
	{
		var outlet = $('#out').val();
		$("#statusProgres").show();
        $("#statusProgresBerhasil").hide();
        $("#tombolUpload").hide();
        $("#tombolUpload2").hide();
		$.ajax({
            url:xurl+'recount-absensi-proses/'+outlet,
            type:'GET',
            complete: function(info) {  //untuk upload data absen menggunakan complete bukan success   
                if (info.responseText==="ok") {
					sinkron();
                }
            }
        });
	}
	
    function uploadData()
    {
		status = 0;
		
        // $("#statusProgres").show();
        $("#statusProgresBerhasil").hide();
        $("#wapo1").show();
        $("#wapo2").show();
        $("#wapo3").show();
        $("#wapo4").show();
        $("#wapo6").show();
        $("#wapo7").show();
        $("#tombolUpload").hide();
        $("#tombolUpload2").hide();
		
        prosesRecount(1);
        prosesRecount(2);
        prosesRecount(3);
        prosesRecount(4);
        prosesRecount(6);
        prosesRecount(7);
    }
	
	function prosesRecount(outlet)
	{
		$.ajax({
            url:xurl+'recount-absensi-proses/'+outlet,
            type:'GET',
            complete: function(info) {  //untuk upload data absen menggunakan complete bukan success   
                if (info.responseText==="ok") {
					status = parseInt(status)+parseInt(1);
					berhasil();
                }
            }
        });
	}
	
	function berhasil()
	{
		if (status == 1){$("#wapo1").hide();}
		if (status == 2){$("#wapo7").hide();}
		if (status == 3){$("#wapo3").hide();}
		if (status == 4){$("#wapo6").hide();}
		if (status == 5){$("#wapo2").hide();}
		
		if (status == 6){
			$("#wapo4").hide();
			sinkron();
		}
	}
	
	function sinkron()
	{
		$("#wapoFinish").show();
		$.ajax({
			url:xurl+'recount-sinkron',
			type:'GET',
			complete: function(info) { 
				if (info.responseText==="ok") {
					$("#statusProgres").hide();
					$("#wapoFinish").hide();
					$("#statusProgresBerhasil").show();
					// $("#tombolUpload").show();
				} else {
					alert('Error! \n\nTerjadi Kesalahan..');
					// alert(info);
					// location.reload();
				}
			}
		});
	}
	
	function gantiPeriode()
	{
		var tgl1 = $('#tgl1').val();
		var tgl2 = $('#tgl2').val();
		
		jsonArr = [{'tgl1':tgl1, 'tgl2':tgl2}];
		
		$.ajax({
			url:xurl+'setupPeriode',
			type:'POST',
			data:{'data':jsonArr},
			success: function(info) {
				if (info==='ok') {
					location.reload();
				}					
			}
		});
	}
	
	$("#tgl1").val("<?php echo $setup->absenperiod1; ?>");
    $("#tgl2").val("<?php echo $setup->absenperiod2; ?>");
	
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
