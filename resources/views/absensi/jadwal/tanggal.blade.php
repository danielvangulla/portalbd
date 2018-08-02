@extends('layouts.schedule')
@section('content')
<?php $xurl = Setup::url(); ?>
<div class="menubar">
    <div class="sidebar-toggler visible-xs">
        <i class="ion-navicon"></i>
    </div>

    <div class="page-title">
        Jadwal Karyawan
    </div>
</div>

<div class="content-wrapper">
    
    <div class="row">
        <div class="col-sm-1 col-md-1">
            <h5>Periode :</h5>
        </div>
        
        <div class="col-md-10">
            <div class="col-sm-4 col-md-3">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input id="tgl1" type="text" class="form-control datepicker" placeholder="" data-provide="datepicker" data-date-format="yyyymmdd"/>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-4 col-md-3">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input id="tgl2" type="text" class="form-control datepicker" placeholder="" data-provide="datepicker" data-date-format="yyyymmdd"/>
                    </div>
                </div>
            </div>    
            
            <div class="col-sm-4 col-md-3">
				<select id="outlet" class="form-control">
					<option value="1">Kairagi</option>
					<option value="2">Lainnya</option>
				</select>
            </div>    
            
            <div class="col-sm-1 col-md-1">
                <butto class="btn btn-primary" onclick="proses()">Proses</butto>
            </div>
        </div>
    </div>
    
    <hr/>
            
    
</div>

<script type="text/javascript">
	var xurl	= "<?php echo $xurl; ?>";
    
	$('#tgl1, #tgl2').datepicker({
        todayHighlight: true,
        autoclose: true,
        weekStart: 1,
    });
    $("#tgl1, #tgl2").datepicker("setDate", new Date());
	
    function proses(){
        outlet	=$("#outlet").val();
        tgl1	=$("#tgl1").val();
        tgl2	=$("#tgl2").val();
        window.location.assign(xurl+'jadwal-display/'+outlet+'/'+tgl1+'/'+tgl2);
    }
</script>

@stop