
function init_chart_mapanget1(){
			
	if( typeof (Chart) === 'undefined'){ return; }
	
	if ($('.canvasmapangetpenduduk').length){
		
		$('#kelbengkol').text(kelbengkol);
		$('#kelbuha').text(kelbuha);
		$('#kelkairagi1').text(kelkairagi1);
		$('#kelkairagi2').text(kelkairagi2);
		$('#kelkimaatas').text(kelkimaatas);
		$('#kellapangan').text(kellapangan);
		$('#kelmapangetbarat').text(kelmapangetbarat);
		$('#kelpanikibawah').text(kelpanikibawah);
		$('#kelpaniki2').text(kelpaniki2);
		$('#kelpaniki1').text(kelpaniki1);
		$('#totalmapanget').text(allmapanget);
		
		var chart_doughnut_settings = {
			type: 'doughnut',
			tooltipFillColor: "rgba(51, 51, 51, 0.55)",
			data: {
				labels: [
					"Bengkol",
					"Buha",
					"Kairagi 1",
					"Kairagi 2",
					"Kima Atas",
					"Lapangan",
					"Mapanget Barat",
					"Paniki Bawah",
					"Paniki 1",
					"Paniki 2"
				],
				datasets: [{
					data: [kelbengkol, kelbuha, kelkairagi1, kelkairagi2, kelkimaatas, kellapangan, kelmapangetbarat, kelpanikibawah, kelpaniki2, kelpaniki1],
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
	
		$('.canvasmapangetpenduduk').each(function(){
			
			var chart_element = $(this);
			var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
			
		});			
		
	}  
   
}


function init_chart_mapanget2(){
			
	if( typeof (Chart) === 'undefined'){ return; }
	
	if ($('.canvasmapangetmatapencaharian').length){
		
		$('#mapangetpertanian').text(mapangetpertanian);
		$('#mapangetperikanan').text(mapangetperikanan);
		$('#mapangettambang').text(mapangettambang);
		$('#mapangetindustri').text(mapangetindustri);
		$('#mapangetkonstruksi').text(mapangetkonstruksi);
		$('#mapangetperdagangan').text(mapangetperdagangan);
		$('#mapangetpemerintahan').text(mapangetpemerintahan);
		
		
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
					data: [mapangetpertanian, mapangetperikanan, mapangettambang, mapangetindustri, mapangetkonstruksi, mapangetperdagangan, mapangetpemerintahan],
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
	
		$('.canvasmapangetmatapencaharian').each(function(){
			
			var chart_element = $(this);
			var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
			
		});			
		
	}  
   
}


function init_chart_mapanget3(){
			
	if( typeof (Chart) === 'undefined'){ return; }
	
	if ($('.canvasmapangetpendidikan').length){
		
		$('#mapangetsekolahdlm').text(mapangetdalam);
		$('#mapangetsekolahluar').text(mapangetluar);
		$('#mapangetsekolahtdk').text(mapangettidak);
		
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
					data: [mapangetdalam, mapangetluar, mapangettidak],
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
	
		$('.canvasmapangetpendidikan').each(function(){
			
			var chart_element = $(this);
			var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
			
		});			
		
	}  
   
}




function init_chart_mapanget4(){
			
	if( typeof (Chart) === 'undefined'){ return; }
	
	if ($('.canvasmapangetagama').length){
		
		$('#katolikmapanget').text(katolikmapanget);
		$('#protestanmapanget').text(protestanmapanget);
		$('#islammapanget').text(islammapanget);
		$('#hindumapanget').text(hindumapanget);
		$('#budhamapanget').text(budhamapanget);
		
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
					data: [katolikmapanget, protestanmapanget, islammapanget, hindumapanget, budhamapanget],
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
	
		$('.canvasmapangetagama').each(function(){
			
			var chart_element = $(this);
			var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
			
		});			
		
	}  
   
}


function init_chart_mapanget5(){
			
	if( typeof (Chart) === 'undefined'){ return; }
	
	if ($('.canvasmapangetpendakhir').length){
		
		$('#mapangetsd').text(mapangetsd);
		$('#mapangetsmp').text(mapangetsmp);
		$('#mapangetsma').text(mapangetsma);
		$('#mapangetd1d2').text(mapangetd1d2);
		$('#mapangetd3').text(mapangetd3);
		$('#mapangetd4s1').text(mapangetd4s1);
		$('#mapangets2').text(mapangets2);
		$('#mapangets3').text(mapangets3);
		
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
					data: [mapangetsd, mapangetsmp, mapangetsma, mapangetd1d2, mapangetd3, mapangetd4s1, mapangets2, mapangets3],
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
	
		$('.canvasmapangetpendakhir').each(function(){
			
			var chart_element = $(this);
			var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
			
		});			
		
	}  
   
}

