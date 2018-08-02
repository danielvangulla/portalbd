@extends('layouts.absensi')
@section('content')
<?php $xurl = \App\AbsensiSetup::url(); ?>
<div class="menubar">
    <div class="sidebar-toggler visible-xs">
        <i class="ion-navicon"></i>
    </div>

    <div class="page-title">
        <b>Data Karyawan</b>
    </div>
	@if (Auth::user()->level<=1)
    <a href="{{ $xurl.'karyawan/create' }}" class="btn btn-success pull-right">
        <span>Karyawan Baru</span>
    </a>
	@endif
</div>

<div class="body">
	<br/>
	<table id="datatable" class="table table-striped">
		<thead>
			<tr>
				<th class="text-center">No</th>
				<th class="text-center">#Fin</th>
				<th>Nama</th>
				<th>Jabatan</th>
				<th colspan="2" class="text-center">Action</th>
			</tr>
		</thead>
		<tbody>
		@if (count($karyawan) > 0)
			@foreach($karyawan as $key => $value)
			<tr>
				<td class="text-center">{{ $value->id }}</td>
				<td class="text-center">{{ $value->idmesin }}</td>
				<td>{{ $value->nama }}</td>
				
				<td>{{ $value->jabatan->keterangan }}</td>

				<td style="width: 100px;">
					<div class="dropdown">
						<button class="btn btn-sm btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Pengajuan
							<span class="caret"></span></button>
						<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">						
						@if (Auth::user()->level <=3)
							<li role="presentation"><a role="menuitem" tabindex="-1" href="{{ $xurl.'jadwal/'.$value->id.'/info' }}">Jadwal Kerja</a></li>
							<li role="presentation" class="divider"></li>
							<!--li role="presentation"><a role="menuitem" tabindex="-1" href="{{ $xurl.'limitKasbon/'.$value->id }}">Limit Kasbon</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="{{ $xurl.'prosesKasbon/'.$value->id }}">Proses Kasbon</a></li-->
							<!--li role="presentation" class="divider"></li-->
							<li role="presentation"><a role="menuitem" tabindex="-1" href="{{ $xurl.'spl/'.$value->id }}">Surat Lembur</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="{{ $xurl.'splk/'.$value->id }}">Surat Lembur Khusus</a></li>
							<li role="presentation" class="divider"></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="{{ $xurl.'ijintelat/'.$value->id }}">Ijin Datang Telat</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="{{ $xurl.'ijinpulang/'.$value->id }}">Ijin Pulang Awal</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="{{ $xurl.'dinas/'.$value->id }}">Dinas Luar</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="{{ $xurl.'exc/'.$value->id }}">Pengecualian Lupa Finger</a></li>
							<li role="presentation" class="divider"></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="{{ $xurl.'cuti/'.$value->id }}">Cuti</a></li>
							<!--li role="presentation"><a role="menuitem" tabindex="-1" href="{{ $xurl.'izin/'.$value->id }}">Izin Tidak Kerja</a></li-->
							<li role="presentation"><a role="menuitem" tabindex="-1" href="{{ $xurl.'sakit/'.$value->id }}">Surat Keterangan Sakit</a></li>
							
							<li role="presentation" class="divider"></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="{{ $xurl.'sp/'.$value->id }}">Sanksi SP</a></li>
							
							<!--li role="presentation" class="divider"></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="{{ $xurl.'note/'.$value->id }}">Emergency Schedule</a></li-->
						@endif
						</ul>
					</div>
				</td>

				<td style="width:80px;">
					<span class="paging">
						<a class="btn btn-xs btn-default" href="{{ $xurl.'karyawan/' . $value->id . '/edit' }}"> <i class="fa fa-edit"></i></a>
						<a class="btn btn-xs btn-warning" href="#" onclick="hapus({{$value->id}},'{{$value->nama}}','{{$value->idmesin}}')"> <i class="fa fa-trash-o"></i></a>
					</span>
				</td>
			</tr>
			@endforeach
		@endif
		</tbody>
	</table>
</div>
<!-- Form Modal -->
<div class="modal fade" id="form-modalperiode" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!--form method="post" action="#" role="form"-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">
                        Pindah Outlet<b style="margin-left:10px;"></b>
                    </h4>
                </div>
                <div class="modal-body">
					<div class="form-group">
						<label class="col-sm-2 col-md-3 control-label"> Pilih Outlet <span id="xnama">-</span></label>
						<div class="col-sm-5 col-md-4">
							{{ Form::select('out',$outlet,Input::old('out'),array('class'=>'form-control','id'=>'out')) }}
						</div>
					</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default hidden" data-dismiss="modal" id="closeModal">Cancel</button>
                    <!--button type="button" class="btn btn-success" id="update">Update</button-->
					<div class="form-group form-actions">
						<div class="col-sm-offset-2 col-sm-10">
							<button id="proses" type="button" class="btn btn-sm btn-success" onclick="gantiOutlet()">Proses!</button>
						</div>
					</div>   
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
	var xurl	= "<?php echo $xurl; ?>";
	
	var id		= 0;
	
    $(function () {
        $("html, body").css('height', '100%');
    });
    
	$(function() {
		$('#datatable').dataTable({
			"sPaginationType": "full_numbers",
			"iDisplayLength": 5,
			"aLengthMenu": [[5,10,20, 50, 100, -1], [5,10,20, 50, 100, "All"]]
		});
	});
	
	function hapus(id,nama,idmesin)
	{
		var con = confirm("Ingin menghapus Data "+nama+"-"+idmesin+" ?");
		
		if (con){
			$.ajax({
				url:xurl+'karyawan-hapus/'+id,
				type:'GET',
				success: function(info) {
					if (info!="error")
					{
						alert('Data Karyawan '+info+' telah dihapus !');
						location.reload();
					}
				}
			});
		}
	}
	
	function gantiOutlet()
	{
		var out	= $('#out').val();
		$('#proses').attr('disabled','');
		
		$.ajax({
			url:xurl+'karyawan-outlet/'+id+'/'+out,
			type:'GET',
			success: function(info) {
				if (info!="error") {
					alert('Data Outlet '+info+' telah dirubah !');
					location.reload();
				} else {
					alert('Error..!!');
					$('#proses').removeAttr('disabled');
				}
			}
		});
	}
	
	function editx(idx,nama)
	{
		id	= idx;
		$('#xnama').val(nama);
		$('#editOutlet').click();
	}
</script>
@stop