<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="{{ URL::asset('status_fungsi_jalan/css/leaflet.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('status_fungsi_jalan/css/qgis2web.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('status_fungsi_jalan/css/leaflet-search.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('status_fungsi_jalan/css/leaflet-measure.css') }}">
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
        <script src="{{ URL::asset('status_fungsi_jalan/js/qgis2web_expressions.js') }}"></script>
        <script src="{{ URL::asset('status_fungsi_jalan/js/leaflet.js') }}"></script>
        <script src="{{ URL::asset('status_fungsi_jalan/js/multi-style-layer.js') }}"></script>
        <script src="{{ URL::asset('status_fungsi_jalan/js/leaflet.rotatedMarker.js') }}"></script>
        <script src="{{ URL::asset('status_fungsi_jalan/js/leaflet.pattern.js') }}"></script>
        <script src="{{ URL::asset('status_fungsi_jalan/js/leaflet-hash.js') }}"></script>
        <script src="{{ URL::asset('status_fungsi_jalan/js/Autolinker.min.js') }}"></script>
        <script src="{{ URL::asset('status_fungsi_jalan/js/rbush.min.js') }}"></script>
        <script src="{{ URL::asset('status_fungsi_jalan/js/labelgun.min.js') }}"></script>
        <script src="{{ URL::asset('status_fungsi_jalan/js/labels.js') }}"></script>
        <script src="{{ URL::asset('status_fungsi_jalan/js/leaflet-measure.js') }}"></script>
        <script src="{{ URL::asset('status_fungsi_jalan/js/leaflet-search.js') }}"></script>
        <script src="{{ URL::asset('status_fungsi_jalan/data/manado_polos_0.js') }}"></script>
        <script src="{{ URL::asset('status_fungsi_jalan/data/JALAN_LN_25K_1.js') }}"></script>
        <script>
        var map = L.map('map', {
            zoomControl:true, maxZoom:28, minZoom:1
        }).fitBounds([[1.4120568175338295,124.59211793694719],[1.657722815943709,125.03057071883643]]);
        var hash = new L.Hash(map);
        map.attributionControl.addAttribution('<a href="http://bigdata.manadokota.go.id" target="_blank">BIG DATA KOTA MANADO</a>');
        var measureControl = new L.Control.Measure({
            primaryLengthUnit: 'meter',
            secondaryLengthUnit: 'kilometer',
            primaryAreaUnit: 'meter2',
            secondaryAreaUnit: 'hektar',
            position: 'topleft'
        });
        measureControl.addTo(map);
        var bounds_group = new L.featureGroup([]);
        function setBounds() {
            map.setMaxBounds(map.getBounds());
        }
        function pop_manado_polos_0(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2"> <b>Kecamatan : </b>' + (feature.properties['Kecamatan'] !== null ? Autolinker.link(String(feature.properties['Kecamatan'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"> <b>Kelurahan : </b>' + (feature.properties['Kelurahan'] !== null ? Autolinker.link(String(feature.properties['Kelurahan'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_manado_polos_0_0() {
            return {
                pane: 'pane_manado_polos_0',
                opacity: 1,
                color: 'rgba(0,0,0,0.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(165,165,165,1.0)',
            }
        }
        map.createPane('pane_manado_polos_0');
        map.getPane('pane_manado_polos_0').style.zIndex = 400;
        map.getPane('pane_manado_polos_0').style['mix-blend-mode'] = 'normal';
        var layer_manado_polos_0 = new L.geoJson(json_manado_polos_0, {
            attribution: '<a href=""></a>',
            pane: 'pane_manado_polos_0',
            onEachFeature: pop_manado_polos_0,
            style: style_manado_polos_0_0,
        });
        bounds_group.addLayer(layer_manado_polos_0);
        function pop_JALAN_LN_25K_1(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2"> <b>Status : </b><br>' + (feature.properties['AUTRJL'] !== null ? Autolinker.link(String(feature.properties['AUTRJL'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"> <b>Fungsi : </b><br>' + (feature.properties['FGSRJL'] !== null ? Autolinker.link(String(feature.properties['FGSRJL'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"> <b>Nama Jalan : </b><br>' + (feature.properties['NAMOBJ'] !== null ? Autolinker.link(String(feature.properties['NAMOBJ'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"> <b>Panjang Jalan : </b><br>' + (feature.properties['SHP_Length'] !== null ? Autolinker.link(String(feature.properties['SHP_Length'])) : '') + ' M</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_JALAN_LN_25K_1_0(feature) {
            switch(String(feature.properties['FGSRJL'])) {
                case 'Jalan Arteri Primer':
                    return {
                pane: 'pane_JALAN_LN_25K_1',
                opacity: 1,
                color: 'rgba(108,58,83,1.0)',
                dashArray: '',
                lineCap: 'round',
                lineJoin: 'round',
                weight: 3.0,
                fillOpacity: 0,
            }
                    break;
                case 'Jalan Kolektor Primer':
                    return {
                pane: 'pane_JALAN_LN_25K_1',
                opacity: 1,
                color: 'rgba(108,58,83,1.0)',
                dashArray: '',
                lineCap: 'round',
                lineJoin: 'round',
                weight: 3.0,
                fillOpacity: 0,
            }
                    break;
                case 'Jalan Kolektor Sekunder':
                    return {
                pane: 'pane_JALAN_LN_25K_1',
                opacity: 1,
                color: 'rgba(108,58,83,1.0)',
                dashArray: '',
                lineCap: 'round',
                lineJoin: 'round',
                weight: 3.0,
                fillOpacity: 0,
            }
                    break;
                case 'Jalan Lingkungan':
                    return {
                pane: 'pane_JALAN_LN_25K_1',
                opacity: 1,
                color: 'rgba(100,100,80,1.0)',
                dashArray: '',
                lineCap: 'round',
                lineJoin: 'round',
                weight: 1.0,
                fillOpacity: 0,
            }
                    break;
                case 'Jalan Lokal':
                    return {
                pane: 'pane_JALAN_LN_25K_1',
                opacity: 1,
                color: 'rgba(76,38,0,1.0)',
                dashArray: '',
                lineCap: 'round',
                lineJoin: 'round',
                weight: 3.0,
                fillOpacity: 0,
            }
                    break;
            }
        }
        function style_JALAN_LN_25K_1_1(feature) {
            switch(String(feature.properties['FGSRJL'])) {
                case 'Jalan Arteri Primer':
                    return {
                pane: 'pane_JALAN_LN_25K_1',
                opacity: 1,
                color: 'rgba(207,131,230,1.0)',
                dashArray: '',
                lineCap: 'round',
                lineJoin: 'round',
                weight: 3.0,
                fillOpacity: 0,
            }
                    break;
                case 'Jalan Kolektor Primer':
                    return {
                pane: 'pane_JALAN_LN_25K_1',
                opacity: 1,
                color: 'rgba(230,187,230,1.0)',
                dashArray: '',
                lineCap: 'round',
                lineJoin: 'round',
                weight: 3.0,
                fillOpacity: 0,
            }
                    break;
                case 'Jalan Kolektor Sekunder':
                    return {
                pane: 'pane_JALAN_LN_25K_1',
                opacity: 1,
                color: 'rgba(244,228,247,1.0)',
                dashArray: '',
                lineCap: 'round',
                lineJoin: 'round',
                weight: 3.0,
                fillOpacity: 0,
            }
                    break;
                case 'Jalan Lingkungan':
                    return {
                pane: 'pane_JALAN_LN_25K_1',
                opacity: 1,
                color: 'rgba(247,235,216,1.0)',
                dashArray: '',
                lineCap: 'round',
                lineJoin: 'round',
                weight: 1.0,
                fillOpacity: 0,
            }
                    break;
                case 'Jalan Lokal':
                    return {
                pane: 'pane_JALAN_LN_25K_1',
                opacity: 1,
                color: 'rgba(255,206,128,1.0)',
                dashArray: '',
                lineCap: 'round',
                lineJoin: 'round',
                weight: 3.0,
                fillOpacity: 0,
            }
                    break;
            }
        }
        map.createPane('pane_JALAN_LN_25K_1');
        map.getPane('pane_JALAN_LN_25K_1').style.zIndex = 401;
        map.getPane('pane_JALAN_LN_25K_1').style['mix-blend-mode'] = 'normal';
        var layer_JALAN_LN_25K_1 = new L.geoJson.multiStyle(json_JALAN_LN_25K_1, {
            attribution: '<a href=""></a>',
            pane: 'pane_JALAN_LN_25K_1',
            onEachFeature: pop_JALAN_LN_25K_1,
            styles: [style_JALAN_LN_25K_1_0,style_JALAN_LN_25K_1_1,]
        });
        bounds_group.addLayer(layer_JALAN_LN_25K_1);
        map.addLayer(layer_JALAN_LN_25K_1);
        var baseMaps = {};
        L.control.layers(baseMaps,{'JALAN<br /><table><tr><td style="text-align: center;"><img src="/status_fungsi_jalan/legend/JALAN_LN_25K_1_JalanArteriPrimer0.png" /></td><td>Jalan Arteri Primer</td></tr><tr><td style="text-align: center;"><img src="/status_fungsi_jalan/legend/JALAN_LN_25K_1_JalanKolektorPrimer1.png" /></td><td>Jalan Kolektor Primer</td></tr><tr><td style="text-align: center;"><img src="/status_fungsi_jalan/legend/JALAN_LN_25K_1_JalanKolektorSekunder2.png" /></td><td>Jalan Kolektor Sekunder</td></tr><tr><td style="text-align: center;"><img src="/status_fungsi_jalan/legend/JALAN_LN_25K_1_JalanLingkungan3.png" /></td><td>Jalan Lingkungan</td></tr><tr><td style="text-align: center;"><img src="/status_fungsi_jalan/legend/JALAN_LN_25K_1_JalanLokal4.png" /></td><td>Jalan Lokal</td></tr></table>': layer_JALAN_LN_25K_1,'<img src="/status_fungsi_jalan/legend/manado_polos_0.png" /> Manado': layer_manado_polos_0,},{collapsed:false}).addTo(map);
        setBounds();
        map.addControl(new L.Control.Search({
            layer: layer_manado_polos_0,
            initial: false,
            hideMarkerOnCollapse: true,
            propertyName: 'Kelurahan'}));
        </script>
    </body>
</html>
