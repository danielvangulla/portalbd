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
        <script src="{{ URL::asset('data/MANADOExport_Output_0.js') }}"></script>
        <script>
        var highlightLayer;
        function highlightFeature(e) {
            highlightLayer = e.target;

            if (e.target.feature.geometry.type === 'LineString') {
              highlightLayer.setStyle({
                color: '#ffff00',
              });
            } else {
              highlightLayer.setStyle({
                fillColor: '#ffff00',
                fillOpacity: 1
              });
            }
            highlightLayer.openPopup();
        }
        var map = L.map('map', {
            zoomControl:true, maxZoom:28, minZoom:1
        }).fitBounds([[1.43009565287,124.73794353],[1.58378905247,124.999929827]]);
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
        function pop_MANADOExport_Output_0(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Id'] !== null ? Autolinker.link(String(feature.properties['Id'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Num'] !== null ? Autolinker.link(String(feature.properties['Num'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['NUM_1'] !== null ? Autolinker.link(String(feature.properties['NUM_1'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KECAMATAN'] !== null ? Autolinker.link(String(feature.properties['KECAMATAN'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KELURAHAN'] !== null ? Autolinker.link(String(feature.properties['KELURAHAN'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['LINGKUNGAN'] !== null ? Autolinker.link(String(feature.properties['LINGKUNGAN'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['JUMLAH'] !== null ? Autolinker.link(String(feature.properties['JUMLAH'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['L'] !== null ? Autolinker.link(String(feature.properties['L'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['P'] !== null ? Autolinker.link(String(feature.properties['P'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['DISABILITA'] !== null ? Autolinker.link(String(feature.properties['DISABILITA'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['SATUAN1'] !== null ? Autolinker.link(String(feature.properties['SATUAN1'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['PERTANIAN'] !== null ? Autolinker.link(String(feature.properties['PERTANIAN'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['PERIKANAN'] !== null ? Autolinker.link(String(feature.properties['PERIKANAN'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['TAMBANG'] !== null ? Autolinker.link(String(feature.properties['TAMBANG'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['INDUSTRI'] !== null ? Autolinker.link(String(feature.properties['INDUSTRI'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KONSTRUKSI'] !== null ? Autolinker.link(String(feature.properties['KONSTRUKSI'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['PERDAGANGA'] !== null ? Autolinker.link(String(feature.properties['PERDAGANGA'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['PEMERINTAH'] !== null ? Autolinker.link(String(feature.properties['PEMERINTAH'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['DALAMKEL'] !== null ? Autolinker.link(String(feature.properties['DALAMKEL'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['LUARKEL'] !== null ? Autolinker.link(String(feature.properties['LUARKEL'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KOTALUAR'] !== null ? Autolinker.link(String(feature.properties['KOTALUAR'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['TIDAKSEKOL'] !== null ? Autolinker.link(String(feature.properties['TIDAKSEKOL'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['TDKADAANGG'] !== null ? Autolinker.link(String(feature.properties['TDKADAANGG'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['SATUAN2'] !== null ? Autolinker.link(String(feature.properties['SATUAN2'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['LUAS'] !== null ? Autolinker.link(String(feature.properties['LUAS'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KEPADATAN'] !== null ? Autolinker.link(String(feature.properties['KEPADATAN'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_MANADOExport_Output_0_0(feature) {
            if (feature.properties['KEPADATAN'] >= 0.000000 && feature.properties['KEPADATAN'] <= 80.400000 ) {
                return {
                pane: 'pane_MANADOExport_Output_0',
                opacity: 1,
                color: 'rgba(0,0,0,0.77)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(43,131,186,0.77)',
            }
            }
            if (feature.properties['KEPADATAN'] >= 80.400000 && feature.properties['KEPADATAN'] <= 160.800000 ) {
                return {
                pane: 'pane_MANADOExport_Output_0',
                opacity: 1,
                color: 'rgba(0,0,0,0.77)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(171,221,164,0.77)',
            }
            }
            if (feature.properties['KEPADATAN'] >= 160.800000 && feature.properties['KEPADATAN'] <= 241.200000 ) {
                return {
                pane: 'pane_MANADOExport_Output_0',
                opacity: 1,
                color: 'rgba(0,0,0,0.77)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,255,191,0.77)',
            }
            }
            if (feature.properties['KEPADATAN'] >= 241.200000 && feature.properties['KEPADATAN'] <= 321.600000 ) {
                return {
                pane: 'pane_MANADOExport_Output_0',
                opacity: 1,
                color: 'rgba(0,0,0,0.77)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(253,174,97,0.77)',
            }
            }
            if (feature.properties['KEPADATAN'] >= 321.600000 && feature.properties['KEPADATAN'] <= 402.000000 ) {
                return {
                pane: 'pane_MANADOExport_Output_0',
                opacity: 1,
                color: 'rgba(0,0,0,0.77)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(215,25,28,0.77)',
            }
            }
        }
        map.createPane('pane_MANADOExport_Output_0');
        map.getPane('pane_MANADOExport_Output_0').style.zIndex = 400;
        map.getPane('pane_MANADOExport_Output_0').style['mix-blend-mode'] = 'normal';
        var layer_MANADOExport_Output_0 = new L.geoJson(json_MANADOExport_Output_0, {
            attribution: '<a href=""></a>',
            pane: 'pane_MANADOExport_Output_0',
            onEachFeature: pop_MANADOExport_Output_0,
            style: style_MANADOExport_Output_0_0,
        });
        bounds_group.addLayer(layer_MANADOExport_Output_0);
        map.addLayer(layer_MANADOExport_Output_0);
        setBounds();
        </script>
    </body>
</html>
