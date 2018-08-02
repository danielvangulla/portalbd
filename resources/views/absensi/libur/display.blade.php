@extends('layouts.absensi')
@section('content')
<?php $xurl = \App\AbsensiSetup::url(); ?>
<div class="menubar">
    <div class="sidebar-toggler visible-xs">
        <i class="ion-navicon"></i>
    </div>

    <div class="page-title">
        <b>Daftar Tanggal Merah Kalender</b>
    </div>
	<div class="pull-right">
        <a id="tambah" class="btn btn-md btn-success" href="#" data-target="#form-tambah" data-toggle="modal">Input Baru</a>
    </div>
</div>

<div class="body">
	<h5> >> Sebagai Patokan Hitungan Lembur Tanggal Merah (Khusus Karyawan yang Hadir) << </h5>
	<br/>
	<table id="datatable" class="table table-striped" id="datatable">
		<thead>
			<tr>
				<th style="text-align: center; width: 100px;">No.</th>
				<th style="text-align: center; width: 100px;">Tanggal</th>
				<th style="text-align: left;">Keterangan</th>
				<th style="text-align: right; width: 50px;"></th>
			</tr>
		</thead>
		<tbody>
		<?php $no = 1; ?>
		@foreach($rd as $key => $v)
			<tr>
				<td style="text-align: center">{{ $no }}</td>
				<td style="text-align: center">{{ date('d M Y', strtotime($v->tgl)) }}</td>
				<td style="text-align: left">{{ $v->keterangan }}</td>
				<td>
					<a class="btn btn-xs btn-danger" href="#" onclick="hapus({{ $v->id }})"> <i class="fa fa-trash-o"></i> Hapus</a> 
				</td>
			</tr>
		<?php $no++; ?>
		@endforeach                
		</tbody>
	</table>
</div>

<!-- Form Modal -->
<div class="modal fade" id="form-tambah" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!--form method="post" action="#" role="form"-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">
                        Input Tanggal Merah
                    </h4>
                </div>
                <div class="modal-body form-horizontal">
					<div class="form-group">
						<label class="col-sm-2 col-md-2 control-label">Tanggal</label>
						<div class="col-sm-5 col-md-3">
							<input id="tgl" type="text" class="form-control datepicker" placeholder="" data-provide="datepicker" data-date-format="yyyy-mm-dd"/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 col-md-2 control-label">Keterangan</label>
						<div class="col-sm-5 col-md-9">
							<input class="form-control" id="keterangan" />
						</div>
					</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default hidden" data-dismiss="modal" id="closeModal">Cancel</button>
                    <!--button type="button" class="btn btn-success" id="update">Update</button-->
					<div class="form-group form-actions">
						<div class="col-sm-offset-2 col-sm-10">
							<button class="btn btn-sm btn-success" id="simpan">Simpan!</button>
						</div>
					</div>   
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
	var xurl	= "<?php echo $xurl; ?>";
		
    $(function() {		
		$('#datatable').dataTable({
			"sPaginationType": "full_numbers",
			"iDisplayLength": -1,
			"aLengthMenu": [[5,10,20, 50, 100, -1], [5,10,20, 50, 100, "All"]]
		});
	});
	
    $('#simpan').click( function()
    {
		var tgl = $('#tgl').val();
		var keterangan = $('#keterangan').val();
		if (!keterangan){ 
			alert('Keterangan Harus diisi..'); return;
		}
		
		var red = [{'tgl':tgl, 'keterangan':keterangan}];
		
		$(this).attr('disabled','');
		$.ajax({
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			url:xurl+'libur-save',
			type:'POST',
			data: {'data':red},
			success: function(info) {
				if (info == "ok")
				{
					location.reload();
				}
			}
		});
    });
	
    function hapus(id)
    {
		var app = confirm("Yakin ingin dihapus ?");
		if (app){
			$.ajax({
				headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
				url:xurl+'libur-hapus/'+id,
				type:'GET',
				success: function(info) {
					if (info == "ok")
					{
						location.reload();
					}
				}
			});
		}
    }
	
	$('#tgl').datepicker({
        todayHighlight: true,
        autoclose: true,
        weekStart: 1,
    });
    $("#tgl").datepicker("setDate", new Date());
</script>
@stop