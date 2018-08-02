<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="{{ URL::asset('css/leaflet.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/qgis2web.css') }}">
        <style>
        html, body, #map {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
        }
        </style>
        <title></title>
    </head>
    <body>
        <div id="map">
        </div>
        <script src="{{ URL::asset('js/qgis2web_expressions.js') }}"></script>
        <script src="{{ URL::asset('js/leaflet.js') }}"></script>
        <script src="{{ URL::asset('js/leaflet.rotatedMarker.js') }}"></script>
        <script src="{{ URL::asset('js/leaflet.pattern.js') }}"></script>
        <script src="{{ URL::asset('js/leaflet-hash.js') }}"></script>
        <script src="{{ URL::asset('js/Autolinker.min.js') }}"></script>
        <script src="{{ URL::asset('js/rbush.min.js') }}"></script>
        <script src="{{ URL::asset('js/labelgun.min.js') }}"></script>
        <script src="{{ URL::asset('js/labels.js') }}"></script>
        <script src="{{ URL::asset('data/Flood_0.js') }}"></script>
        <script>
        var map = L.map('map', {
            zoomControl:true, maxZoom:28, minZoom:1
        }).fitBounds([[1.44838759473,124.800152329],[1.52523633469,124.930523709]]);
        var hash = new L.Hash(map);
        map.attributionControl.addAttribution('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a>');
        var bounds_group = new L.featureGroup([]);
        var basemap0 = L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors,<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>',
            maxZoom: 28
        });
        basemap0.addTo(map);
        function setBounds() {
        }
        function pop_Flood_0(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['OBJECTID'] !== null ? Autolinker.link(String(feature.properties['OBJECTID'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KAB_KOTA'] !== null ? Autolinker.link(String(feature.properties['KAB_KOTA'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"><strong>DISASTER</strong><br />' + (feature.properties['DISASTER'] !== null ? Autolinker.link(String(feature.properties['DISASTER'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['ET_Source'] !== null ? Autolinker.link(String(feature.properties['ET_Source'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Shape_Leng'] !== null ? Autolinker.link(String(feature.properties['Shape_Leng'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Shape_Area'] !== null ? Autolinker.link(String(feature.properties['Shape_Area'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_Flood_0_0() {
            return {
                pane: 'pane_Flood_0',
                opacity: 1,
                color: 'rgba(0,0,0,0.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(31,120,180,0.84)',
            }
        }
        map.createPane('pane_Flood_0');
        map.getPane('pane_Flood_0').style.zIndex = 400;
        map.getPane('pane_Flood_0').style['mix-blend-mode'] = 'normal';
        var layer_Flood_0 = new L.geoJson(json_Flood_0, {
            attribution: '<a href=""></a>',
            pane: 'pane_Flood_0',
            onEachFeature: pop_Flood_0,
            style: style_Flood_0_0,
        });
        bounds_group.addLayer(layer_Flood_0);
        map.addLayer(layer_Flood_0);
        setBounds();
        </script>
    </body>
</html>
