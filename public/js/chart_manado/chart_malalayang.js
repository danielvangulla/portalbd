
function init_chart_malalayang1(){
			
	if( typeof (Chart) === 'undefined'){ return; }
	
	if ($('.canvasmalalayangpenduduk').length){
		
		$('#kelbahu').text(kelbahu);
		$('#kelbatukota').text(kelbatukota);
		$('#kelkleak').text(kelkleak);
		$('#kelmlyg1barat').text(kelmlyg1barat);
		$('#kelmlyg1timur').text(kelmlyg1timur);
		$('#kelmlyg1').text(kelmlyg1);
		$('#kelmlyg2').text(kelmlyg2);
		$('#kelwinangun1').text(kelwinangun1);
		$('#kelwinangun2').text(kelwinangun2);
		$('#totalmalalayang').text(allmalalayang);
		
		var chart_doughnut_settings = {
			type: 'doughnut',
			tooltipFillColor: "rgba(51, 51, 51, 0.55)",
			data: {
				labels: [
					"Bahu",
					"Batu Kota",
					"Kleak",
					"Mlyg 1 Barat",
					"Mlyg 1 Timur",
					"Malalayang 1",
					"Malalayang 2",
					"Winangun 1",
					"Winangun 2"
				],
				datasets: [{
					data: [kelbahu, kelkleak, kelmlyg1barat, kelmlyg1timur, kelmlyg1, kelmlyg2, kelwinangun1, kelwinangun2],
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
	
		$('.canvasmalalayangpenduduk').each(function(){
			
			var chart_element = $(this);
			var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
			
		});			
		
	}  
   
}


function init_chart_malalayang2(){
			
	if( typeof (Chart) === 'undefined'){ return; }
	
	if ($('.canvasmalalayangmatapencaharian').length){
		
		$('#malalayangpertanian').text(malalayangpertanian);
		$('#malalayangperikanan').text(malalayangperikanan);
		$('#malalayangtambang').text(malalayangtambang);
		$('#malalayangindustri').text(malalayangindustri);
		$('#malalayangkonstruksi').text(malalayangkonstruksi);
		$('#malalayangperdagangan').text(malalayangperdagangan);
		$('#malalayangpemerintahan').text(malalayangpemerintahan);
		
		
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
					data: [malalayangpertanian, malalayangperikanan, malalayangtambang, malalayangindustri, malalayangkonstruksi, malalayangperdagangan, malalayangpemerintahan],
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
	
		$('.canvasmalalayangmatapencaharian').each(function(){
			
			var chart_element = $(this);
			var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
			
		});			
		
	}  
   
}


function init_chart_malalayang3(){
			
	if( typeof (Chart) === 'undefined'){ return; }
	
	if ($('.canvasmalalayangpendidikan').length){
		
		$('#malalayangsekolahdlm').text(malalayangdalam);
		$('#malalayangsekolahluar').text(malalayangluar);
		$('#malalayangsekolahtdk').text(malalayangtidak);
		
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
					data: [malalayangdalam, malalayangluar, malalayangtidak],
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
	
		$('.canvasmalalayangpendidikan').each(function(){
			
			var chart_element = $(this);
			var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
			
		});			
		
	}  
   
}




function init_chart_malalayang4(){
			
	if( typeof (Chart) === 'undefined'){ return; }
	
	if ($('.canvasmalalayangagama').length){
		
		$('#katolikmalalayang').text(katolikmalalayang);
		$('#protestanmalalayang').text(protestanmalalayang);
		$('#islammalalayang').text(islammalalayang);
		$('#hindumalalayang').text(hindumalalayang);
		$('#budhamalalayang').text(budhamalalayang);
		
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
					data: [katolikmalalayang, protestanmalalayang, islammalalayang, hindumalalayang, budhamalalayang],
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
	
		$('.canvasmalalayangagama').each(function(){
			
			var chart_element = $(this);
			var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
			
		});			
		
	}  
   
}


function init_chart_malalayang5(){
			
	if( typeof (Chart) === 'undefined'){ return; }
	
	if ($('.canvasmalalayangpendakhir').length){
		
		$('#malalayangsd').text(malalayangsd);
		$('#malalayangsmp').text(malalayangsmp);
		$('#malalayangsma').text(malalayangsma);
		$('#malalayangd1d2').text(malalayangd1d2);
		$('#malalayangd3').text(malalayangd3);
		$('#malalayangd4s1').text(malalayangd4s1);
		$('#malalayangs2').text(malalayangs2);
		$('#malalayangs3').text(malalayangs3);
		
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
					data: [malalayangsd, malalayangsmp, malalayangsma, malalayangd1d2, malalayangd3, malalayangd4s1, malalayangs2, malalayangs3],
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
	
		$('.canvasmalalayangpendakhir').each(function(){
			
			var chart_element = $(this);
			var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
			
		});			
		
	}  
   
}

