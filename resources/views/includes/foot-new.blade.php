
    <script src="{{ URL::asset('medi+/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ URL::asset('medi+/js/popper.min.js') }}"></script>
    <script src="{{ URL::asset('medi+/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('medi+/js/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('medi+/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ URL::asset('medi+/js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ URL::asset('medi+/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ URL::asset('medi+/js/main.js') }}"></script>
	
	
	<script>
		 
		$('#profilmdo').click(function (){
			$('#embed').attr('src',window.location.origin+"/profil-manado")
		});
		
		$('#kemiskinan').click(function (){
			$('#embed').attr('src',window.location.origin+"/bencana/kemiskinan");
		});
		
		$('#rpk').click(function (){
			$('#embed').attr('src',window.location.origin+"/penduduk/lingkungan");
		});
		
		$('#sfjalan').click(function (){
			$('#embed').attr('src',window.location.origin+"/sfjalan");
		});
		
		$('#penduduk').click(function (){
			$('#embed').attr('src',window.location.origin+"/penduduk");
		});
		
		$('#sarpras').click(function (){
			$('#embed').attr('src',window.location.origin+"/sarpras");
		});
		
		
		
		$('#banjir').click(function (){
			$('#embed').attr('src',window.location.origin+"/bencana/banjir");
		});
		
		$('#longsor').click(function (){
			$('#embed').attr('src',window.location.origin+"/bencana/longsor");
		});
		
		$('#tematik').click(function (){
			$('#embed').attr('src',window.location.origin+"/admin/peta-tematiks")
		});
		
		$('#geoportal').click(function (){
			$('#embed').attr('src', "//"+location.host+":8080/geoserver");
		});
		
		$('#bigdata').click(function (){
			$('#embed').attr('src', "//"+location.host+":8100");
		});
		
		$('#nawasis').click(function (){
			$('#embed').attr('src',"http://portal.nawasis.info/")
		});
		
		$('#tutup').click(function (){
			$('#embed').attr('src',"")
		});
		
	</script>