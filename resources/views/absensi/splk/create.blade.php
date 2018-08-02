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
            <h4>Surat Perintah Lembur Khusus</h4>
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
            {{ Form::open(array('url' => 'splk', 'role'=>'form','class'=>'form-horizontal')) }}            
                <input type="hidden" name="karyawan_id" value="{{ $karyawan->id; }}"/>
                <div class="form-group">    
                    <label class="col-sm-2 col-md-2 control-label">Tanggal</label>
                    <div class="col-sm-6 col-md-4">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
							<input id="tgl" name="tgl" class="form-control datepicker" placeholder="" data-provide="datepicker" data-date-format="yyyy-mm-dd"/>
                        </div>
                    </div>                    
                </div>  
                
                <div class="form-group">
                    <label class="col-sm-2 col-md-2 control-label">Total Jam</label>
                    <div class="col-sm-6 col-md-4">
                        <input type="text" class="form-control" name="totaljam" />
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
                        <button type="submit" class="btn btn-success">Simpan</button>
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
	      	autoclose: true
	    });
	});
		
	$('#tgl').datepicker({      
        todayHighlight: true,
        autoclose: true,
        weekStart: 1
    });
</script>

@stop
