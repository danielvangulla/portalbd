
function init_chart_paal21(){
			
	if( typeof (Chart) === 'undefined'){ return; }
	
	if ($('.canvaspaal2penduduk').length){
		
		$('#keldendengandlm').text(keldendengandlm);
		$('#keldendenganluar').text(keldendenganluar);
		$('#kelkairagiweru').text(kelkairagiweru);
		$('#kelmalendeng').text(kelmalendeng);
		$('#kelpaal2').text(kelpaal2);
		$('#kelperkamil').text(kelperkamil);
		$('#kelranomuut').text(kelranomuut);
		$('#totalpaal2').text(allpaaldua);
		
		var chart_doughnut_settings = {
			type: 'doughnut',
			tooltipFillColor: "rgba(51, 51, 51, 0.55)",
			data: {
				labels: [
					"Dendengan Dalam",
					"Dendengan Luar",
					"Kairagi Weru",
					"Malendeng",
					"Paal 2",
					"Perkamil",
					"Ranomuut"
				],
				datasets: [{
					data: [keldendengandlm, keldendenganluar, kelkairagiweru, kelmalendeng, kelpaal2, kelperkamil, kelranomuut],
					backgroundColor: [
						"#26B99A",
						"#E74C3C",
						"#9B59B6",
						"#3498DB",
						"#42f4eb",
						"#33d66f",
						"#0a00ce",
						"#ff05f6",
						"#dddd00",
						"#ff9666"
					],
					hoverBackgroundColor: [
						"#36CAAB",
						"#E95E4F",
						"#B370CF",
						"#49A9EA",
						"#bcfffc",
						"#60ff9b",
						"#6159ff",
						"#ffa8fb",
						"#ffff66",
						"#ffc5aa"
					]
				}]
			},
			options: { 
				legend: false, 
				responsive: false 
			}
		}
	
		$('.canvaspaal2penduduk').each(function(){
			
			var chart_element = $(this);
			var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
			
		});			
		
	}  
   
}


function init_chart_paal22(){
			
	if( typeof (Chart) === 'undefined'){ return; }
	
	if ($('.canvaspaal2matapencaharian').length){
		
		$('#paal2pertanian').text(paal2pertanian);
		$('#paal2perikanan').text(paal2perikanan);
		$('#paal2tambang').text(paal2tambang);
		$('#paal2industri').text(paal2industri);
		$('#paal2konstruksi').text(paal2konstruksi);
		$('#paal2perdagangan').text(paal2perdagangan);
		$('#paal2pemerintahan').text(paal2pemerintahan);
		
		
		var chart_doughnut_settings = {
			type: 'doughnut',
			tooltipFillColor: "rgba(51, 51, 51, 0.55)",
			data: {
				labels: [
					"Pertanian",
					"Perikanan",
					"Tambang",
					"Industri",
					"Konstruksi",
					"Dagang",
					"Pemerintahan"
				],
				datasets: [{
					data: [paal2pertanian, paal2perikanan, paal2tambang, paal2industri, paal2konstruksi, paal2perdagangan, paal2pemerintahan],
					backgroundColor: [
						"#BDC3C7",
						"#26B99A",
						"#E74C3C",
						"#9B59B6",
						"#3498DB",
						"#42f4eb",
						"#33d66f",
						"#0a00ce",
						"#ff05f6",
						"#dddd00",
						"#ff9666"
					],
					hoverBackgroundColor: [
						"#CFD4D8",
						"#36CAAB",
						"#E95E4F",
						"#B370CF",
						"#49A9EA",
						"#bcfffc",
						"#60ff9b",
						"#6159ff",
						"#ffa8fb",
						"#ffff66",
						"#ffc5aa"
					]
				}]
			},
			options: { 
				legend: false, 
				responsive: false 
			}
		}
	
		$('.canvaspaal2matapencaharian').each(function(){
			
			var chart_element = $(this);
			var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
			
		});			
		
	}  
   
}


function init_chart_paal23(){
			
	if( typeof (Chart) === 'undefined'){ return; }
	
	if ($('.canvaspaal2pendidikan').length){
		
		$('#paal2sekolahdlm').text(paal2dalam);
		$('#paal2sekolahluar').text(paal2luar);
		$('#paal2sekolahtdk').text(paal2tidak);
		
		var chart_doughnut_settings = {
			type: 'doughnut',
			tooltipFillColor: "rgba(51, 51, 51, 0.55)",
			data: {
				labels: [
					"di Dalam",
					"di Luar",
					"Tdk Sekolah"
				],
				datasets: [{
					data: [paal2dalam, paal2luar, paal2tidak],
					backgroundColor: [
						"#BDC3C7",
						"#26B99A",
						"#E74C3C"
					],
					hoverBackgroundColor: [
						"#CFD4D8",
						"#36CAAB",
						"#E95E4F"
					]
				}]
			},
			options: { 
				legend: false, 
				responsive: false 
			}
		}
	
		$('.canvaspaal2pendidikan').each(function(){
			
			var chart_element = $(this);
			var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
			
		});			
		
	}  
   
}




function init_chart_paal24(){
			
	if( typeof (Chart) === 'undefined'){ return; }
	
	if ($('.canvaspaal2agama').length){
		
		$('#katolikpaal2').text(katolikpaal2);
		$('#protestanpaal2').text(protestanpaal2);
		$('#islampaal2').text(islampaal2);
		$('#hindupaal2').text(hindupaal2);
		$('#budhapaal2').text(budhapaal2);
		
		var chart_doughnut_settings = {
			type: 'doughnut',
			tooltipFillColor: "rgba(51, 51, 51, 0.55)",
			data: {
				labels: [
					"Katolik",
					"Protestan",
					"Islam",
					"Hindu",
					"Budha"
				],
				datasets: [{
					data: [katolikpaal2, protestanpaal2, islampaal2, hindupaal2, budhapaal2],
					backgroundColor: [
						"#E74C3C",
						"#9B59B6",
						"#3498DB",
						"#42f4eb",
						"#33d66f"
					],
					hoverBackgroundColor: [
						"#E95E4F",
						"#B370CF",
						"#49A9EA",
						"#bcfffc",
						"#60ff9b"
					]
				}]
			},
			options: { 
				legend: false, 
				responsive: false 
			}
		}
	
		$('.canvaspaal2agama').each(function(){
			
			var chart_element = $(this);
			var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
			
		});			
		
	}  
   
}


function init_chart_paal25(){
			
	if( typeof (Chart) === 'undefined'){ return; }
	
	if ($('.canvaspaal2pendakhir').length){
		
		$('#paal2sd').text(paal2sd);
		$('#paal2smp').text(paal2smp);
		$('#paal2sma').text(paal2sma);
		$('#paal2d1d2').text(paal2d1d2);
		$('#paal2d3').text(paal2d3);
		$('#paal2d4s1').text(paal2d4s1);
		$('#paal2s2').text(paal2s2);
		$('#paal2s3').text(paal2s3);
		
		var chart_doughnut_settings = {
			type: 'doughnut',
			tooltipFillColor: "rgba(51, 51, 51, 0.55)",
			data: {
				labels: [
					"SD",
					"SMP",
					"SMA",
					"D1/D2",
					"D3",
					"D4/S1",
					"S2",
					"S3"
				],
				datasets: [{
					data: [paal2sd, paal2smp, paal2sma, paal2d1d2, paal2d3, paal2d4s1, paal2s2, paal2s3],
					backgroundColor: [
						"#9B59B6",
						"#3498DB",
						"#42f4eb",
						"#33d66f",
						"#0a00ce",
						"#ff05f6",
						"#dddd00",
						"#ff9666"
					],
					hoverBackgroundColor: [
						"#B370CF",
						"#49A9EA",
						"#bcfffc",
						"#60ff9b",
						"#6159ff",
						"#ffa8fb",
						"#ffff66",
						"#ffc5aa"
					]
				}]
			},
			options: { 
				legend: false, 
				responsive: false 
			}
		}
	
		$('.canvaspaal2pendakhir').each(function(){
			
			var chart_element = $(this);
			var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
			
		});			
		
	}  
   
}

