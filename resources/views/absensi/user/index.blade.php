@extends('layouts.search')
@section('content')
<?php $xurl = Setup::url(); ?>
<div class="menubar">
    <div class="sidebar-toggler visible-xs">
        <i class="ion-navicon"></i>
    </div>

    <div class="page-title">
        Daftar User
        <small class="hidden-xs hidden-sm">
            <?php
				$session = Auth::User();
                if (isset($filterValue))
                {
                    echo "Search <strong>". $filterValue ."...</strong>";
                } else 
                {
                    echo "<strong>all</strong>";
                }
            ?>
        </small>
    </div>
@if (Auth::user())
 @if (Auth::user()->level <= 2)
    <div class="options pull-right">
        <a href="user/create"><i class="fa fa-file"></i> Input User Baru</a>
    </div>
 @endif
@endif
</div>

<div class="content-wrapper clearfix">    
    <div class="filters" style="padding-left: 5px;">
        <h3 class="hidden-xs" style="margin-bottom: 0px;">Detail</h3>   
        <h5 class="text-center" style="margin:0px; padding: 0px;" id="detailJudul">-</h5>
        <div class="text-center" id="loading" style="display:none;">
            <image src="{{asset('images/select2-spinner.gif')}}"/>
        </div>
        <br/>
        <hr style="margin-top: 5px; margin-bottom: 5px;"/>
        <div>
            <div class="text-primary">Jabatan</div>
            <label id="jabatan">-</label>
        </div>
        <hr style="margin-top: 5px; margin-bottom: 5px;"/>
		<div>
            <div class="text-primary">Level</div>
            <label id="level">-</label>
        </div>
        <hr style="margin-top: 5px; margin-bottom: 5px;"/>
		<div class="text-center">
            <input type="hidden" id="noref" name="noref"/>
        </div>
        <div class="text-center" style="margin-top: 10px;">
				<button type="button" class="btn btn-sm btn-primary" id="tombolEdit" onclick="editData()">Edit</button>
				<button type="button" class="btn btn-sm btn-danger" id="tombolHapus" onclick="hapusData()">Hapus</button>
        </div>        
        <hr style="margin-top: 5px; margin-bottom: 15px;"/> 
    </div>

    <div class="results">
        @if (Session::has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{ Session::get('message') }}
        </div>        
       @endif
        <div class="row">            
            <div class="col-lg-6" style="float: right;">
                Pencarian User...
                <div class="input-group">
                    <input type="text" class="form-control" id="ket" name="ket">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Go <span class="caret"></span></button>
                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <li><a href="#" onclick="searchValue()">Cari</a></li>
                            <li><a href="#" onclick="displayAll()">Tampilkan Semua</a></li>
                        </ul>
                    </div><!-- /btn-group -->
                </div><!-- /input-group -->
            </div>
        </div>
        <br/>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#ID</th>
                    <th>StandBy Outlet</th>
                    <th>UserName</th>
                    <th>Password</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach($dataUser as $key=>$value)
				<?php
					$outlet = "All Access";
					$outlet = Karyawan::outletCase($value->outlet);
				?>
				@if (Auth::user()->level < $value->level || Auth::user()->id == $value->id)
					@if (Auth::user()->outlet >= 1)
						@if (Auth::user()->outlet == $value->outlet || Auth::user()->id == $value->id)
						@if (Auth::user()->level <= 2)
						<tr onclick="detail({{ $value->id }})">
							<td>{{ $value->id }}</td>
							<td>{{ $outlet }}</td>
							<td>{{ $value->username }}</td>
							<td> - </td>
							<td>{{ $value->nama_karyawan }}</td>
						</tr>
						@endif
						@endif
					@else
						@if (Auth::user()->level <= 2)
						<tr onclick="detail({{ $value->id }})">
							<td>{{ $value->id }}</td>
							<td>{{ $outlet }}</td>
							<td>{{ $value->username }}</td>
							<td>{{ $value->pass }}</td>
							<td>{{ $value->nama_karyawan }}</td>
						</tr>
						@endif
					@endif
				@endif
                @endforeach
            </tbody>
        </table>
    </div>

</div>


<script type="text/javascript">
	var xurl	= "<?php echo $xurl; ?>";
	
    $(function () {
        $("html, body").css('height', '100%');
    });
    
    function displayAll()
    {      
        window.location.href = xurl+"user";
		$("#tombolEdit").hide();
        $("#tombolHapus").hide();
    }
    
    function searchValue()
    {
        ket = $("#ket").val();
        if (!ket) {
            alert('Kolom nilai pencarian harus diisi!....');
            return;
        }
        window.location.href = xurl+"userSearch/"+ket;
		$("#tombolEdit").hide();
        $("#tombolHapus").hide();
    }
	
    function editData()
    {
        xid=$("#noref").val();
        if (!xid) {
            return;
        } else {
           window.location.href = xurl+"user/"+xid+"/edit";
        }
    }
	
	function hapusData()
    {
        xid=$("#noref").val();
        if (!xid) {
            return;
        } else {
			$.ajax({
				url:xurl+'user/'+xid,
				method: 'DELETE',
				success: function(response) {
					window.location.href = xurl+"user";
				}
			});
        }
    }
	
	function warningEditData()
	{
		alert ("Silahkan Login sebagai Manager untuk Edit Data User..");
	}
	
	function warningHapusData()
	{
		alert ("Silahkan Login sebagai Manager untuk menghapus Data User..");
	}
	
	function detail(id)
    {
        $("#loading").show();
        detailKosong();
        $.ajax({
            url:xurl+'user/'+id,
            type:'GET',
            success: function(hasil) {
                $("#detailJudul").html(hasil.username);
                $("#jabatan").html(hasil.jabatan);
                if (hasil.level == -1)
				{
					$("#level").html("Root");
				}
                else if (hasil.level == 0)
				{
					$("#level").html("Administrator");
				}
				else if (hasil.level == 1)
				{
					$("#level").html("Staff HRD");
				}
				else if (hasil.level == 2)
				{
					$("#level").html("Manager");
				}
				else
				{
					$("#level").html("Staff");
				}
				
                $("#noref").val(hasil.id);
                
                $("#tombolEdit").show();
                $("#tombolHapus").show();
                $("#loading").hide();
            }
        })
        
    }
	
	function detailKosong()
    {
        $("#detailJudul").html("-");
        $("#jabatan").val("-");
        $("#level").val("-");
        $("#tombolEdit").hide();
        $("#tombolHapus").hide();
    }
    
</script>

@stop