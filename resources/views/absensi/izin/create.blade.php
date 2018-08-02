@extends('layouts.schedule')
@section('content')

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
            <h4>Input Permohonan Izin</h4>
            <div class="row">
                <div class="col col-md-6">
                    <table>
                        <tr>
                            <td style="width: 100px;"><strong>Karyawan</strong></td>
                            <td><strong>: {{ $karyawan->nama; }}</strong></td>
                        </tr>
                        <tr>
                            <td style="width: 100px;">Departemen</td>
                            <td>: {{ $karyawan->departemen->keterangan; }}</td>
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
            {{ Form::open(array('url' => 'izin', 'role'=>'form','class'=>'form-horizontal')) }}            
                <input type="hidden" name="karyawan_id" value="{{ $karyawan->id; }}"/>
                
                <div class="form-group">    
                    <label class="col-sm-2 col-md-2 control-label">Izin</label>
                    <div class="col-sm-5 col-md-3">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input id="mulai" name="mulai" type="text" class="form-control datepicker" />
                        </div>
                    </div>  
                    
                    <label class="col-sm-1 col-md-1 control-label" style="text-align: center;">s.d</label>
                    <div class="col-sm-5 col-md-3">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input id="selesai" name="selesai" type="text" class="form-control datepicker" />
                        </div>
                    </div>  
                </div>
                                                
                <div class="form-group">
                    <label class="col-sm-2 col-md-2 control-label">Alasan</label>
                    <div class="col-sm-10 col-md-8">
                        <textarea class="form-control" rows="4" name="keterangan"></textarea>
                    </div>
                </div>
                
                <div class="form-group form-actions">
                    <div class="col-sm-offset-2 col-sm-10">                        
                        <button type="submit" class="btn btn-success">Simpan Permohonan Izin</button>
                    </div>
                </div>
                   
            </form>
        </div>
        
    </div>
    
</div>

<script type="text/javascript">
	$(function() {
            // Datepicker
	    $('.datepicker').datepicker({
	      	autoclose: true,
                format: 'yyyymmdd'
	    });
	});
</script>

@stop
