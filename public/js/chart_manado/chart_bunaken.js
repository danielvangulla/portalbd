
function init_chart_bunaken1(){
			
	if( typeof (Chart) === 'undefined'){ return; }
	
	if ($('.canvasbunakenpenduduk').length){
		
		$('#bailang').text(kelbailang);
		$('#meras').text(kelmeras);
		$('#molas').text(kelmolas);
		$('#pandu').text(kelpandu);
		$('#tongkaina').text(keltongkaina);
		$('#totalbunaken').text(allbunaken);
		
		var chart_doughnut_settings = {
			type: 'doughnut',
			tooltipFillColor: "rgba(51, 51, 51, 0.55)",
			data: {
				labels: [
					"Bailang",
					"Meras",
					"Molas",
					"Pandu",
					"Tongkaina"
				],
				datasets: [{
					data: [kelbailang, kelmeras, kelmolas, kelpandu, keltongkaina],
					backgroundColor: [
						"#BDC3C7",
						"#9B59B6",
						"#E74C3C",
						"#26B99A",
						"#3498DB"
					],
					hoverBackgroundColor: [
						"#CFD4D8",
						"#B370CF",
						"#E95E4F",
						"#36CAAB",
						"#49A9EA"
					]
				}]
			},
			options: { 
				legend: false, 
				responsive: false 
			}
		}
	
		$('.canvasbunakenpenduduk').each(function(){
			
			var chart_element = $(this);
			var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
			
		});			
		
	}  
   
}


function init_chart_bunaken2(){
			
	if( typeof (Chart) === 'undefined'){ return; }
	
	if ($('.canvasbunakenmatapencaharian').length){
		
		$('#bunakenpertanian').text(bunakenpertanian);
		$('#bunakenperikanan').text(bunakenperikanan);
		$('#bunakentambang').text(bunakentambang);
		$('#bunakenindustri').text(bunakenindustri);
		$('#bunakenkonstruksi').text(bunakenkonstruksi);
		$('#bunakenperdagangan').text(bunakenperdagangan);
		$('#bunakenpemerintahan').text(bunakenpemerintahan);
		
		
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
					data: [bunakenpertanian, bunakenperikanan, bunakentambang, bunakenindustri, bunakenkonstruksi, bunakenperdagangan, bunakenpemerintahan],
					backgroundColor: [
						"#BDC3C7",
						"#26B99A",
						"#E74C3C",
						"#9B59B6",
						"#3498DB",
						"#9B59B6",
						"#E74C3C"
					],
					hoverBackgroundColor: [
						"#CFD4D8",
						"#36CAAB",
						"#E95E4F",
						"#B370CF",
						"#49A9EA",
						"#B370CF",
						"#E95E4F"
					]
				}]
			},
			options: { 
				legend: false, 
				responsive: false 
			}
		}
	
		$('.canvasbunakenmatapencaharian').each(function(){
			
			var chart_element = $(this);
			var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
			
		});			
		
	}  
   
}


function init_chart_bunaken3(){
			
	if( typeof (Chart) === 'undefined'){ return; }
	
	if ($('.canvasbunakenpendidikan').length){
		
		$('#bunakensekolahdlm').text(bunakendalam);
		$('#bunakensekolahluar').text(bunakenluar);
		$('#bunakensekolahtdk').text(bunakentidak);
		
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
					data: [bunakendalam, bunakenluar, bunakentidak],
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
	
		$('.canvasbunakenpendidikan').each(function(){
			
			var chart_element = $(this);
			var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
			
		});			
		
	}  
   
}


function init_chart_bunaken4(){
			
	if( typeof (Chart) === 'undefined'){ return; }
	
	if ($('.canvasbunakenagama').length){
		
		$('#katolikbunaken').text(katolikbunaken);
		$('#protestanbunaken').text(protestanbunaken);
		$('#islambunaken').text(islambunaken);
		$('#hindubunaken').text(hindubunaken);
		$('#budhabunaken').text(budhabunaken);
		
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
					data: [katolikbunaken, protestanbunaken, islambunaken, hindubunaken, budhabunaken],
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
	
		$('.canvasbunakenagama').each(function(){
			
			var chart_element = $(this);
			var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
			
		});			
		
	}  
   
}


function init_chart_bunaken5(){
			
	if( typeof (Chart) === 'undefined'){ return; }
	
	if ($('.canvasbunakenpendakhir').length){
		
		$('#bunakensd').text(bunakensd);
		$('#bunakensmp').text(bunakensmp);
		$('#bunakensma').text(bunakensma);
		$('#bunakend1d2').text(bunakend1d2);
		$('#bunakend3').text(bunakend3);
		$('#bunakend4s1').text(bunakend4s1);
		$('#bunakens2').text(bunakens2);
		$('#bunakens3').text(bunakens3);
		
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
					data: [bunakensd, bunakensmp, bunakensma, bunakend1d2, bunakend3, bunakend4s1, bunakens2, bunakens3],
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
	
		$('.canvasbunakenpendakhir').each(function(){
			
			var chart_element = $(this);
			var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
			
		});			
		
	}  
   
}

