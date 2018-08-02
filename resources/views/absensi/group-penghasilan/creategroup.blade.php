@extends('layouts.absensi')
@section('content')

<div class="menubar">
    <div class="sidebar-toggler visible-xs">
        <i class="ion-navicon"></i>
    </div>
    <div class="page-title">
        Input Data Group Gaji,
        <small><strong>Buat Baru</strong></small>
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

    {{ Form::open(array('url' => 'group-penghasilan','class'=>'form-horizontal','role'=>'form')) }}
		<div class="form-group">
			<label class="col-sm-2 col-md-2 control-label">Keterangan</label>
			<div class="col-sm-10 col-md-4">
				{{ Form::text('keterangan', Input::old('keterangan'), array('placeholder' => 'Keterangan','class'=>'form-control')) }}
			</div>
        </div>
		<div class="form-group form-actions">
			<div class="col-sm-offset-2 col-sm-10">
				{{ Form::submit('Simpan!', array('class' => 'btn btn-success')) }}       
			</div>
		</div>    
    {{ Form::close() }}
</div>


@stop