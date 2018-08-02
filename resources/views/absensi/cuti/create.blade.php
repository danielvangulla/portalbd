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
            <h4>Input Permohonan Cuti (Periode {{ $period }})</h4>
            <div class="row">
                <div class="col col-md-6">
                    <table>
                        <tr>
                            <td style="width: 150px;"><b>Karyawan</b></td>
                            <td><b>: {{ $karyawan->nama }}</b></td>
                        </tr>
                        <tr>
                            <td style="width: 150px;"><b>Departemen</b></td>
                            <td><b>: {{ $karyawan->departemen->keterangan }}</b></td>
                        </tr>
                        <tr>
                            <td style="width: 150px;">Telah Diambil </td>
                            <td>: {{ $ct }} Hari</td>
                        </tr>
                        <tr>
                            <td style="width: 150px;">Sisa Tahunan </td>
                            <td>: <b>{{ $sisatahun }} Hari</b></td>
                        </tr><br>
                        <tr>
                            <td style="width: 180px;"><b><span style="color:red;">Yang Bisa Diambil Bulan ini<span></b></td>
                            <td><b><span style="color:red;">: {{ $sisabulan }} Hari</span></b></td>
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
            {{ Form::open(array('url' => 'cuti', 'role'=>'form','class'=>'form-horizontal')) }}            
                <input type="hidden" name="karyawan_id" value="{{ $karyawan->id; }}"/>
                
                <div class="form-group">
                    <label class="col-sm-2 col-md-2 control-label">Cuti</label>
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
						<input id="sisa" name="sisa" type="text" class="form-control hidden" value="{{ $sisabulan }}"/>
                    </div>
                </div>

                <div class="form-group form-actions">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button id="submit" type="submit" class="btn btn-success">Simpan Permohonan Cuti</button>
                    </div>
                </div>
                   
            </form>
        </div>
    </div>
</div>
<div>
	<h4>
		<b>History Cuti :</b>
	</h4>
	<table id="datatable" class="table table-striped">
		<thead>
			<tr>
				<th style="text-align: center; width:40px;">ID</th>
				<th style="text-align: center; width:100px;">Mulai</th>
				<th style="text-align: center; width:100px;">Selesai</th>
				<th style="text-align: center; width:100px;">Total</th>
				<th style="text-align: left">Alasan</th>
			</tr>
		</thead>
		<tbody>
			@foreach($history as $k=>$v)
			<tr>
				<td style="text-align: center">{{ $v->id }}</td>
				<td style="text-align: center">{{ $v->mulai }}</td>
				<td style="text-align: center">{{ $v->selesai }}</td>
				<td style="text-align: center">{{ $v->totalhari }} Hari</td>
				<td style="text-align: left">{{ $v->keterangan }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
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
