@extends('layouts.schedule')
@section('content')
<?php $xurl = Setup::url(); ?>
<div class="menubar">
    <div class="sidebar-toggler visible-xs">
        <i class="ion-navicon"></i>
    </div>

    <div class="page-title">
        Schedule / Jadwal Karyawan
    </div>
    <a href="{{ URL::to('karyawan/create') }}" class="btn btn-success pull-right">
        <span>Karyawan Baru</span>
    </a>   
</div>


<div class="content-wrapper">
     
    @if (Session::has('message'))
     <div class="alert alert-success">
         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
         {{ Session::get('message') }}                           
     </div>        
    @endif
    
    <div class="text-center"><h3>{{ $karyawan->nama }}</h3> <input type="hidden" name="karyawan_id" id="karyawan_id" value="{{ $karyawan->id }}"> </div>
    
    <div id="fullcalendar"></div>
	
	<div id="new-event-popup" class="hidden-xs" style="display: none; margin-left: 0px; margin-top: 0px;">
		<div class="pointer">
			<div class="arrow"></div>
			<div class="arrow_border"></div>
		</div>
		<i class="fa fa-times" id="close"></i>
		<h5>Input Jam Kerja</h5>
		
		<div class="field">
			Tanggal : <br/>
			<h4><span id="infoTanggal"></span></h4>
		</div>
		<div class="field">
			Shift:
			<select name="jamkerja" id="jamkerja" class="form-control">
				@foreach ($jamkerja as $v=>$k)
				<option value="{{ $k->id }}" id="{{ $k->id }}">{{ $k->keterangan }}</option>
				@endforeach
			</select> 
		</div>
		<button type="button" class="btn btn-success" id="simpanJadwal">Simpan Jadwal</button>
	</div>
</div>

<script type="text/javascript">
	var xurl	= "<?php echo $xurl; ?>";
	
	$(document).ready(function() {
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
        var id = <?php echo $karyawan->id; ?>;
		
		var calendar = $('#fullcalendar').fullCalendar({
			header: {
				left: '',  // untuk menampilkan month, week and day ganti ke : 'month,agendaWeek,agendaDay'
				center: 'title',
				right: 'today prev,next'
			},
			selectable: true,
			unselectAuto: true,
			selectHelper: true,
			editable: true,
			allDayDefault:false,
			events:xurl+'api/jadwalKaryawan/'+id+'/info',  //location host tidak perlu diinclude, tp dicek untuk server yg lain apakah bermasalah atau tidak
			eventBackgroundColor: '#278ccf',
			select: function(start, end, allDay, resourceId) {
                
				$("#new-event-popup").show("fast");
				var bulan1 = parseInt(start.getMonth())+1;
				var bulan2 = parseInt(end.getMonth())+1;
				bulan1.toString();
				bulan2.toString();
				
				var m = ("0" + start.getDate()).slice(-2)+"-" + ("0" + bulan1).slice(-2) + "-"+start.getFullYear();
				var e = ("0" + end.getDate()).slice(-2)+"-" + ("0" + bulan2).slice(-2) + "-"+end.getFullYear();
				
				$("#infoTanggal").html(m+" s/d "+e);
				xstart = $.fullCalendar.formatDate(start,"yyyy-MM-dd");
				xend = $.fullCalendar.formatDate(end,"yyyy-MM-dd");
				
				$("#simpanJadwal").click(function(e){
					var karyawan_id = $("#karyawan_id").val();
					if (allDay===true) {
						xallDay=1;
					} else {
						xallDay=0;
					}
                    var jamkerja = $("#jamkerja").val();
					var title = $("#"+jamkerja).text();
					var jsonArr = [{'jamkerja':jamkerja, 'start':xstart, 'end': xend, 'allday': xallDay, 'karyawan_id':karyawan_id, 'title':title}];
					
					$.ajax({
						url:xurl+'storeAjaxJadwal',
						type:'POST',
						data:{'data':jsonArr},
						success: function(info) 
						{
							if (info==='berhasil')
							{
								calendar.fullCalendar('renderEvent',
								{
									title:xtitle,
									start:start,
									end:end,
									allDay:allDay,
									resourceId:resourceId
								},true);
							}
							// location.reload();
							$('#fullcalendar').fullCalendar( 'refetchEvents' );
						}
					});
					$("#new-event-popup").fadeOut("fast");
					$('#simpanJadwal').unbind();
				});	
			// calendar.fullCalendar('unselect');
			},
			eventClick: function(event, element) {
				var result = confirm("Hapus "+event.title+" dari jadwal?");
				if (result==true) {
					$.ajax({
						url:xurl+'deleteAjaxJadwal/'+event.id,
						type:'POST',
						data:{_method: 'delete'},
						success: function(info) 
						{
							if (info=='ok')	{
								// alert("Jadwal telah dihapus");
								$('#fullcalendar').fullCalendar( 'refetchEvents' );
							} else {
								alert("Terjadi Kesalahan, Mohon ulangi Kembali");
								$('#fullcalendar').fullCalendar( 'refetchEvents' );
							}
						}
					});
				}					
			},
			unselect: function(){				
                // location.reload();
			}
        });
		
        //script untuk memposisikan baris event-popup
        $(".fc-day").mouseover(function() {
            if ($("#new-event-popup").css('display')==='none') {
                var pos = $(this).position();            
                $("#new-event-popup").css({
                    top: pos.top + "px"
                }); 
            }                       
        });
        //-------------------------------------------
        
        //script outside div new-event-popup auto close
        $(document).mouseup(function (e)
        {
            var container = $("#new-event-popup");
            if (!container.is(e.target) // if the target of the click isn't the container...
                && container.has(e.target).length === 0) // ... nor a descendant of the container
            {
                container.fadeOut("fast");
                calendar.fullCalendar('unselect');
				$('#simpanJadwal').unbind();
            }
        });
        //---------------------------------------------        
       
        // handler to close the new event popup just for displaying purposes       
        $("#close").click(function() {
            $("#new-event-popup").fadeOut("fast");
            calendar.fullCalendar('unselect');
			$('#simpanJadwal').unbind();
        });
    });
</script>

@stop