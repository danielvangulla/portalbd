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
            <h4>Proses Hitung Gaji Karyawan</h4>            
        </div>
        <div class="panel-body">  
            <h4>Periode Gaji : 
				<span class="label label-primary">{{ $setup->absenperiod1 }}</span> s.d <span class="label label-primary">{{ $setup->absenperiod2 }}</span> 
				<span style="margin-left:20px;" class="btn btn-xs btn-warning" href="#" data-target="#form-modal" data-toggle="modal">Rubah Periode</span>
			</h4> 
            <br/>
            <div class="alert alert-info">
                <strong>Perhatian!... </strong> <br/>
                Proses generate data gaji ini bisa dilakukan kapan saja, tetapi sistem akan memproses sesuai dengan tanggal periode gaji yang berlaku saat ini
            </div>
            <div style="text-align: center">                
                <a href="#" class="btn btn-info" onclick="generateData()" id="tombolUpload"> <i class="ion-gear-a"></i> Generate Gaji Karyawan</a>
            </div>   
            <div class="row">
                <div class="col col-md-12 text-center" id="statusProgres" style="display: none;">
                    <br/>
                    <span class="text-danger"><img src="{{ URL::asset('images/select2-spinner.gif') }}" /> mohon tunggu, sedang proses........</span>                    
                </div>   
                <div class="col col-md-12 text-center" id="statusProgresBerhasil" style="display: none;">
                    <br/>
                    <span class="text-info">Proses generate gaji telah selesai.....</span>                    
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
    
    function generateData()
    {
        $("#statusProgres").show();
        $("#statusProgresBerhasil").hide();
        $("#tombolUpload").hide();
        
        $.ajax({
            url:xurl+'generate-gaji',
            type:'GET',
            complete: function(info) {  //untuk upload data absen menggunakan complete bukan success   
                if (info.responseText==="ok") {
                    $("#statusProgres").hide();
                    $("#statusProgresBerhasil").show();
                    $("#tombolUpload").show();
                } else {
                    // alert('error....');
					alert (info.responseText);
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
