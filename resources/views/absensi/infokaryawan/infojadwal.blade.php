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
			eventBackgroundColor: '#278ccf'
        });
    });
</script>

@stop