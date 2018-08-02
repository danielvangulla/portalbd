<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8" />
    <title>CCTV Gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ URL::asset('css/full-slider.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('video-gallery/font-awesome/css/font-awesome.min.css') }}" />
	
	<link href="{{ URL::asset('css/video-js.css') }}" rel="stylesheet">
	<script src="{{ URL::asset('js/video.js') }}"></script>

    <script type="text/javascript" src="{{ URL::asset('video-gallery/js/jquery-1.10.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('video-gallery/bootstrap/js/bootstrap.min.js') }}"></script>
  </head>

  <body>


    <header>
      <div id="listcctv" class="carousel slide" data-ride="">
        
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('https://www.global-e.com/wp-content/uploads/2018/02/hero_background.png')">
			
            <div class="row pb-row">
				<div class="col-md-1">
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/adipura1.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">Adipura 1</label>
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/adipura2.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">Adipura 2</label>
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/aryaduta.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">Aryaduta</label>
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/bahukawasaki.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">Bahu Kawasaki</label>
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/teling1.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">Teling 1</label>
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/teling2.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">Teling 2</label>
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/teling3.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">Teling 3</label>
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/calaca2.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">Calaca 1</label>
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/calaca2.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">Calaca 2</label>
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/bnibole.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">BNI Bolevard</label>
				</div>
				
				<div class="col-md-1">
				</div>
				
			</div>
			
            <div class="row pb-row">
				<div class="col-md-1">
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/depanbankmega.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">Bank Mega</label>
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/mepanmantos.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">Depan Mantos</label>
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/depanmaybank.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">Depan Maybank</label>
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/depanmccbahu.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">Depan MCC</label>
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/depanmtc.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">Depan MTC</label>
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/komo1.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">Komo 1</label>
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/komo2.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">Komo 2</label>
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/komo3.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">Komo 3</label>
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/gpdisamrat1.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">GPDI Samrat 1</label>
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/gpdisamrat2.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">GPDI Samrat 2</label>
				</div>
				
				<div class="col-md-1">
				</div>
			</div>
		  
            <div class="row pb-row">
				<div class="col-md-1">
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/depaneben.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">Eben Haezar</label>
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/jembatankuning.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">Jembatan Kuning</label>
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/lm17agus1.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">17Agustus 1</label>
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/lm17agus2.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">17Agustus 2</label>
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/marinaplaza1.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">Marina Plaza 1</label>
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/marinaplaza2.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">Marina Plaza 2</label>
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/paal2satu.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">Paal2 1</label>
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/paal2dua.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">Paal2 2</label>
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/pertigaansario1.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">Sario 1</label>
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/pertigaansario2.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">Sario 1</label>
				</div>
				
				<div class="col-md-1">
				</div>
			</div>
			
            <div class="row pb-row">
				<div class="col-md-1">
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/pasarbersehati1.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">Pasar Bersehati 1</label>
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/pasarbersehati2.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">Pasar Bersehati 2</label>
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/pasarbersehati3.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">Pasar Bersehati 3</label>
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/psrkarombasan1.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">Pasar Karombasan 1</label>
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/psrkarombasan2.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">Pasar Karombasan 2</label>
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/pertigaankarombasan.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">Pertigaan Karombasan</label>
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/patungsamrat.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">Patung Samrat</label>
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/pertigaanjn.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">Pertigaan JN</label>
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/pertigaanpikat.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">Pertigaan Pikat</label>
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/pertigaanrike.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">Pertigaan Rike</label>
				</div>
				
				<div class="col-md-1">
				</div>
			</div>
			
            <div class="row pb-row">
				<div class="col-md-1">
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/zp1.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">Zero Point 1</label>
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/zp2.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">Zero Point 2</label>
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/zp3.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">Zero Point 3</label>
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/singkil.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">Singkil</label>
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/stjoseph.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">St.Joseph</label>
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/swissbell.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">Swiss Bell</label>
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/tgb.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">Taman GB</label>
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/tkb.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">TKB</label>
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/wfc1.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">Water Front City1</label>
				</div>
				
				<div class="col-md-1 pb-video">
					<video class="video-js vjs-default-skin pb-video-frame" poster="http://vjs.zencdn.net/v/oceans.png" controls preload="auto" width="100%" height="100" data-setup='{}'>
						<source src="rtmp://36.67.90.92:1935/live/wfc2.stream" type='rtmp/mp4'>
					</video>
					<label class="form-control label-warning text-center">Water Front City2</label>
				</div>
				
				<div class="col-md-1">
				</div>
			</div>
			<div class="carousel-caption d-none d-md-block">
              <h3 class="text-bold">CCTV Kota Manado</h3>
            </div>
			
        </div>
      </div>
    </header>


    <!-- Bootstrap core JavaScript -->
    <script src="{{ URL::asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  </body>

</html>
