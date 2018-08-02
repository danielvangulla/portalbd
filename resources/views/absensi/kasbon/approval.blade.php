@extends('layouts.none')
@section('content')
<?php $xurl = Setup::url(); ?>
<div class="menubar">
    <div class="sidebar-toggler visible-xs">
        <i class="ion-navicon"></i>
    </div>

    <div class="page-title">
        <b>Pengajuan Kasbon Karyawann</b>
    </div>    
</div>
<div class="profile-content">
	<div class="tabs">
		<ul class="nav nav-tabs" role="tablist">
		  <li class="active"><a href="#tab1" role="tab" data-toggle="tab">Waiting List</a></li>
		  <li><a href="#tab2" role="tab" data-toggle="tab">Disetujui</a></li>
		  <li><a href="#tab3" role="tab" data-toggle="tab">Ditolak</a></li>
		</ul>
	</div>
</div>
<div class="body">
	<div id="myTabContent" class="tab-content">
		<div class="tab-pane fade in active" id="tab1"><br/>
			<table id="datatable1" class="table table-striped">
				<thead>
					<tr>
						<th style="text-align: center">No</th>
						<th style="text-align: center">Tanggal</th>
						<th style="text-align: left">Nama</th>
						<th style="text-align: left">Jenis</th>
						<th style="text-align: right">Jumlah Rp.</th>
						<th style="text-align: center">Act</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$br=0;
					?>
					@foreach($data as $key => $a)			
					<?php 
						$br++;
						$jenis = "Permintaan Kasbon";
						$jumlah = $a->debet;
						if($a->kredit>0){
							$jenis = "Pengembalian";
							$jumlah = $a->kredit;
						}
					?>
					<tr>
						<td style="text-align: center">{{ $br }}</td>
						<td style="text-align: center">{{ $a->tgl }}</td>
						<td style="text-align: left">{{ $a->karyawan }}</td>
						<td style="text-align: left">{{ $jenis }}</td>
						<td style="text-align: right">{{ number_format($jumlah) }}</td>
						<td style="text-align: center">                           
							<a class="btn btn-xs btn-success" href="#" onclick="approve({{ $a->id }})"> <i class="fa fa-edit"></i> Approve</a> 
							<a class="btn btn-xs btn-danger" href="#" onclick="batal({{ $a->id }})"> <i class="fa fa-trash-o"></i> Tolak</a> 
						</td>
					</tr>
					@endforeach                
				</tbody>
			</table>
		</div>
		<div class="tab-pane fade in" id="tab2"><br/>
			<table id="datatable2" class="table table-striped">
				<thead>
					<tr>
						<th style="text-align: center">No</th>
						<th style="text-align: center">Tanggal</th>
						<th style="text-align: left">Nama</th>
						<th style="text-align: left">Jenis</th>
						<th style="text-align: right">Jumlah Rp.</th>
						<th style="text-align: center">By</th>
						<th style="text-align: center">Approve</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$br=0;
					?>
					@foreach($setuju as $key => $a)			
					<?php 
						$br++;
						$jenis = "Permintaan Kasbon";
						$jumlah = $a->debet;
						if($a->kredit>0){
							$jenis = "Pengembalian";
							$jumlah = $a->kredit;
						}
					?>
					<tr>
						<td style="text-align: center">{{ $br }}</td>
						<td style="text-align: center">{{ $a->tgl }}</td>
						<td style="text-align: left">{{ $a->karyawan }}</td>
						<td style="text-align: left">{{ $jenis }}</td>
						<td style="text-align: right">{{ number_format($jumlah) }}</td>
						<td style="text-align: center">{{ $a->approveby }}</td>
						<td style="text-align: center">{{ $a->tglapprove }}</td>
					</tr>
					@endforeach                
				</tbody>
			</table>
		</div>
		<div class="tab-pane fade in" id="tab3"><br/>
			<table id="datatable3" class="table table-striped">
				<thead>
					<tr>
						<th style="text-align: center">No</th>
						<th style="text-align: center">Tanggal</th>
						<th style="text-align: left">Nama</th>
						<th style="text-align: left">Jenis</th>
						<th style="text-align: right">Jumlah Rp.</th>
						<th style="text-align: center">By</th>
						<th style="text-align: center">Reject</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$br=0;
					?>
					@foreach($tolak as $key => $a)			
					<?php
						$br++;
						$jenis = "Permintaan Kasbon";
						$jumlah = $a->debet;
						if($a->kredit>0){
							$jenis = "Pengembalian";
							$jumlah = $a->kredit;
						}
					?>
					<tr>
						<td style="text-align: center">{{ $br }}</td>
						<td style="text-align: center">{{ $a->tgl }}</td>
						<td style="text-align: left">{{ $a->karyawan }}</td>
						<td style="text-align: left">{{ $jenis }}</td>
						<td style="text-align: right">{{ number_format($jumlah) }}</td>
						<td style="text-align: center">{{ $a->approveby }}</td>
						<td style="text-align: center">{{ $a->tglapprove }}</td>
					</tr>
					@endforeach                
				</tbody>
			</table>
		</div>
	<div>
</div>

<script type="text/javascript">
	var xurl	= "<?php echo $xurl; ?>";
	
    $(function () {
        $("html, body").css('height', '100%');                
    });
	$(function() {
		$('#datatable1, #datatable2, #datatable3').dataTable({
			"sPaginationType": "full_numbers",
			"iDisplayLength": 10,
					"aLengthMenu": [[5,10,20, 50, 100, -1], [5,10,20, 50, 100, "All"]]
		});
	});
    
    function approve(id)
    {
		$a = confirm("Apakah akan di Setujui ?");		
		if ($a){
			$.ajax({
				url:xurl+'kasbon-approve/'+id,
				type:'GET',
				success: function(info) {
					if (info==="ok")
					{
						location.reload();
					}
				}
			});
		}
        
    }
    
    function batal(id)
    {
        $a = confirm("Pengajuan kasbon ditolak ?");		
		if ($a){
			$.ajax({
				url:xurl+'kasbon-tolak/'+id,
				type:'GET',
				success: function(info) {
					if (info==="ok")
					{
						location.reload();
					}
				}
			});
		}
    }
    
    
</script>


@stop