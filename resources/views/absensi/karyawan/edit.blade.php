@extends('layouts.form')
@section('content')

<div class="menubar">
    <div class="sidebar-toggler visible-xs">
        <i class="ion-navicon"></i>
    </div>

    <div class="page-title">
        Edit Data Karyawan,
        <small><strong> {{ $karyawan->nama }}</strong></small>
    </div>
    
</div>

<div class="content-wrapper">
    
     @if (count($errors->all())>0)
     <div class="alert alert-warning">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <!-- if there are creation errors, they will show here -->
        {{ HTML::ul($errors->all()) }}                         
     </div>        
    @endif
    
    {{ Form::model($karyawan, array('route'=>array('karyawan.update',$karyawan->id), 'method'=>'PUT', 'class'=>'form-horizontal', 'role'=>'form')) }}
    
	<div class="form-group">
        <label class="col-sm-2 col-md-2 control-label">Outlet Sekarang</label>
        <div class="col-sm-5 col-md-3">
            {{ Form::select('outlet',$outlet,Input::old('outlet'),array('class'=>'form-control')) }}
        </div>
		<div>
			<input class="btn btn-warning" id="resetid" value="Reset ID#" />
		</div>
    </div>
	
	<div class="form-group">
        <label class="col-sm-2 col-md-2 control-label">ID Finger#</label>
        <div class="col-sm-5 col-md-3">
            {{ Form::text('idmesin', Input::old('idmesin'), array('placeholder' => 'Fingerprint','class'=>'form-control hidden','id'=>'idmesin')) }}
            {{ Form::text('xidmesin', Input::old('xidmesin'), array('placeholder' => 'Fingerprint','class'=>'form-control','id'=>'xidmesin')) }}
        </div>
		<div>
			<input class="btn btn-success" id="getid" value="ID# Otomatis" />
		</div>
    </div>
        
    <div class="form-group">
        <label class="col-sm-2 col-md-2 control-label">Nama</label>
        <div class="col-sm-10 col-md-8">
            {{ Form::text('nama', Input::old('nama'), array('placeholder' => 'Karyawan','class'=>'form-control')) }}
        </div>
    </div>
    
    <div class="form-group">
        <label class="col-sm-2 col-md-2 control-label">Lahir</label>
        <div class="col-sm-5 col-md-3">
            {{ Form::text('lahir', Input::old('lahir'), array('placeholder' => 'Tempat lahir','class'=>'form-control')) }}
        </div>
        
        <label class="col-sm-1 col-md-1 control-label">Tanggal</label>
        <div class="col-sm-3 col-md-4">
            {{ Form::text('tgllahir', Input::old('tgllahir'), array('placeholder' => 'Tanggal lahir','class'=>'form-control', 'data-provide'=>'datepicker',  'data-date-format'=>'yyyy-mm-dd', 'id'=>'tgllahir')) }}
        </div>
    </div>
    
    <div class="form-group">
        <label class="col-sm-2 col-md-2 control-label">Alamat</label>
        <div class="col-sm-10 col-md-8">
            {{ Form::text('alamat', Input::old('alamat'), array('placeholder' => 'Alamat','class'=>'form-control')) }}
        </div>
    </div>
    
    <div class="form-group">
        <label class="col-sm-2 col-md-2 control-label">Telepon</label>
        <div class="col-sm-5 col-md-3">
            {{ Form::text('tlp', Input::old('tlp'), array('placeholder' => 'Telepon','class'=>'form-control')) }}
        </div>
        
        <label class="col-sm-1 col-md-1 control-label">Email</label>
        <div class="col-sm-3 col-md-4">
            {{ Form::text('email', Input::old('email'), array('placeholder' => 'Email','class'=>'form-control')) }}
        </div>
    </div>
    
    <div class="form-group">
        <label class="col-sm-2 col-md-2 control-label">Nomor KTP</label>
        <div class="col-sm-10 col-md-8">
            {{ Form::text('ktp', Input::old('ktp'), array('placeholder' => 'No.KTP','class'=>'form-control')) }}
        </div>
    </div>
    
    <div class="form-group">
        <label class="col-sm-2 col-md-2 control-label">Agama</label>
        <div class="col-sm-10 col-md-8">
            {{ Form::select('agama',array('Islam','Kristen','Katolik','Hindu','Budha'),Input::old('agama'),array('class'=>'form-control')) }}
        </div>
    </div>
    
    <div class="form-group">
        <label class="col-sm-2 col-md-2 control-label">Kelamin</label>
        <div class="col-sm-10 col-md-8">
            {{ Form::select('kelamin',array('Pria','Wanita'),Input::old('kelamin'),array('class'=>'form-control')) }}
        </div>
    </div>
    
    <div class="form-group">
        <label class="col-sm-2 col-md-2 control-label">Status</label>
        <div class="col-sm-10 col-md-8">
            {{ Form::select('stat_kawin',array('Belum Menikah','Menikah'),Input::old('stat_kawin'),array('class'=>'form-control')) }}
        </div>
    </div>
    
    <div class="form-group">
        <label class="col-sm-2 col-md-2 control-label">Tgl.Masuk</label>
        <div class="col-sm-10 col-md-8">
            {{ Form::text('tglmasuk', Input::old('tglmasuk'), array('placeholder' => 'Masuk','class'=>'form-control', 'data-provide'=>'datepicker',  'data-date-format'=>'yyyy-mm-dd', 'id'=>'tglmasuk')) }}
        </div>
    </div>
    
    <div class="form-group">
        <label class="col-sm-2 col-md-2 control-label">Departemen</label>
        <div class="col-sm-5 col-md-3">
            {{ Form::select('departemen_id',$departemen,Input::old('departemen_id'),array('class'=>'form-control')) }}
        </div>
        
        <label class="col-sm-1 col-md-1 control-label">Sub</label>
        <div class="col-sm-3 col-md-4">
            {{ Form::select('departemensub_id',$departemensub,Input::old('departemensub_id'),array('class'=>'form-control')) }}
        </div>
    </div>
    
    <div class="form-group">
        <label class="col-sm-2 col-md-2 control-label">Jabatan</label>
        <div class="col-sm-10 col-md-8">
            {{ Form::select('jabatan_id',$jabatan,Input::old('jabatan_id'),array('class'=>'form-control')) }}
        </div>
    </div>
    
    <div class="form-group">
        <label class="col-sm-2 col-md-2 control-label">Group Gaji</label>
        <div class="col-sm-10 col-md-8">
            {{ Form::select('groupgaji_id',$groupgaji,Input::old('groupgaji_id'),array('class'=>'form-control')) }}
        </div>
    </div>
    
	<div class="form-group">
        <label class="col-sm-2 col-md-2 control-label">Bonus Rp.</label>
        <div class="col-sm-10 col-md-2">
            {{ Form::text('bonus', Input::old('bonus'), array('class'=>'form-control')) }}
        </div>
    </div>
	
	@if (Auth::user()->level < 0)
	<div class="form-group">
	@else
	<div class="form-group hidden">
	@endif
        <label class="col-sm-2 col-md-2 control-label">Sisa Cuti (Hari)</label>
        <div class="col-sm-10 col-md-1">
            {{ Form::text('sisa_cuti_custom', Input::old('sisa_cuti_custom'), array('class'=>'form-control')) }}
        </div>
    </div>
	
    <hr/>
    
    <div class="form-group form-actions">
        <div class="col-sm-offset-2 col-sm-10">
            {{ Form::submit('Edit Data Karyawan!', array('class' => 'btn btn-primary','id'=>'submit')) }}       
        </div>
    </div>
    
    {{ Form::close() }}
</div>

<script>
	idmesin = $('#idmesin').val();

	// $('#xidmesin').attr('disabled','');
	$('#xidmesin').val(idmesin);
	
	$('#getid').click(function(){
		$('#idmesin').val(0);
		$('#xidmesin').val(0);
	});
	$('#resetid').click(function(){
		$('#idmesin').val(idmesin);
		$('#xidmesin').val(idmesin);
	});
	
	$('#submit').click(function(){
		// alert	( $('#idmesin').val() );
	});

	$('#tgllahir, #tglmasuk').datepicker({      
        todayHighlight: true,
        autoclose: true,
        weekStart: 1,
    });
</script>

@stop