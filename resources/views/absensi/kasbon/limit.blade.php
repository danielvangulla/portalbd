@extends('layouts.schedule')
@section('content')
<?php $xurl = Setup::url(); ?>
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
            <h4>Pengaturan Limit Kasbon</h4>
            <div class="row">
                <div class="col col-md-10">
                    <table>
                        <tr>
                            <td style="width: 100px;"><strong>Karyawan</strong></td>
                            <td><strong>: {{ $karyawan->nama }}</strong></td>
                        </tr>
                        <tr>
                            <td style="width: 100px;">Departemen</td>
                            <td>: {{ $karyawan->departemen->keterangan }}</td>
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
			<form class="form-horizontal" action="{{ $xurl }}limitKasbonSave" method="POST">
                <input type="hidden" name="karyawan_id" value="{{ $karyawan->id }}"/>
                
                <div class="form-group">
                    <label class="col-sm-2 col-md-2 control-label">Formula Limit</label>
                    <div class="col-sm-6 col-md-10">
                        <input type="text" class="form-control" name="formula" value="{{ $formula }}" placeholder="Kode Komponen / Angka"/>
                    </div>
                </div>
				<div class="form-group" style="margin-top:-20px; color:red;">
                    <label class="col-sm-2 col-md-2 control-label"></label>
                    <div class="col-sm-6 col-md-4">
                        <span>* Harap menggunakan <b>SPASI</b> sebagai pemisah..!!</span>
                    </div>
					<div class="col-sm-6 col-md-4">
						<?php
							if (count($komponen1)>0) { $contoh = $komponen1[0]->kode; } else { $contoh = Gaji; }
						?>
                        <span>Contoh : <b> ( {{$komponen1[0]->kode}} * 2 ) + 250000</b></span>
                    </div>
                </div>
                <div class="form-group form-actions">
                    <div class="col-sm-offset-2 col-sm-10">                        
                        <button type="submit" class="btn btn-sm btn-success">Simpan Limit</button>
                    </div>
                </div>
                   
            </form>
        </div>
    </div>
	<div class="form-horizontal">
		<h4>Daftar Kode Komponen :</h4>
		<div class="form-group">
			<div class="col-sm-1 col-md-6">
				<div class="form-horizontal">
					@foreach ($komponen1 as $key=>$a)
					<div class="form-group">
						<div class="col-sm-6 col-md-1">
						</div>
						<div class="col-sm-6 col-md-2">
							{{ $a->kode }}
						</div>
						<div class="col-sm-6 col-md-3">
							: {{ $a->keterangan }}
						</div>
					</div>
					@endforeach
				</div>
			</div>
			<div class="col-sm-6 col-md-6">
				<div class="form-horizontal">
					@foreach ($komponen2 as $key=>$a)
					<div class="form-group">
						<div class="col-sm-6 col-md-2">
							{{ $a->kode }}
						</div>
						<div class="col-sm-6 col-md-4">
							: {{ $a->keterangan }}
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>    
</div>

<script type="text/javascript">
	$(function() {
	    $('.datepicker').datepicker({
	      	autoclose: true
	    });
	});
</script>

@stop
