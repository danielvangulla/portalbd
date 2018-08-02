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
            <h4>Pengaturan Departemen</h4>
        </div>
        
        <div class="panel-body">            
            <div class="row">
                <div class="col-md-3" style="border-right: 1px #ddd solid;">
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="{{ $xurl.'pengaturan-jabatan' }}"><h4 style="font-size: 16px; margin-top: 0px; margin-bottom: 0px; color: black; font-weight: 300;">Data Jabatan</h4></a></li>
                    <li class="active"><a href="{{ $xurl.'pengaturan-departemen' }}"><h4 style="font-size: 16px; margin-top: 0px; margin-bottom: 0px; color: black; font-weight: 300;">Departemen</h4></a></li>
                    </ul>
                </div>
                <div class="col-md-9">
                    <table class="table table-striped">
					<a href="#" class="btn btn-primary" onclick="displayInput()">+ Departemen</a>
                    <div class="row" id="formInput" style="display: none;">    
                        @if (count($errors->all())>0)
                        <div class="alert alert-warning">
                           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                           <!-- if there are creation errors, they will show here -->
                           {{ HTML::ul($errors->all()) }}                         
                        </div>        
                       @endif
                        {{ Form::open(array('url' => 'pengaturan-departemen-store', 'role'=>'form','class'=>'form-horizontal')) }} 
                        <div class="form-group">
                            <label class="col-sm-2 col-md-2 control-label">Keterangan</label>
                            <div class="col-sm-10 col-md-8">
                                <input type="text" class="form-control" name="keterangan" />
                            </div>
                        </div>
                        <div class="form-group form-actions">
                            <div class="col-sm-offset-2 col-sm-10">
                                {{ Form::submit('Simpan Departemen!', array('class' => 'btn btn-primary')) }}       
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
                        {{ Form::open(array('url' => 'pengaturan-departemen-edit', 'role'=>'form','class'=>'form-horizontal')) }} 
                        <input type="hidden" name="edepartemen_id" id="edepartemen_id" />
                        <div class="form-group">
                            <label class="col-sm-2 col-md-2 control-label">Keterangan</label>
                            <div class="col-sm-10 col-md-8">
                                <input type="text" class="form-control" name="eketerangan" id="eketerangan" />
                            </div>
                        </div>
                        <div class="form-group form-actions">
                            <div class="col-sm-offset-2 col-sm-10">
                                {{ Form::submit('Update Departemen!', array('class' => 'btn btn-warning')) }}       
                            </div>
                        </div>                        
                        </form>
                    </div>
					<br>
					@if (count($departemen) > 0)
                        @foreach($departemen as $v=>$k)
                        <tr>
                            <td style="width: 90%;">
                                <h4>{{ $k->keterangan }}</h4>
                                <ul>
                                    @foreach($k->departemensub as $vv=>$kk)
                                    <li><a href="#" data-toggle="modal" data-target="#prompt-modal" onclick="clickSubDepartemen({{ $kk->id }},'{{ $kk->keterangan }}','{{ $k->keterangan }}')"> {{$kk->keterangan}} </a></li>
                                    @endforeach
									<a href="#" class="btn btn-xs btn-info" data-toggle="modal" data-target="#prompt-modal-isiSubDepartemen" onclick="clickSubDepartemenInput({{ $k->id }},'{{ $k->keterangan }}')">+ Sub Departemen</a>
                                </ul>
                            </td>
                            <td style="width: 5%;"><div class="text-right"><a href="#" class="btn btn-sm btn-warning" onclick="displayEdit({{ $k->id }},'{{ $k->keterangan }}')"> <i class="fa fa-edit"></i> </a></div></td>
                            <td style="width: 5%;"><div class="text-right"><a href="#" class="btn btn-sm btn-danger" onclick="hapus({{ $k->id }},'{{ $k->keterangan }}')"> <i class="fa fa-eraser"></i> </a></div></td>
                        </tr>
                        @endforeach
					@endif
                    </table>
					
                </div>
            </div>           
        </div>
    </div>
    
</div>

<!-- Prompt Modal -->
<div class="modal fade" id="prompt-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            {{ Form::open(array('url' => 'pengaturan-subdepartemen-edit', 'role'=>'form','class'=>'form-horizontal')) }} 
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="departemensub_id" name="departemensub_id" />
                    <div class="form-group">
                        <label>Sub Departemen :</label>
                        <input type="text" class="form-control" id="subdepartemen" name="subdepartemen" />
                    </div>
                </div>
                <div class="modal-footer">                    
                    <button type="button" class="btn btn-danger" onclick="hapusSubDepartemen()">Hapus</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Prompt Modal 2 Insert Sub Departemen -->
<div class="modal fade" id="prompt-modal-isiSubDepartemen" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            {{ Form::open(array('url' => 'pengaturan-subdepartemen-store', 'role'=>'form','class'=>'form-horizontal')) }} 
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel2">Modal title</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="departemen_id2" name="departemen_id2" />
                    <div class="form-group">
                        <label>Sub Departemen :</label>
                        <input type="text" class="form-control" id="subdepartemen2" name="subdepartemen2" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>                    
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script type="text/javascript">
	var xurl	= "<?php echo $xurl; ?>";
	
    $(function() {
        // Focus input when prompt modal is shown
        $('#prompt-modal').on('shown.bs.modal', function (e) {
                $("#prompt-modal").find("input:text").focus();
        })
        
        // Focus input when prompt modal is shown
        $('#prompt-modal-isiSubDepartemen').on('shown.bs.modal', function (e) {
                $("#prompt-modal-isiSubDepartemen").find("input:text").focus();
        })
    });
    
    function clickSubDepartemen($id,$ket,$departemen)
    {
        $("#myModalLabel").html($departemen);
        $("#departemensub_id").val($id);
        $("#subdepartemen").val($ket);
    }
    
    function clickSubDepartemenInput($id,$departemen)
    {
        $("#myModalLabel2").html($departemen);
        $("#departemen_id2").val($id);
        $("#subdepartemen2").val("");
    }
    
    function displayInput()
    {
        $("#formInput").show();
        $("#formEdit").hide();
    }
    
    function displayEdit(id,keterangan)
    {
        $("#edepartemen_id").val(id);
        $("#eketerangan").val(keterangan)
        $("#formEdit").show();
		$("#formInput").hide();
    }
    
    function hapus(id,keterangan)
    {
        var r = confirm("Hapus data : "+keterangan);
        if (r==true) {
            $.ajax({
                url:xurl+'pengaturan-departemen-hapus/'+id,
                type:'GET',
                success: function(info) {
                    location.reload();
                }
            })
        }
    }
    
    function hapusSubDepartemen()
    {
        keterangan = $("#subdepartemen").val();
        var r = confirm("Hapus data : "+keterangan);
        if (r==true) {
            id=$("#departemensub_id").val();
            $.ajax({
                url:xurl+'pengaturan-subdepartemen-hapus/'+id,
                type:'GET',
                success: function(info) {
                    location.reload();
                }
            })
        }        
    }
</script>

@stop
