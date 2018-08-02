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
            <h4>Sanksi SP</h4>
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
            {{ Form::open(array('url' => 'sp', 'role'=>'form','class'=>'form-horizontal')) }}
                <input type="hidden" name="karyawan_id" value="{{ $karyawan->id; }}"/>
                <div class="form-group">
                    <label class="col-sm-2 col-md-2 control-label">Tanggal Input</label>
                    <div class="col-sm-6 col-md-4">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
							<input id="tgl" name="tgl" class="form-control datepicker hidden" placeholder="" data-provide="datepicker" data-date-format="yyyy-mm-dd"/>
							<input id="tglx" name="tglx" class="form-control datepicker" placeholder="" data-provide="datepicker" data-date-format="yyyy-mm-dd" disabled/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-md-2 control-label">Jenis Sanksi</label>
                    <div class="col-sm-6 col-md-4">
                        <select type="text" class="form-control" name="jenis" >
							<option value="1">SP 1</option>
							<option value="2">SP 2</option>
							<option value="3">SP 3</option>
						</select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-md-2 control-label">Pemberi Sanksi SP</label>
                    <div class="col-sm-10 col-md-8">
                        <input class="form-control hidden" rows="4" name="userInput" value="{{ Auth::user()->id }}"/>
                        <select class="form-control" rows="4" name="spBy">
							@foreach ($allKar as $k=>$v)
								<option value="{{ $v->id }}">{{ $v->nama }} - {{ $v->idmesin }} ({{ $v->jabatan->keterangan }})</option>
							@endforeach
						</select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-md-2 control-label">Alasan Sanksi</label>
                    <div class="col-sm-10 col-md-8">
                        <textarea class="form-control" rows="4" name="alasan"></textarea>
                    </div>
                </div>
                <div class="form-group form-actions">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Simpan</button> 
						<b class="text-danger">Harap HATI-HATI, karena setelah di Simpan, Sanksi SP Tidak Bisa dirubah / dibatalkan..!!</b>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div>
	<h4>
		<b>History Sanksi :</b>
		@if (count($sp) > 0)
		(Baris Pertama adalah Sanksi Terakhir)
		@endif
	</h4>
	<table id="datatable" class="table table-striped">
		<thead>
			<tr>
				<th style="text-align: center; width:40px;">No.SP</th>
				<th style="text-align: center; width:100px;">Tgl Sanksi</th>
				<th style="text-align: center; width:100px;">Potongan Ke-</th>
				<th style="text-align: center; width:100px;">Tgl Potongan</th>
				<th style="text-align: center; width:75px;">Jenis</th>
				<th style="text-align: left">Alasan</th>
				<th style="text-align: center; width:100px;">Pemberi SP</th>
				<th style="text-align: center; width:100px;">Berlaku s/d</th>
				<th style="text-align: center; width:100px;">Input By</th>
			</tr>
		</thead>
		<tbody>
			@foreach($sp as $k=>$v)
			<tr>
				<td style="text-align: center">{{ $v->id }}</td>
				<td style="text-align: center">{{ $v->tgl }}</td>
				<td style="text-align: center">{{ $v->pot }}</td>
				<td style="text-align: center">{{ $v->tglpot }}</td>
				<td style="text-align: center">SP {{ $v->jenis }}</td>
				<td style="text-align: left">{{ $v->alasan }}</td>
				<td style="text-align: center">{{ $v->spBy->nama }}</td>
				<td style="text-align: center">{{ $v->berlaku }}</td>
				<td style="text-align: center">{{ $v->userInput->username }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

<script type="text/javascript">
	$(function() {
		// Datepicker
		$('.datepicker').datepicker({
			autoclose: true
		});
	});
	
	$('#tgl, #tglx').datepicker({
        todayHighlight: true,
        autoclose: true,
        weekStart: 1
    });
	$("#tgl, #tglx").datepicker("setDate", new Date());
</script>

@stop
