@extends('layouts.none')
@section('content')

<div class="menubar">
    <div class="sidebar-toggler visible-xs">
        <i class="ion-navicon"></i>
    </div>

    <div class="page-title">
        Master User
        <small class="hidden-xs hidden-sm">
            Edit Data <strong>{{$dataUser->nama}}</strong>            
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
    
    {{ Form::model($dataUser, array('route' =>array('user.update',$dataUser->id),'method'=>'PUT','class'=>'form-horizontal','role'=>'form')) }}

	<div class="form-group">
		<label class="col-sm-2 col-md-2 control-label">Posisi Outlet</label>
		<div class="col-sm-5 col-md-3">
			{{ Form::select('outlet',$outlet, Input::old('outlet'),array('class'=>'form-control','id'=>'outlet')) }}
		</div>
	</div>
	
    <div class="form-group">
        <label class="col-sm-2 col-md-2 control-label">Nama User</label>
        <div class="col-sm-10 col-md-4">
            {{ Form::text('username', Input::old('username'), array('placeholder' => 'Nama','class'=>'form-control','disabled'=>'')) }}
        </div>
    </div>
    
    <div class="form-group">
        <label class="col-sm-2 col-md-2 control-label">Jabatan</label>
        <div class="col-sm-4 col-md-4">
			{{ Form::text('jabatan', Input::old('jabatan'), array('placeholder' => 'Jabatan','class'=>'form-control')) }}
        </div>        
    </div>
	<div class="form-group">
        <label class="col-sm-2 col-md-2 control-label text-danger">Password Lama</label>
        <div class="col-sm-5 col-md-3">
            {{ Form::password('passwordLama', array('placeholder'=>'Password Lama', 'class'=>'form-control' ) ) }}
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
	
	<?php
		switch ($session->level)
		{
			case -1 : $lv = array(-1=>"Root",0=>"Administrator", 1=>"Staff HRD", 2=>"Manager", 3=>"Staff", 10=>"Karyawan"); break;
			case  0	: $lv = array(0=>"Administrator", 1=>"Staff HRD", 2=>"Manager", 3=>"Staff", 10=>"Karyawan"); break;
			case  1	: $lv = array(1=>"Staff HRD", 2=>"Manager", 3=>"Staff", 10=>"Karyawan"); break;
			case  2	: $lv = array(2=>"Manager", 3=>"Staff", 10=>"Karyawan"); break;
			case  3	: $lv = array(3=>"Staff", 10=>"Karyawan"); break;
			case 10	: $lv = array(10=>"Karyawan"); break;
		}
		
		if ($dataUser->level == 10){
			$lv = array(10=>"Karyawan");
		}
	?>
    <div class="form-group">
        <label class="col-sm-2 col-md-2 control-label">Level Akses</label>
        <div class="col-sm-5 col-md-3">
            {{ Form::select('level',$lv, Input::old('level'),array('class'=>'form-control','id'=>'level')) }}
        </div>
    </div>
	
    <div class="form-group">
        <label class="col-sm-2 col-md-2 control-label">Departemen</label>
        <div class="col-sm-5 col-md-3">
            {{ Form::select('dept', $dept, Input::old('dept'),array('class'=>'form-control','id'=>'dept')) }}
        </div>
    </div>
	
    <div class="form-group form-actions">
        <div class="col-sm-offset-2 col-sm-10">
            {{ Form::submit('Edit Data User!', array('class' => 'btn btn-warning')) }}       
        </div>
    </div>
	
    {{ Form::close() }}

</div>
@stop