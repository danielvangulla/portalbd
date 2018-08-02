@extends('layouts.absensi')
@section('content')
<?php $xurl = \App\AbsensiSetup::url(); ?>
<div class="menubar">
    <div class="sidebar-toggler visible-xs">
        <i class="ion-navicon"></i>
    </div>
    <div class="page-title">
		<span style="float:left">Upload dari : </span>
		{{ Form::select('outlet',array(1=>'Big Data'),$outlet,array('class'=>'form-control','style'=>'width:300px; margin-top:-3px;','id'=>'nomorOutlet')) }}
    </div>	
</div>
@if (Session::has('message'))
     <div class="alert alert-success">
         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
         {{ Session::get('message') }}
     </div>
@endif
<div class="tabs">
	<ul class="nav nav-tabs" role="tablist">
		<li class="active"><a href="#tab2" role="tab" data-toggle="tab">Via Text File</a></li>
		<li ><a href="#tab1" role="tab" data-toggle="tab">Via Web Service</a></li>
	</ul>
</div>
<div class="content-wrapper">
	<div id="myTabContent" class="tab-content">
		<div class="tab-pane fade in" id="tab1"><br/>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>Upload Data Absensi</h4>
				</div>
				<div class="panel-body">
					
					<h4>Local IP : 
						<span class="label label-primary">{{ $setup->ipmesin }}</span> : <span class="label label-info">{{ $setup->key}}</span>
						<span style="margin-left:20px;" class="btn btn-xs btn-warning" href="#" data-target="#form-modal" data-toggle="modal">Rubah IP</span>
						
						<div class="pull-right">Periode Absen : 
							<span class="label label-primary">{{ $setup->absenperiod1 }}</span> s.d <span class="label label-primary">{{ $setup->absenperiod2 }}</span> 
							<span style="margin-left:20px;" class="btn btn-xs btn-warning" href="#" data-target="#form-modalperiode" data-toggle="modal">Rubah Periode</span>
						</div> 
					</h4>
					<div class="alert alert-info text-center">
						<strong>Perhatian!... </strong> <br/><br/>
						Pengiriman data sebaiknya dilakukan pada malam hari setelah operasional atau pagi hari sebelum operasional di mulai.. <br>
						Perhatikan <b>Tanggal Periode Absen</b> sebelum melakukan Proses Data..
					</div>
					
					<div style="text-align: center">
						<a href="#" class="btn btn-info" onclick="uploadData('{{ $setup->ipmesin }}')" id="tombolUpload"> <i class="ion-upload"></i> Upload Data Absensi</a>
					</div>
					<div class="row">
						<div class="col col-md-12 text-center" id="statusProgres" style="display: none;">
							<br/>
							<span class="text-danger"><img src="{{ $xurl.'images/select2-spinner.gif' }}" /> mohon tunggu, sedang proses........</span>
						</div>
						<div class="col col-md-12 text-center" id="statusProgresBerhasil" style="display: none;">
							<br/>
							<span class="text-info">Upload data absensi selesai</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="tab-pane fade in active" id="tab2"><br/>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>Upload Data Absensi</h4>            
				</div>
				<div class="panel-body">
					<h4>
						<div class="pull-right">Periode Absen : 
								<span class="label label-primary">{{ $setup->absenperiod1 }}</span> s.d <span class="label label-primary">{{ $setup->absenperiod2 }}</span> 
								<span style="margin-left:20px;" class="btn btn-xs btn-warning" href="#" data-target="#form-modalperiode" data-toggle="modal">Rubah Periode</span>
						</div>
					</h4>
					<h5>
						<form action="{{ url($xurl.'upload-absensi-file') }}" method="post" enctype="multipart/form-data">
						@csrf
							Pilih File (.txt) untuk diupload:
							<input type="file" name="fileToUpload" id="fileToUpload"><br>
							<input class="hidden" name="outlet" id="xoutlet">
					</h5>
					<div class="alert alert-info text-center">
						<strong>Perhatian!... </strong> <br/><br/>
						Pengiriman data sebaiknya dilakukan pada malam hari setelah operasional atau pagi hari sebelum operasional di mulai.. <br>
						Perhatikan <b>Tanggal Periode Absen</b> sebelum melakukan Proses Data..
					</div>
					<div style="text-align: center">                
						<!--a href="#" class="btn btn-info" onclick="uploadData2()" id="tombolUpload2"> <i class="ion-upload"></i> Proses Data Absensi</a-->
							<input class="btn btn-md btn-info hidden" type="submit" value="Proses Data Absensi" name="submit" id="uploadFile">
						</form>
						<button class="btn btn-md btn-info" id="uploadFilex">Proses Data Absensi</button>
					</div>
					<div class="row">
						<div class="col col-md-12 text-center" id="statusProgres2" style="display: none;">
							<br/>
							<span class="text-danger"><img src="{{ $xurl.'images/select2-spinner.gif' }}" /> mohon tunggu, sedang proses........</span>                    
						</div>   
						<div class="col col-md-12 text-center" id="statusProgresBerhasil2" style="display: none;">
							<br/>
							<span class="text-info">Proses data absensi selesai</span>                    
						</div>   
					</div>            
				</div>        
			</div>		
		</div>
	</div>
</div>
<!-- Form Modal -->
<div class="modal fade" id="form-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!--form method="post" action="#" role="form"-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">
                        Rubah IP Mesin FingerPrint,<b style="margin-left:10px;"></b>
                    </h4>
                </div>
                <div class="modal-body">
					<div class="form-horizontal">
						<div class="form-group">
							<label class="col-sm-2 col-md-3 control-label"> IP Mesin </label>
							<div class="col-sm-5 col-md-6">
								<input id="ipmesin" class="form-control" placeholder="contoh: 192.168.1.1"/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 col-md-3 control-label"> Key Mesin </label>
							<div class="col-sm-5 col-md-4">
								<input id="key" class="form-control" placeholder="contoh: 123456"/>
							</div>
						</div>
					</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default hidden" data-dismiss="modal" id="closeModal">Cancel</button>
                    <!--button type="button" class="btn btn-success" id="update">Update</button-->
					<div class="form-group form-actions">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="button" class="btn btn-sm btn-success" onclick="gantiIP()">Proses!</button>
						</div>
					</div>   
                </div>
            </form>
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
    
    function uploadData(ip)
    {
		var outlet = ($('#nomorOutlet').val());
		var p1	= "<?php echo $setup->absenperiod1; ?>";
		var p2	= "<?php echo $setup->absenperiod2; ?>";
		if (outlet == 0){
			alert ("Silahkan Pilih Outlet.."); return;
		} 
		
        $("#statusProgres").show();
        $("#statusProgresBerhasil").hide();
        $("#tombolUpload").hide();
        $("#uploadFilex").hide();
        
        $.ajax({
            url:xurl+'upload-absensi-proses/'+ip+'/'+outlet,
            type:'GET',
            complete: function(info) {  //untuk upload data absen menggunakan complete bukan success
                if (info.responseText == "ok") {
                    $("#statusProgres").hide();
                    $("#statusProgresBerhasil").show();
                    $("#tombolUpload").show();
                    $("#uploadFilex").show();
                } else { // ambil data dari localserver
					getlokal(ip,outlet,info.responseText,p1,p2);
                }
            }
        });
    }
	
	function getlokal(ip,outlet,key,p1,p2)
	{
		$.ajax({
			type:'GET',
            url:'http://localhost/localserverside/absen/uploadAbsensiProses/'+ip+'/'+key+'/'+outlet+'/'+p1+'/'+p2,
			dataType:'jsonp',
            success: function(data) {
				if (data[0]['pin'] == "gagal"){
					$("#statusProgres").hide();
					$("#statusProgresBerhasil").show();
					$("#tombolUpload").show();
					$("#uploadFilex").show();
					alert('Error! \n\nPeriksa Kembali IP atau Key Mesin.. \n\nPastikan Mesin Finger Support Web Service..');
				} else {
					prosesBuffer(data);
				}
            }
        });
	}
	
	function prosesBuffer(data)
    {
		$.ajax({			
            type: "POST",
            dataType: 'json',
            url:xurl+'upload-buffer',
            data: {'data': data},
            success: function(data) {},
			error: function(errMsg) {
                if (errMsg.responseText==="berhasil")
                {
                    $("#statusProgres").hide();
					$("#statusProgresBerhasil").show();
					$("#tombolUpload").show();
					$("#uploadFilex").show();
					alert("Upload Data dan Proses Absensi Berhasil !");
                } else if (errMsg.responseText==="error") {
                    $("#statusProgres").hide();
					$("#statusProgresBerhasil").show();
					$("#tombolUpload").show();
					$("#uploadFilex").show();
					alert("Upload Berhasil, tapi Proses Absensi Gagal! \n\nSilahkan menggunakan Recount Absensi..");
                } else {
					$("#statusProgres").hide();
					$("#statusProgresBerhasil").show();
					$("#tombolUpload").show();
					$("#uploadFilex").show();
					alert('Error!');
				}
            }
        });
    }
	
	$('#uploadFilex').click(function(){
		$('#xoutlet').val($('#nomorOutlet').val());
		$(this).hide();
		$('#uploadFile').click();
		$('#tombolUpload').hide();
		$("#statusProgres2").show();
	});

	function gantiIP()
	{
		var ip = $('#ipmesin').val();
		var key = $('#key').val();		
		jsonArr = [{'ip':ip,'key':key}];		
		$.ajax({
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			url:xurl+'setupIP',
			type:'POST',
			data:{'data':jsonArr},
			dataType : 'json',
			complete: function(info) {
				location.reload();
			}
		});
	}

	function gantiPeriode()
	{
		var tgl1 = $('#tgl1').val();
		var tgl2 = $('#tgl2').val();		
		jsonArr = [{'tgl1':tgl1, 'tgl2':tgl2}];
		$.ajax({
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			url : xurl+'setupPeriode',
			type:'POST',
			data:{'data':jsonArr},
			dataType : 'json',
			complete: function(info) {
				location.reload();
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
