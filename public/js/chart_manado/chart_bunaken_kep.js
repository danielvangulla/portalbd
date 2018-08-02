
function init_chart_bunakenkep1(){
			
	if( typeof (Chart) === 'undefined'){ return; }
	
	if ($('.canvasbunakenkeppenduduk').length){
		
		$('#alungbanua').text(kelalungbanua);
		$('#bunaken').text(kelbunaken);
		$('#mdotua1').text(kelmanadotuasatu);
		$('#mdotua2').text(kelmanadotuadua);
		$('#totalbunakenkep').text(allbunakenkep);
		
		var chart_doughnut_settings = {
			type: 'doughnut',
			tooltipFillColor: "rgba(51, 51, 51, 0.55)",
			data: {
				labels: [
					"Alung Banua",
					"Bunaken",
					"Manado Tua 1",
					"Manado Tua 2"
				],
				datasets: [{
					data: [kelalungbanua, kelbunaken, kelmanadotuasatu, kelmanadotuadua],
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
	
		$('.canvasbunakenkeppenduduk').each(function(){
			
			var chart_element = $(this);
			var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
			
		});			
		
	}  
   
}


function init_chart_bunakenkep2(){
			
	if( typeof (Chart) === 'undefined'){ return; }
	
	if ($('.canvasbunakenkepmatapencaharian').length){
		
		$('#bunakenkeppertanian').text(bunakenkeppertanian);
		$('#bunakenkepperikanan').text(bunakenkepperikanan);
		$('#bunakenkeptambang').text(bunakenkeptambang);
		$('#bunakenkepindustri').text(bunakenkepindustri);
		$('#bunakenkepkonstruksi').text(bunakenkepkonstruksi);
		$('#bunakenkepperdagangan').text(bunakenkepperdagangan);
		$('#bunakenkeppemerintahan').text(bunakenkeppemerintahan);
		
		
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
					data: [bunakenkeppertanian, bunakenkepperikanan, bunakenkeptambang, bunakenkepindustri, bunakenkepkonstruksi, bunakenkepperdagangan, bunakenkeppemerintahan],
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
	
		$('.canvasbunakenkepmatapencaharian').each(function(){
			
			var chart_element = $(this);
			var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
			
		});			
		
	}  
   
}


function init_chart_bunakenkep3(){
			
	if( typeof (Chart) === 'undefined'){ return; }
	
	if ($('.canvasbunakenkeppendidikan').length){
		
		$('#bunakenkepsekolahdlm').text(bunakenkepdalam);
		$('#bunakenkepsekolahluar').text(bunakenkepluar);
		$('#bunakenkepsekolahtdk').text(bunakenkeptidak);
		
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
					data: [bunakenkepdalam, bunakenkepluar, bunakenkeptidak],
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
	
		$('.canvasbunakenkeppendidikan').each(function(){
			
			var chart_element = $(this);
			var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
			
		});			
		
	}  
   
}


function init_chart_bunakenkep4(){
			
	if( typeof (Chart) === 'undefined'){ return; }
	
	if ($('.canvasbunakenkepagama').length){
		
		$('#katolikbunakenkep').text(katolikbunakenkep);
		$('#protestanbunakenkep').text(protestanbunakenkep);
		$('#islambunakenkep').text(islambunakenkep);
		$('#hindubunakenkep').text(hindubunakenkep);
		$('#budhabunakenkep').text(budhabunakenkep);
		
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
					data: [katolikbunakenkep, protestanbunakenkep, islambunakenkep, hindubunakenkep, budhabunakenkep],
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
	
		$('.canvasbunakenkepagama').each(function(){
			
			var chart_element = $(this);
			var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
			
		});			
		
	}  
   
}


function init_chart_bunakenkep5(){
			
	if( typeof (Chart) === 'undefined'){ return; }
	
	if ($('.canvasbunakenkeppendakhir').length){
		
		$('#bunakenkepsd').text(bunakenkepsd);
		$('#bunakenkepsmp').text(bunakenkepsmp);
		$('#bunakenkepsma').text(bunakenkepsma);
		$('#bunakenkepd1d2').text(bunakenkepd1d2);
		$('#bunakenkepd3').text(bunakenkepd3);
		$('#bunakenkepd4s1').text(bunakenkepd4s1);
		$('#bunakenkeps2').text(bunakenkeps2);
		$('#bunakenkeps3').text(bunakenkeps3);
		
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
					data: [bunakenkepsd, bunakenkepsmp, bunakenkepsma, bunakenkepd1d2, bunakenkepd3, bunakenkepd4s1, bunakenkeps2, bunakenkeps3],
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
	
		$('.canvasbunakenkeppendakhir').each(function(){
			
			var chart_element = $(this);
			var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
			
		});			
		
	}  
   
}

