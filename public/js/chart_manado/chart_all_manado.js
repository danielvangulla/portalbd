
function init_chart_manado1(){
			
	if( typeof (Chart) === 'undefined'){ return; }
	
	if ($('.canvasmanadopenduduk').length){
		
		$('#kecbunaken').text(allbunaken);
		$('#kecbunakenkep').text(allbunakenkep);
		$('#kecmalalayang').text(allmalalayang);
		$('#kecmapanget').text(allmapanget);
		$('#kecpaal2').text(allpaaldua);
		$('#kecsario').text(allsario);
		$('#kecsingkil').text(allsingkil);
		$('#kectikala').text(alltikala);
		$('#kectuminting').text(alltuminting);
		$('#kecwanea').text(allwanea);
		$('#kecwenang').text(allwenang);
		$('#totalmanado').text(allmanado);
		
		var chart_doughnut_settings = {
			type: 'doughnut',
			tooltipFillColor: "rgba(51, 51, 51, 0.55)",
			data: {
				labels: [
					"Bunaken",
					"Bunaken Kep",
					"Malalayang",
					"Mapanget",
					"Paal Dua",
					"Sario",
					"Singkil",
					"Tikala",
					"Tuminting",
					"Wanea",
					"Wenang"
				],
				datasets: [{
					data: [allbunaken, allbunakenkep, allmalalayang, allmapanget, allpaaldua, allsario, allsingkil, alltikala, alltuminting, allwanea, allwenang],
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
	
		$('.canvasmanadopenduduk').each(function(){
			
			var chart_element = $(this);
			var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
			
		});			
		
	}  
   
}


function init_chart_manado2(){
			
	if( typeof (Chart) === 'undefined'){ return; }
	
	if ($('.canvasmanadomatapencaharian').length){
		
		$('#allpertanian').text(allpertanian);
		$('#allperikanan').text(allperikanan);
		$('#alltambang').text(allpertambangan);
		$('#allindustri').text(allindustri);
		$('#allkonstruksi').text(allkonstruksi);
		$('#allperdagangan').text(allperdagangan);
		$('#allpemerintahan').text(allpemerintahan);
		
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
					data: [allpertanian, allperikanan, allpertambangan, allindustri, allkonstruksi, allperdagangan, allpemerintahan],
					backgroundColor: [
						"#BDC3C7",
						"#26B99A",
						"#E74C3C",
						"#9B59B6",
						"#3498DB",
						"#42f4eb",
						"#33d66f"
					],
					hoverBackgroundColor: [
						"#CFD4D8",
						"#36CAAB",
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
	
		$('.canvasmanadomatapencaharian').each(function(){
			
			var chart_element = $(this);
			var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
			
		});			
		
	}  
   
}


function init_chart_manado3(){
			
	if( typeof (Chart) === 'undefined'){ return; }
	
	if ($('.canvasmanadoagama').length){
		
		$('#allkatolik').text(allkatolik);
		$('#allprotestan').text(allprotestan);
		$('#allislam').text(allislam);
		$('#allhindu').text(allhindu);
		$('#allbudha').text(allbudha);
		
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
					data: [allkatolik, allprotestan, allislam, allhindu, allbudha],
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
	
		$('.canvasmanadoagama').each(function(){
			
			var chart_element = $(this);
			var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
			
		});
	}
}


function init_chart_manado4(){
			
	if( typeof (Chart) === 'undefined'){ return; }
	
	if ($('.canvasmanadopendakhir').length){
		
		$('#allsd').text(allsd);
		$('#allsmp').text(allsmp);
		$('#allsma').text(allsma);
		$('#alld1d2').text(alld1d2);
		$('#alld3').text(alld3);
		$('#alld4s1').text(alld4s1);
		$('#alls2').text(alls2);
		$('#alls3').text(alls3);
		
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
					data: [allsd, allsmp, allsma, alld1d2, alld3, alld4s1, alls2, alls3],
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
	
		$('.canvasmanadopendakhir').each(function(){
			
			var chart_element = $(this);
			var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
			
		});			
		
	}  
   
}


