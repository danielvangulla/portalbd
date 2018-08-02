/
	<!-- === MAIN Background === -->
	
	<!-- === Slide 1 === -->
	<div class="slide story" id="slide-1" data-slide="1">
	
		<div class="shadow">
			<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
			<div id="wowslider-container1">
				<div class="ws_images"><ul>
					<li><img src="{{ URL::asset('dataGIS/Other/Dashboard/Slide_1.jpg') }}" alt="slide 1" title="" id="wows1_0"/></li>
					<li><img src="{{ URL::asset('dataGIS/Other/Dashboard/Slide_2.jpg') }}" alt="slide 2" title="" id="wows1_1"/></li>
					<li><img src="{{ URL::asset('dataGIS/Other/Dashboard/Slide_3.jpg') }}" alt="slide 3" title="" id="wows1_2"/></li>
					<li><img src="{{ URL::asset('dataGIS/Other/Dashboard/Slide_4.jpg') }}" alt="css image slider" title="" id="wows1_3"/></a></li>
					<li><img src="{{ URL::asset('dataGIS/Other/Dashboard/Slide_5.jpg') }}" alt="slide 5" title="" id="wows1_4"/></li>
				</ul></div>
				<!--div class="ws_bullets"><div>
					<a href="#" title=""><span><img src="{{ URL::asset('dataGIS/Other/Dashboard/Slide_1.jpg') }}" alt="slide 1"/>1</span></a>
					<a href="#" title=""><span><img src="{{ URL::asset('dataGIS/Other/Dashboard/Slide_2.jpg') }}" alt="slide 2"/>2</span></a>
					<a href="#" title=""><span><img src="{{ URL::asset('dataGIS/Other/Dashboard/Slide_3.jpg') }}" alt="slide 3"/>3</span></a>
					<a href="#" title=""><span><img src="{{ URL::asset('dataGIS/Other/Dashboard/Slide_4.jpg') }}" alt="slide 4"/>4</span></a>
					<a href="#" title=""><span><img src="{{ URL::asset('dataGIS/Other/Dashboard/Slide_5.jpg') }}" alt="slide 5"/>5</span></a>
				</div></div-->
			<div class="ws_shadow"></div>
			</div>	
		</div>
		
		<div class="col-12 row" style="margin-top: 20px;">
		
			<div class="col-2">
				<a id="profilmdo" href="#" data-toggle="modal" data-target="#fsModal">
					<div class="iconprofilmdo" ></div>
				</a>
			</div>
			
			<div class="col-2">
				<a id="rpk" href="#" data-toggle="modal" data-target="#fsModal">
					<div class="icon1"></div>
				</a>
			</div>
			
			<div class="col-2">
				<a id="kemiskinan" href="#" data-toggle="modal" data-target="#fsModal">
					<div class="icon3"></div>
				</a>
			</div>
			
			<div class="col-2">
				<div class="icon4"></div>
			</div>
			
			<div class="col-2">
				<div class="icon5"></div>
			</div>
			
			<div class="col-2">
				<div class="icon6"></div>
			</div>
			
		</div>
		<br>
		<div class="col-12">
			
			<div class="col-2">
				<a id="banjir" href="#" data-toggle="modal" data-target="#fsModal">
					<div class="iconBanjir" ></div>
				</a>
			</div>
			
			<div class="col-2">
				<a id="longsor" href="#" data-toggle="modal" data-target="#fsModal">
					<div class="iconLongsor" ></div>
				</a>
			</div>
			
			<div class="col-2">
				<a id="tematik" href="#" data-toggle="modal" data-target="#fsModal">
					<div class="icontematik" ></div>
				</a>
			</div>
			
			<div class="col-2">
				<a id="geoportal" href="#" data-toggle="modal" data-target="#fsModal">
					<div class="iconGeoportal" ></div>
				</a>
			</div>
			
			<div class="col-2">
				<a id="bigdata" href="#" data-toggle="modal" data-target="#fsModal">
					<div class="iconBigData" ></div>
				</a>
			</div>
			
			<div class="col-2">
				<a id="nawasis" href="#" data-toggle="modal" data-target="#fsModal">
					<div class="iconNawasis" ></div>
				</a>
			</div>
			
		</div>
		<br><br>
		
		<div class="container container-custom" style="color:white; opacity:0.7;">
			<div class="row content-row slide1container">
				<h1>KOTA MANADO</h3>
			</div>
			<div class="row content-row slide1container">
				
				<div class="col-md-6 col-sm-6 col-xs-6">
				  <div class="x_panel tile fixed_height_320 overflow_hidden">
					<div class="x_title">
					  <h2>Kepadatan Penduduk (Jiwa)</h2>
					</div>
					<div class="x_content">
					  <table class="" style="width:100%">
						<tr>
						  <th style="width:37%;">
							<canvas class="canvasmanadopenduduk" height="140" width="140" style="margin: 5px 10px 10px 0"></canvas>
						  </th>
						  <th>
							<table class="tile_info" style="color:white;">
								<tbody>
								  <tr>
									<td class="text-right">Bunaken </td>
									<td>
										<span style="margin-left:10px;" id="kecbunaken"> </span>
									</td>
									<td class="text-right"><span style="margin-left:10px;">Bunaken Kep </span></td>
									<td>
										<span style="margin-left:10px;" id="kecbunakenkep"> </span>
									</td>
								  </tr>
								  
								  <tr>
									<td class="text-right">Malalayang </td>
									<td>
										<span style="margin-left:10px;" id="kecmalalayang"> </span>
									</td>
									<td class="text-right"><span style="margin-left:10px;">Mapanget </span></td>
									<td>
										<span style="margin-left:10px;" id="kecmapanget"> </span>
									</td>
								  </tr>
								  
								  <tr>
									<td class="text-right">Paal Dua </td>
									<td>
										<span style="margin-left:10px;" id="kecpaal2"> </span>
									</td>
									<td class="text-right"><span style="margin-left:10px;">Sario </span></td>
									<td>
										<span style="margin-left:10px;" id="kecsario"> </span>
									</td>
								  </tr>
								  
								  <tr>
									<td class="text-right">Singkil </td>
									<td>
										<span style="margin-left:10px;" id="kecsingkil"> </span>
									</td>
									<td class="text-right"><span style="margin-left:10px;">Tikala </span></td>
									<td>
										<span style="margin-left:10px;" id="kectikala"> </span>
									</td>
								  </tr>
								  
								  <tr>
									<td class="text-right">Tuminting </td>
									<td>
										<span style="margin-left:10px;" id="kectuminting"> </span>
									</td>
									<td class="text-right"><span style="margin-left:10px;">Wanea </span></td>
									<td>
										<span style="margin-left:10px;" id="kecwanea"> </span>
									</td>
								  </tr>
								  
								  <tr>
									<td class="text-right">Wenang </td>
									<td>
										<span style="margin-left:10px;" id="kecwenang"> </span>
									</td>
								  </tr>
								  <tr>
									<td class="text-right">------</td>
								  </tr>
								  <tr>
									<td class="text-right">Total </td>
									<td>
										<span style="margin-left:10px;" id="totalmanado"> </span>
									</td>
								  </tr>
								</tbody>
							</table>
						  </th>
						</tr>
					  </table>
					  <br>
					</div>
				  </div>
				</div>
				
				<div class="col-md-6 col-sm-6 col-xs-6">
				  <div class="x_panel tile fixed_height_320 overflow_hidden">
					<div class="x_title">
					  <h2>Mata Pencaharian (KK)</h2>
					</div>
					<div class="x_content">
					  <table class="" style="width:100%">
						<tr>
						  <th style="width:37%;">
							<canvas class="canvasmanadomatapencaharian" height="140" width="140" style="margin: 5px 10px 10px 50px"></canvas>
						  </th>
						  <th>
							<table class="tile_info" style="color:white;">
								<tbody>
								  <tr>
									<td class="text-right">Pertanian </td>
									<td>
										<span style="margin-left:10px;" id="allpertanian"> </span>
									</td>
								  </tr>
								  <tr>
									<td class="text-right">Perikanan </td>
									<td>
										<span style="margin-left:10px;" id="allperikanan"> </span>
									</td>
								  </tr>
								  <tr>
									<td class="text-right">Tambang </td>
									<td>
										<span style="margin-left:10px;" id="alltambang"> </span>
									</td>
								  </tr>
								  <tr>
									<td class="text-right">industri </td>
									<td>
										<span style="margin-left:10px;" id="allindustri"> </span>
									</td>
								  </tr>
								  <tr>
									<td class="text-right">Konstruksi </td>
									<td>
										<span style="margin-left:10px;" id="allkonstruksi"> </span>
									</td>
								  </tr>
								  <tr>
									<td class="text-right">Perdagangan </td>
									<td>
										<span style="margin-left:10px;" id="allperdagangan"> </span>
									</td>
								  </tr>
								  <tr>
									<td class="text-right">Pemerintahan </td>
									<td>
										<span style="margin-left:10px;" id="allpemerintahan"> </span>
									</td>
								  </tr>
								</tbody>
							</table>
						  </th>
						</tr>
					  </table>
					</div>
				  </div>
				</div>
			</div>
			
			<!-- Row 2 -->
			<div class="row content-row slide1container">
				
				<div class="col-md-6 col-sm-6 col-xs-6">
				  <div class="x_panel tile fixed_height_320 overflow_hidden">
					<div class="x_title">
					  <h2>Agama Penduduk <br>(Jiwa)</h2>
					</div>
					<div class="x_content">
					  <table class="" style="width:100%">
						<tr>
						  <th style="width:37%;">
							<canvas class="canvasmanadoagama" height="140" width="140" style="margin: 5px 10px 10px 100px"></canvas>
						  </th>
						  <th>
							<table class="tile_info" style="color:white;">
								<tbody>
								  <tr>
									<td class="text-right">Katolik </td>
									<td>
										<span style="margin-left:10px;" id="allkatolik"> </span>
									</td>
								  </tr>
								  <tr>
									<td class="text-right">Protestan </td>
									<td>
										<span style="margin-left:10px;" id="allprotestan"> </span>
									</td>
								  </tr>
								  <tr>
									<td class="text-right">Islam </td>
									<td>
										<span style="margin-left:10px;" id="allislam"> </span>
									</td>
								  </tr>
								  <tr>
									<td class="text-right">Hindu </td>
									<td>
										<span style="margin-left:10px;" id="allhindu"> </span>
									</td>
								  </tr>
								  <tr>
									<td class="text-right">Budha </td>
									<td>
										<span style="margin-left:10px;" id="allbudha"> </span>
									</td>
								  </tr>
								</tbody>
							</table>
						  </th>
						</tr>
					  </table>
					</div>
				  </div>
			    </div>
				
				
				<div class="col-md-6 col-sm-6 col-xs-12">
				  <div class="x_panel tile fixed_height_320 overflow_hidden">
					<div class="x_title">
					  <h2>Status Pendidikan <br>(Jiwa)</h2>
					</div>
					<div class="x_content">
					  <table class="" style="width:100%">
						<tr>
						  <th style="width:37%;">
							<canvas class="canvasmanadopendakhir" height="140" width="140" style="margin: 5px 10px 10px 50px"></canvas>
						  </th>
						  <th>
							<table class="tile_info" style="color:white;">
								<tbody>
								  <tr>
									<td>SD </td>
									<td>
										<span style="margin-left:10px;" id="allsd"> </span>
									</td>
								  </tr>
								  <tr>
									<td>SMP </td>
									<td>
										<span style="margin-left:10px;" id="allsmp"> </span>
									</td>
								  </tr>
								  <tr>
									<td>SMA/SMK </td>
									<td>
										<span style="margin-left:10px;" id="allsma"> </span>
									</td>
								  </tr>
								  <tr>
									<td>D1/D2 </td>
									<td>
										<span style="margin-left:10px;" id="alld1d2"> </span>
									</td>
								  </tr>
								  <tr>
									<td>D3 </td>
									<td>
										<span style="margin-left:10px;" id="alld3"> </span>
									</td>
								  </tr>
								  <tr>
									<td>D4/S1 </td>
									<td>
										<span style="margin-left:10px;" id="alld4s1"> </span>
									</td>
								  </tr>
								  <tr>
									<td>S2 </td>
									<td>
										<span style="margin-left:10px;" id="alls2"> </span>
									</td>
								  </tr>
								  <tr>
									<td>S3 </td>
									<td>
										<span style="margin-left:10px;" id="alls3"> </span>
									</td>
								  </tr>
								</tbody>
							</table>
						  </th>
						</tr>
					  </table>
					</div>
				  </div>
			    </div>
				
			</div><!-- /row -->
		</div><!-- /container -->
		
		<br>
	</div><!-- /slide1 -->
	
	