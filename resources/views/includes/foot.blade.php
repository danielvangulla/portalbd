<!-- SCRIPTS -->
	<script src="{{ URL::asset('munter/js/html5shiv.js') }}"></script>
	<script src="{{ URL::asset('munter/js/jquery-1.10.2.min.js') }}"></script>
	<script src="{{ URL::asset('munter/js/jquery-migrate-1.2.1.min.js') }}"></script>
	<script src="{{ URL::asset('munter/js/bootstrap.min.js') }}"></script>
	<script src="{{ URL::asset('munter/js/jquery.easing.1.3.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('munter/fancybox/jquery.fancybox.pack-v=2.1.5.js') }}"></script>
	<script src="{{ URL::asset('munter/js/script.js') }}"></script>
	<script src="{{ URL::asset('js/chart.js') }}"></script>
	<script src="{{ URL::asset('js/chart_manado/global_variable_agama.js') }}"></script>
	<script src="{{ URL::asset('js/chart_manado/global_variable_matapencaharian.js') }}"></script>
	<script src="{{ URL::asset('js/chart_manado/global_variable_penduduk.js') }}"></script>
	<script src="{{ URL::asset('js/chart_manado/global_variable_statuspendidikan.js') }}"></script>
	<script src="{{ URL::asset('js/chart_manado/global_variable_tempatpendidikan.js') }}"></script>
	
	
	<script src="{{ URL::asset('js/chart_manado/chart_all_manado.js') }}"></script>
	<script src="{{ URL::asset('js/chart_manado/chart_bunaken.js') }}"></script>
	<script src="{{ URL::asset('js/chart_manado/chart_bunaken_kep.js') }}"></script>
	<script src="{{ URL::asset('js/chart_manado/chart_malalayang.js') }}"></script>
	<script src="{{ URL::asset('js/chart_manado/chart_mapanget.js') }}"></script>
	<script src="{{ URL::asset('js/chart_manado/chart_paal2.js') }}"></script>
	<script src="{{ URL::asset('js/chart_manado/chart_sario.js') }}"></script>
	<!--script src="{{ URL::asset('js/chart_manado/chart_singkil.js') }}"></script>
	<script src="{{ URL::asset('js/chart_manado/chart_tikala.js') }}"></script>
	<script src="{{ URL::asset('js/chart_manado/chart_tuminting.js') }}"></script>
	<script src="{{ URL::asset('js/chart_manado/chart_wanea.js') }}"></script>
	<script src="{{ URL::asset('js/chart_manado/chart_wenang.js') }}"></script-->
	
	<script src="{{ URL::asset('js/chart_manado/chart_init.js') }}"></script>
	
	<script type="text/javascript" src="{{ URL::asset('wowslider/engine1/wowslider.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('wowslider/engine1/script.js') }}"></script>
	
	<script>
		 
		$('#bigdata').click(function (){
			$('#embed').attr('src', "//"+location.host+":8100");
		});
		
		$('#geoportal').click(function (){
			$('#embed').attr('src', "//"+location.host+":8080/geoserver");
		});
		
		$('#rpk').click(function (){
			$('#embed').attr('src',window.location.origin+"/penduduk/lingkungan");
		});
		
		$('#banjir').click(function (){
			$('#embed').attr('src',window.location.origin+"/bencana/banjir");
		});
		
		$('#longsor').click(function (){
			$('#embed').attr('src',window.location.origin+"/bencana/longsor");
		});
		
		$('#kemiskinan').click(function (){
			$('#embed').attr('src',window.location.origin+"/bencana/kemiskinan");
		});
		
		$('#dikomando').click(function (){
			$('#embed').attr('src',"http://36.67.90.85/mioc/vAlpha")
		});
		
		$('#tematik').click(function (){
			$('#embed').attr('src',window.location.origin+"/admin/peta-tematiks")
		});
		
		$('#profilmdo').click(function (){
			$('#embed').attr('src',window.location.origin+"/profil-manado")
		});
		
		$('#nawasis').click(function (){
			$('#embed').attr('src',"http://portal.nawasis.info/")
		});
		
		$('#tutup').click(function (){
			$('#embed').attr('src',"")
		});
		
		$(document).ready(function(e) {
			var lis = $('.nav > li');
			menu_focus( lis[0], 1 );
			
			$(".fancybox").fancybox({
				padding: 10,
				helpers: {
					overlay: {
						locked: false
					}
				}
			});
		
			chart_init();
			
		});
		
		
	</script>
	<script>
	
		$(".icon1").mouseenter(function(){
			$(".icon1").attr({style: "content:url('munter/images/icon/icon1_glow.png')" });
		});
		$(".icon1").mouseleave(function(){
			$(".icon1").attr({style: "content:url('munter/images/icon/icon1.png')" });
		});
	
		$(".icon2").mouseenter(function(){
			$(".icon2").attr({style: "content:url('munter/images/icon/icon2_glow.png')" });
		});
		$(".icon2").mouseleave(function(){
			$(".icon2").attr({style: "content:url('munter/images/icon/icon2.png')" });
		});
	
		$(".icon3").mouseenter(function(){
			$(".icon3").attr({style: "content:url('munter/images/icon/icon3_glow.png')" });
		});
		$(".icon3").mouseleave(function(){
			$(".icon3").attr({style: "content:url('munter/images/icon/icon3.png')" });
		});
	
		$(".icon4").mouseenter(function(){
			$(".icon4").attr({style: "content:url('munter/images/icon/icon4_glow.png')" });
		});
		$(".icon4").mouseleave(function(){
			$(".icon4").attr({style: "content:url('munter/images/icon/icon4.png')" });
		});
	
		$(".icon5").mouseenter(function(){
			$(".icon5").attr({style: "content:url('munter/images/icon/icon5_glow.png')" });
		});
		$(".icon5").mouseleave(function(){
			$(".icon5").attr({style: "content:url('munter/images/icon/icon5.png')" });
		});
	
		$(".icon6").mouseenter(function(){
			$(".icon6").attr({style: "content:url('munter/images/icon/icon6_glow.png')" });
		});
		$(".icon6").mouseleave(function(){
			$(".icon6").attr({style: "content:url('munter/images/icon/icon6.png')" });
		});
	
		$(".icontematik").mouseenter(function(){
			$(".icontematik").attr({style: "content:url('munter/images/icon/tematik_glow.png')" });
		});
		$(".icontematik").mouseleave(function(){
			$(".icontematik").attr({style: "content:url('munter/images/icon/tematik.png')" });
		});
	
		$(".icondikomando").mouseenter(function(){
			$(".icondikomando").attr({style: "content:url('munter/images/icon/dikomando_glow.png')" });
		});
		$(".icondikomando").mouseleave(function(){
			$(".icondikomando").attr({style: "content:url('munter/images/icon/dikomando.png')" });
		});
	
		$(".iconBanjir").mouseenter(function(){
			$(".iconBanjir").attr({style: "content:url('munter/images/icon/iconBanjir_glow.png')" });
		});
		$(".iconBanjir").mouseleave(function(){
			$(".iconBanjir").attr({style: "content:url('munter/images/icon/iconBanjir.png')" });
		});
	
		$(".iconLongsor").mouseenter(function(){
			$(".iconLongsor").attr({style: "content:url('munter/images/icon/iconLongsor_glow.png')" });
		});
		$(".iconLongsor").mouseleave(function(){
			$(".iconLongsor").attr({style: "content:url('munter/images/icon/iconLongsor.png')" });
		}); 
	
		$(".iconBigData").mouseenter(function(){
			$(".iconBigData").attr({style: "content:url('munter/images/icon/iconBigData_glow.png')" });
		});
		$(".iconBigData").mouseleave(function(){
			$(".iconBigData").attr({style: "content:url('munter/images/icon/iconBigData.png')" });
		}); 
	
		$(".iconGeoportal").mouseenter(function(){
			$(".iconGeoportal").attr({style: "content:url('munter/images/icon/Geoportal_Glow.png')" });
		});
		$(".iconGeoportal").mouseleave(function(){
			$(".iconGeoportal").attr({style: "content:url('munter/images/icon/Geoportal.png')" });
		}); 
	
		$(".iconprofilmdo").mouseenter(function(){
			$(".iconprofilmdo").attr({style: "content:url('munter/images/icon/Profil_Glow.png')" });
		});
		$(".iconprofilmdo").mouseleave(function(){
			$(".iconprofilmdo").attr({style: "content:url('munter/images/icon/Profil.png')" });
		}); 
	
		$(".iconNawasis").mouseenter(function(){
			$(".iconNawasis").attr({style: "content:url('munter/images/icon/Nawasis_Glow.png')" });
		});
		$(".iconNawasis").mouseleave(function(){
			$(".iconNawasis").attr({style: "content:url('munter/images/icon/Nawasis.png')" });
		}); 
	
	</script>
	