@extends('layouts.absensi')
@section('content')

<div class="menubar">
    <div class="sidebar-toggler visible-xs">
        <i class="ion-navicon"></i>
    </div>

    <div class="page-title">
        <span>Detail Group Gaji, </span> <b><span style="margin-left:10px;">{{ $group->keterangan }}</span></b>
    </div>
    <!--a href="/payrollwapo/public/group-detail/create" class="btn btn-success pull-right">
        <span>Tambah Data</span>
    </a-->
	<a id="tambah" class="btn btn-success pull-right" href="#" data-target="#form-tambah" data-toggle="modal"> Tambah Komponen </a>	
</div>

<div class="body">
	<br/>
	<table id="datatable" class="table table-condensed">
		<thead>
			<tr>
				<th tabindex="0" rowspan="1" colspan="1" style="text-align: center">#ID</th>
				<th tabindex="0" rowspan="1" colspan="1" style="text-align: center">Group</th>
				<th tabindex="0" rowspan="1" colspan="1" style="text-align: left">Keterangan Komponen</th>
				<th tabindex="0" rowspan="1" colspan="1" style="text-align: center">Formula</th>   
				<th tabindex="0" rowspan="1" colspan="1" style="text-align: center">Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($groupd as $key => $value)
			<tr>
				<td align="center">{{ $value->komponengaji_id }}</td>
				<td align="center">{{ $value->komponengaji->kode }}</td>
				<td align="left">{{ $value->komponengaji->keterangan }}</td>
				<td align="center">{{ $value->formula }}</td>
				<td align="center">
					{{ Form::open(array('url' => '/absensi/group-penghasilan/' . $value->id, 'class' => '')) }}
						{{Form::hidden('_method', 'DELETE') }}
						{{Form::submit('Hapus', array('class' => 'btn btn-xs btn-danger','style'=>'margin-right:0px;')) }}
					{{Form::close() }}
				</td>                       
			</tr>
			@endforeach                
		</tbody>
	</table>
</div>
<br><br>
<div class="form-horizontal" style="border:1px solid grey; text-align:left">
	<h4>Daftar Kode Formula yang dapat digunakan :</h4>
	<h4><b>$PS</b> :Potongan Sakit (hari) </h4>
	<h4><b>$PI</b> :Potongan Izin (hari) </h4>
	<h4><b>$PA</b> :Potongan Alpa (hari) </h4>
	<h4><b>$PT</b> :Potongan Telat (hari) </h4>
	<h4><b>$PPA</b> :Pot. Pulang Awal (hari) </h4>
</div>
<!-- Form Modal -->
<div class="modal fade" id="form-tambah" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!--form method="post" action="#" role="form"-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">
                        Tambah Komponen,<b style="margin-left:10px;">{{ $group->keterangan }}</b>
                    </h4>
                </div>
                <div class="modal-body">
					{{ Form::open(array('url' => '/absensi/group-detail/store','class'=>'form-horizontal','role'=>'form')) }}
						<div class="form-group">
							<label class="col-sm-2 col-md-2 control-label">Komponen</label>
							<div class="col-sm-5 col-md-6">
								{{ Form::select('komponengaji_id',$komponen, Input::old('komponengaji_id'), array('class'=>'form-control')) }}
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 col-md-2 control-label">Formula</label>
							<div class="col-sm-5 col-md-9">
								{{ Form::text('formula', Input::old('formula'), array('placeholder' => 'Formula','class'=>'form-control')) }}
								{{ Form::text('groupgaji_id', $group->id, array('class'=>'form-control hidden')) }}
							</div>
						</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default hidden" data-dismiss="modal" id="closeModal">Cancel</button>
                    <!--button type="button" class="btn btn-success" id="update">Update</button-->
					<div class="form-group form-actions">
						<div class="col-sm-offset-2 col-sm-10">
							{{ Form::submit('Simpan!', array('class' => 'btn btn-success')) }}       
						</div>
					</div>   
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function () {
        $("html, body").css('height', '100%');                
    });
    
	$(function() {
		$('#datatable').dataTable({
			"sPaginationType": "full_numbers",
			"iDisplayLength": 10,
			"aLengthMenu": [[5,10,20, 50, 100, -1], [5,10,20, 50, 100, "All"]]
		});
	});
</script>
@stop