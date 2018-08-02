@extends('layouts.absensi')
@section('content')
<?php $xurl = \App\AbsensiSetup::url() ?>
<div class="menubar">
    <div class="sidebar-toggler visible-xs">
        <i class="ion-navicon"></i>
    </div>
    <div class="page-title">
        Pengaturan Aplikasi
    </div>    
</div>

<div class="content-wrapper">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>Pengaturan Jabatan</h4>
        </div>
        
        <div class="panel-body">            
            <div class="row">
                <div class="col-md-3" style="border-right: 1px #ddd solid;">
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="{{ $xurl.'pengaturan-jabatan' }}"><h4 style="font-size: 16px; margin-top: 0px; margin-bottom: 0px; color: black; font-weight: 300;">Data Jabatan</h4></a></li>
                    <li><a href="{{ $xurl.'pengaturan-departemen' }}"><h4 style="font-size: 16px; margin-top: 0px; margin-bottom: 0px; color: black; font-weight: 300;">Departemen</h4></a></li>                    
                    </ul>
                </div>
                <div class="col-md-9">
                    <table class="table table-hover">
					@if (count($jabatan) > 0)
                        @foreach($jabatan as $v=>$k)
                        <tr>
                            <td style="width: 90%;"><h4>{{ $k->keterangan }}</h4></td>
                            <td style="width: 5%;"><div class="text-right"><a href="#" class="btn btn-sm btn-warning" onclick="displayEdit({{ $k->id }},'{{ $k->keterangan }}')"> <i class="fa fa-edit"></i> </a></div></td>
                            <td style="width: 5%;"><div class="text-right"><a href="#" class="btn btn-sm btn-danger" onclick="hapus({{ $k->id }},'{{ $k->keterangan }}')"> <i class="fa fa-eraser"></i> </a></div></td>
                        </tr>
                        @endforeach
					@endif
                    </table>
                    <table class="table table-striped">
                        <tr>
                            <td>
                                <a href="#" class="btn btn-primary" onclick="displayInput()">+ Tambah Data</a>
                            </td>
                        </tr>
                    </table>
                                        
                    <div class="row" id="formInput" style="display: none;">    
                        @if (count($errors->all())>0)
                        <div class="alert alert-warning">
                           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                           <!-- if there are creation errors, they will show here -->
                           {{ HTML::ul($errors->all()) }}                         
                        </div>        
                       @endif
                        {{ Form::open(array('url' => 'pengaturan-jabatan-store', 'role'=>'form','class'=>'form-horizontal')) }} 
                        <div class="form-group">
                            <label class="col-sm-2 col-md-2 control-label">First name</label>
                            <div class="col-sm-10 col-md-8">
                                <input type="text" class="form-control" name="keterangan" />
                            </div>
                        </div>
                        <div class="form-group form-actions">
                            <div class="col-sm-offset-2 col-sm-10">
                                {{ Form::submit('Simpan Jabatan!', array('class' => 'btn btn-success')) }}       
                            </div>
                        </div>                        
                        </form>
                    </div>
                    
                    <div class="row" id="formEdit" style="display: none;">    
                        @if (count($errors->all())>0)
                        <div class="alert alert-warning">
                           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                           <!-- if there are creation errors, they will show here -->
                           {{ HTML::ul($errors->all()) }}                         
                        </div>        
                       @endif
                        {{ Form::open(array('url' => 'pengaturan-jabatan-edit', 'role'=>'form','class'=>'form-horizontal')) }} 
                        <input type="hidden" name="ejabatan_id" id="ejabatan_id" />
                        <div class="form-group">
                            <label class="col-sm-2 col-md-2 control-label">First name</label>
                            <div class="col-sm-10 col-md-8">
                                <input type="text" class="form-control" name="eketerangan" id="eketerangan" />
                            </div>
                        </div>
                        <div class="form-group form-actions">
                            <div class="col-sm-offset-2 col-sm-10">
                                {{ Form::submit('Edit Jabatan!', array('class' => 'btn btn-success')) }}       
                            </div>
                        </div>                        
                        </form>
                    </div>
                </div>
            </div>           
        </div>
    </div>
    
</div>

<script type="text/javascript">
	var xurl	= "<?php echo $xurl; ?>";
    
    function displayInput() {
        $("#formInput").show();
    }
    
    function displayEdit(id,keterangan) {
        $("#ejabatan_id").val(id);
        $("#eketerangan").val(keterangan)
        $("#formEdit").show();
    }
    
    function hapus(id,keterangan) {
        var r = confirm("Hapus data : "+keterangan);
        if (r==true) {
            $.ajax({
                url:xurl+'pengaturan-jabatan-hapus/'+id,
                type:'GET',
                success: function(info) {
                    location.reload();
                }
            })
        }
    }
</script>

@stop
