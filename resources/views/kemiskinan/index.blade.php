<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Data Kemiskinan</title>
<meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('munter/kemiskinan/Qgis2threejs.css') }}">
</head>
<body>
<div id="webgl"></div>

<!-- popup -->
<div id="popup" style="display:none;">
<div id="closebtn">&times;</div>
<div id="popupbar"></div>
<div id="popupbody">
 <div id="popupcontent"></div>
 <div id="pageinfo">
  <h1>Current View URL</h1>
  <div><input id="urlbox" type="text"></div>

  <h1>Usage</h1>
  <div id="usage"></div>

  <h1>About</h1>
  <div id="about">This page was made with <a href="http://www.qgis.org/" target="_blank">QGIS</a> and <a href="https://github.com/minorua/Qgis2threejs" target="_blank">Qgis2threejs</a> plugin, 
and uses the following library:
  <ul>
  <li>three.js <a href="http://threejs.org/" target="_blank">http://threejs.org/</a> <a href="./threejs/LICENSE" target="_blank" class="license">(LICENSE)</a></li>
  <li>dat-gui <a href="https://code.google.com/p/dat-gui/" target="_blank">https://code.google.com/p/dat-gui/</a> <a href="./dat-gui/license.txt" target="_blank" class="license">(LICENSE)</a></li>
  <li id="lib_proj4js" style="display: none;">Proj4js <a href="http://trac.osgeo.org/proj4js/" target="_blank">http://trac.osgeo.org/proj4js/</a> <a href="./proj4js/LICENSE.md" target="_blank" class="license">(LICENSE)</a></li>
  </ul>
  </div>
 </div>
</div></div>

<!-- footer -->
<div id="footer"></div>

<script src="{{ URL::asset('munter/kemiskinan/threejs/three.min.js') }}"></script>
<script src="{{ URL::asset('munter/kemiskinan/Qgis2threejs.js') }}"></script>
<script src="{{ URL::asset('munter/kemiskinan/threejs/OrbitControls.js') }}"></script>
<script>
var option = Q3D.Options;

</script>
<script src="{{ URL::asset('munter/kemiskinan/testing.js') }}"></script>
<script>
if (typeof proj4 !== "undefined") document.getElementById("lib_proj4js").style.display = "list-item";

var container = document.getElementById("webgl");
// initialize application
var app = Q3D.application;
app.init(container);

// load the project
app.loadProject(project);

app.addEventListeners();
app.start();

</script>
<script src="{{ URL::asset('munter/kemiskinan/dat-gui/dat.gui.min.js') }}"></script>
<script src="{{ URL::asset('munter/kemiskinan/dat-gui_panel.js') }}"></script>
<script>
// initialize dat-gui panel
Q3D.gui.init();
</script>
</body>
</html>
