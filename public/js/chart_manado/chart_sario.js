
function init_chart_sario1(){
			
	if( typeof (Chart) === 'undefined'){ return; }
	
	if ($('.canvassariopenduduk').length){
		
		$('#kelsario').text(kelsario);
		$('#kelsariokotabaru').text(kelsariokotabaru);
		$('#kelsariotumpaan').text(kelsariotumpaan);
		$('#kelsarioutara').text(kelsarioutara);
		$('#keltitiwungensel').text(keltitiwungensel);
		$('#keltitiwungenut').text(keltitiwungenut);
		$('#totalsario').text(allsario);
		
		var chart_doughnut_settings = {
			type: 'doughnut',
			tooltipFillColor: "rgba(51, 51, 51, 0.55)",
			data: {
				labels: [
					"Sario",
					"Sario Kotabaru",
					"Sario Tumpaan",
					"Sario Utara",
					"Titiwungen Selatan",
					"Titiwungen Utara",
					"Ranomuut"
				],
				datasets: [{
					data: [kelsario, kelsariokotabaru, kelsariotumpaan, kelsarioutara, keltitiwungensel, keltitiwungenut],
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
	
		$('.canvassariopenduduk').each(function(){
			
			var chart_element = $(this);
			var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
			
		});			
		
	}  
   
}


function init_chart_sario2(){
			
	if( typeof (Chart) === 'undefined'){ return; }
	
	if ($('.canvassariomatapencaharian').length){
		
		$('#sariopertanian').text(sariopertanian);
		$('#sarioperikanan').text(sarioperikanan);
		$('#sariotambang').text(sariotambang);
		$('#sarioindustri').text(sarioindustri);
		$('#sariokonstruksi').text(sariokonstruksi);
		$('#sarioperdagangan').text(sarioperdagangan);
		$('#sariopemerintahan').text(sariopemerintahan);
		
		
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
					data: [sariopertanian, sarioperikanan, sariotambang, sarioindustri, sariokonstruksi, sarioperdagangan, sariopemerintahan],
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
	
		$('.canvassariomatapencaharian').each(function(){
			
			var chart_element = $(this);
			var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
			
		});			
		
	}  
   
}


function init_chart_sario3(){
			
	if( typeof (Chart) === 'undefined'){ return; }
	
	if ($('.canvassariopendidikan').length){
		
		$('#sariosekolahdlm').text(sariodalam);
		$('#sariosekolahluar').text(sarioluar);
		$('#sariosekolahtdk').text(sariotidak);
		
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
					data: [sariodalam, sarioluar, sariotidak],
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
	
		$('.canvassariopendidikan').each(function(){
			
			var chart_element = $(this);
			var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
			
		});			
		
	}  
   
}




function init_chart_sario4(){
			
	if( typeof (Chart) === 'undefined'){ return; }
	
	if ($('.canvassarioagama').length){
		
		$('#katoliksario').text(katoliksario);
		$('#protestansario').text(protestansario);
		$('#islamsario').text(islamsario);
		$('#hindusario').text(hindusario);
		$('#budhasario').text(budhasario);
		
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
					data: [katoliksario, protestansario, islamsario, hindusario, budhasario],
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
	
		$('.canvassarioagama').each(function(){
			
			var chart_element = $(this);
			var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
			
		});			
		
	}  
   
}


function init_chart_sario5(){
			
	if( typeof (Chart) === 'undefined'){ return; }
	
	if ($('.canvassariopendakhir').length){
		
		$('#sariosd').text(sariosd);
		$('#sariosmp').text(sariosmp);
		$('#sariosma').text(sariosma);
		$('#sariod1d2').text(sariod1d2);
		$('#sariod3').text(sariod3);
		$('#sariod4s1').text(sariod4s1);
		$('#sarios2').text(sarios2);
		$('#sarios3').text(sarios3);
		
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
					data: [sariosd, sariosmp, sariosma, sariod1d2, sariod3, sariod4s1, sarios2, sarios3],
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
	
		$('.canvassariopendakhir').each(function(){
			
			var chart_element = $(this);
			var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
			
		});			
		
	}  
   
}

