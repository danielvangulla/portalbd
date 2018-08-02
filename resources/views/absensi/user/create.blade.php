@extends('layouts.none')
@section('content')

<div class="menubar">
    <div class="sidebar-toggler visible-xs">
        <i class="ion-navicon"></i>
    </div>

    <div class="page-title">
        Master User
        <small class="hidden-xs hidden-sm">
            Input Data Baru
        </small>
    </div>    
</div>

<?php
	$session = Auth::User();
?>

<div class="content-wrapper">
    @if (count($errors->all())>0)
     <div class="alert alert-warning">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <!-- if there are creation errors, they will show here -->
        {{ HTML::ul($errors->all()) }}
     </div>
    @endif
    
	@if (Session::has('exist'))
		 <div class="alert alert-danger">
			 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			 {{ Session::get('exist') }}
		 </div>
	@endif
    {{ Form::open(array('url' => 'user','class'=>'form-horizontal','role'=>'form')) }}
	
	<div class="form-group">
		<label class="col-sm-2 col-md-2 control-label">Posisi Outlet</label>
		<div class="col-sm-5 col-md-3">
			{{ Form::select('outlet',$outlet, Input::old('level'),array('class'=>'form-control','id'=>'level')) }}
		</div>
	</div>
	
	<?php
		switch ($session->level)
		{
			case -1	: $lv = array(-1=>"Root",0=>"Administrator", 1=>"Staff HRD", 2=>"Manager", 3=>"Staff", 10=>"Karyawan"); break;
			case  0 : $lv = array(0=>"Administrator", 1=>"Staff HRD", 2=>"Manager", 3=>"Staff", 10=>"Karyawan"); break;
			case  1 : $lv = array(1=>"Staff HRD", 2=>"Manager", 3=>"Staff", 10=>"Karyawan"); break;
			case  2 : $lv = array(2=>"Manager", 3=>"Staff", 10=>"Karyawan"); break;
			case  3 : $lv = array(3=>"Staff", 10=>"Karyawan"); break;
			case 10	: $lv = array(10=>"Karyawan"); break;
		}
	?>
    <div class="form-group">
        <label class="col-sm-2 col-md-2 control-label">Level Akses</label>
        <div class="col-sm-5 col-md-3">
            {{ Form::select('level', $lv, Input::old('level'),array('class'=>'form-control','id'=>'lvl')) }}
        </div>
		<div class="col-sm-5 col-md-3" id="link">
			<select class="form-control" id="karyawan_id" name="karyawan_id">
			@foreach ($kar as $k=>$v)
				<option id="{{ $v->id }}" value="{{ $v->id }}">{{ $v->nama }} {{ $v->idmesin }}</option>
			@endforeach
			</select>
		</div>
    </div>
	
    <div class="form-group">
        <label class="col-sm-2 col-md-2 control-label">Departemen</label>
        <div class="col-sm-5 col-md-3">
            {{ Form::select('dept', $dept, Input::old('dept'),array('class'=>'form-control','id'=>'dept')) }}
        </div>
    </div>
	
    <div class="form-group">
        <label class="col-sm-2 col-md-2 control-label">Nama User</label>
        <div class="col-sm-10 col-md-3">
            {{ Form::text('x', Input::old('username'), array('placeholder' => 'Nama','class'=>'form-control','id'=>'x')) }}
            {{ Form::text('username', Input::old('username'), array('placeholder' => 'Nama','class'=>'form-control','id'=>'username')) }}
        </div>
    </div>
    
    <div class="form-group">
        <label class="col-sm-2 col-md-2 control-label">Jabatan</label>
        <div class="col-sm-4 col-md-3">
			{{ Form::text('jabatan', Input::old('jabatan'), array('placeholder' => 'Jabatan','class'=>'form-control')) }}
			{{ Form::text('nama_karyawan', Input::old('nama_karyawan'), array('placeholder' => 'nama_karyawan','class'=>'form-control hidden','id'=>'nama_karyawan')) }}
        </div>        
    </div>
	
    <div class="form-group">
        <label class="col-sm-2 col-md-2 control-label">Password</label>
        <div class="col-sm-5 col-md-3">
            {{ Form::password('password', array('placeholder'=>'Password', 'class'=>'form-control' ) ) }}
        </div>
    </div>
	
	<div class="form-group">
		<label class="col-sm-2 col-md-2 control-label">Password (Ulangi)</label>
        <div class="col-sm-4 col-md-3">
            {{ Form::password('passwordUlang', array('placeholder'=>'Ulangi Password', 'class'=>'form-control' ) ) }}
        </div>
    </div>
	
	@if ($session->level<=2)
    <div class="form-group form-actions">
        <div class="col-sm-offset-2 col-sm-10">
            {{ Form::submit('Simpan Data User!', array('class' => 'btn btn-success')) }}       
        </div>
    </div>
	@endif
	
    {{ Form::close() }}
	
</div>
<script type="text/javascript">
	
	$('#link').hide();
	$('#x').hide();
	
	$('#lvl').on('change', function() {
		if (this.value==10)
		{
			$('#link').show();
			$('#x').show();
			$('#username').hide();
			$('#x').attr('disabled','');
			id	= $('#karyawan_id').val();
			tst = $('#'+id).text().split(" ");
			// $('#x').val($('#'+id).text().substr($('#'+id).length - 5));
			// $('#username').val($('#'+id).text().substr($('#'+id).length - 5));
			$('#x').val(tst[0]+tst[tst.length - 1]);
			$('#username').val(tst[0]+tst[tst.length - 1]);
			
			tstx = tst.slice(0, tst.length - 1).join(' ');
			// $('#nama_karyawan').val($('#'+id).text().slice(0,-7));
			$('#nama_karyawan').val(tstx);
		} else {
			$('#link').hide();
			$('#x').hide();
			$('#username').show();
			$('#x').removeAttr('disabled');
			$('#username').val("");
		}
	});
	
	$('#karyawan_id').on('change', function() {
		id	= this.value;
		// $('#x').val($('#'+id).text().substr($('#'+id).length - 5));
		
		tst = $('#'+id).text().split(" ");
		// $('#username').val($('#'+id).text().substr($('#'+id).length - 5));
		
		$('#x').val(tst[0]+tst[tst.length - 1]);
		$('#username').val(tst[0]+tst[tst.length - 1]);
		
		tstx = tst.slice(0, tst.length - 1).join(' ');
		// $('#nama_karyawan').val($('#'+id).text().slice(0,-7));
		$('#nama_karyawan').val(tstx);
	});
</script>
@stop