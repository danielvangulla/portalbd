<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="{{ URL::asset('kependudukan/css/leaflet.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('kependudukan/css/qgis2web.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('kependudukan/css/leaflet-search.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('kependudukan/css/leaflet-measure.css') }}">
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
        <script src="{{ URL::asset('kependudukan/js/qgis2web_expressions.js') }}"></script>
        <script src="{{ URL::asset('kependudukan/js/leaflet.js') }}"></script>
        <script src="{{ URL::asset('kependudukan/js/leaflet.rotatedMarker.js') }}"></script>
        <script src="{{ URL::asset('kependudukan/js/leaflet.pattern.js') }}"></script>
        <script src="{{ URL::asset('kependudukan/js/leaflet-hash.js') }}"></script>
        <script src="{{ URL::asset('kependudukan/js/Autolinker.min.js') }}"></script>
        <script src="{{ URL::asset('kependudukan/js/rbush.min.js') }}"></script>
        <script src="{{ URL::asset('kependudukan/js/labelgun.min.js') }}"></script>
        <script src="{{ URL::asset('kependudukan/js/labels.js') }}"></script>
        <script src="{{ URL::asset('kependudukan/js/leaflet-measure.js') }}"></script>
        <script src="{{ URL::asset('kependudukan/js/leaflet-search.js') }}"></script>
        <script src="{{ URL::asset('kependudukan/data/PresentasiJumlahPendudukyangMengenyamPendidikan_0.js') }}"></script>
        <script>
        var map = L.map('map', {
            zoomControl:true, maxZoom:20, minZoom:1
        }).fitBounds([[1.4250925316848733,124.58004364940052],[1.6565039881250259,124.99306073239694]]);
        var hash = new L.Hash(map);
        map.attributionControl.addAttribution('<a href="http://bigdata.manadokota.go.id" target="_blank">BIG DATA KOTA MANADO</a>');
        var measureControl = new L.Control.Measure({
            primaryLengthUnit: 'meter',
            secondaryLengthUnit: 'kilometer',
            primaryAreaUnit: 'meter2',
            secondaryAreaUnit: 'hektar',
            position: 'topleft',
        });
        measureControl.addTo(map);
        var bounds_group = new L.featureGroup([]);
        function setBounds() {
            map.setMaxBounds(map.getBounds());
        }
        function pop_PresentasiJumlahPendudukyangMengenyamPendidikan_0(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2"> <b>Kabupaten : </b><br>' + (feature.properties['Kabupaten'] !== null ? Autolinker.link(String(feature.properties['Kabupaten'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"> <b>Kecamatan : </b><br>' + (feature.properties['Kecamatan'] !== null ? Autolinker.link(String(feature.properties['Kecamatan'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"> <b>Kelurahan : </b><br>' + (feature.properties['Kelurahan'] !== null ? Autolinker.link(String(feature.properties['Kelurahan'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"> <b>Jumlah Penduduk Laki-Laki : </b><br>' + (feature.properties['laki_laki'] !== null ? Autolinker.link(String(feature.properties['laki_laki'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"> <b>Jumlah Penduduk Perempuan : </b><br>' + (feature.properties['perempuan'] !== null ? Autolinker.link(String(feature.properties['perempuan'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"> <b>Tidak Sekolah : </b><br>' + (feature.properties['tdk_sekola'] !== null ? Autolinker.link(String(feature.properties['tdk_sekola'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"> <b>Belum Tamat SD : </b><br>' + (feature.properties['blm_tmt_sd'] !== null ? Autolinker.link(String(feature.properties['blm_tmt_sd'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"> <b>Tamat SD : </b><br>' + (feature.properties['tmt_sd'] !== null ? Autolinker.link(String(feature.properties['tmt_sd'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"> <b>Tamat SMP : </b><br>' + (feature.properties['sltp'] !== null ? Autolinker.link(String(feature.properties['sltp'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"> <b>Tamat SMA : </b><br>' + (feature.properties['slta'] !== null ? Autolinker.link(String(feature.properties['slta'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"> <b>Tamat D3 : </b><br>' + (feature.properties['d_I_II'] !== null ? Autolinker.link(String(feature.properties['d_I_II'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"> <b>Sarjana Muda : </b><br>' + (feature.properties['sarjana_mu'] !== null ? Autolinker.link(String(feature.properties['sarjana_mu'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"> <b>Tamat Strata 1 : </b><br>' + (feature.properties['s_I'] !== null ? Autolinker.link(String(feature.properties['s_I'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"> <b>Tamat Strata 2 : </b><br>' + (feature.properties['s_II'] !== null ? Autolinker.link(String(feature.properties['s_II'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"> <b>Tamat Strata 3 : </b><br>' + (feature.properties['s_III'] !== null ? Autolinker.link(String(feature.properties['s_III'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"> <b>Presentase Penduduk Mengenyam Pendidikan : </b><br>' + (feature.properties['pendk_perc'] !== null ? Autolinker.link(String(feature.properties['pendk_perc'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2"> <b> Presentase Penduduk Tidak Mengenyam Pendidikan : </b><br>' + (feature.properties['non_pendk_'] !== null ? Autolinker.link(String(feature.properties['non_pendk_'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {
              maxHeight: 400,
              minWidth : 800,
              autoPan : false,
            });
        }

        function style_PresentasiJumlahPendudukyangMengenyamPendidikan_0_0(feature) {
            switch(String(feature.properties['pendk_perc'])) {
                case '0':
                    return {
                pane: 'pane_PresentasiJumlahPendudukyangMengenyamPendidikan_0',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(215,25,28,1.0)',
            }
                    break;
                case '71':
                    return {
                pane: 'pane_PresentasiJumlahPendudukyangMengenyamPendidikan_0',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(227,71,49,1.0)',
            }
                    break;
                case '76':
                    return {
                pane: 'pane_PresentasiJumlahPendudukyangMengenyamPendidikan_0',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(239,117,70,1.0)',
            }
                    break;
                case '77':
                    return {
                pane: 'pane_PresentasiJumlahPendudukyangMengenyamPendidikan_0',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(251,163,92,1.0)',
            }
                    break;
                case '78':
                    return {
                pane: 'pane_PresentasiJumlahPendudukyangMengenyamPendidikan_0',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(254,193,119,1.0)',
            }
                    break;
                case '79':
                    return {
                pane: 'pane_PresentasiJumlahPendudukyangMengenyamPendidikan_0',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,218,148,1.0)',
            }
                    break;
                case '80':
                    return {
                pane: 'pane_PresentasiJumlahPendudukyangMengenyamPendidikan_0',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(255,243,178,1.0)',
            }
                    break;
                case '81':
                    return {
                pane: 'pane_PresentasiJumlahPendudukyangMengenyamPendidikan_0',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(242,250,179,1.0)',
            }
                    break;
                case '82':
                    return {
                pane: 'pane_PresentasiJumlahPendudukyangMengenyamPendidikan_0',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(214,238,152,1.0)',
            }
                    break;
                case '83':
                    return {
                pane: 'pane_PresentasiJumlahPendudukyangMengenyamPendidikan_0',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(187,226,126,1.0)',
            }
                    break;
                case '84':
                    return {
                pane: 'pane_PresentasiJumlahPendudukyangMengenyamPendidikan_0',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(155,212,103,1.0)',
            }
                    break;
                case '85':
                    return {
                pane: 'pane_PresentasiJumlahPendudukyangMengenyamPendidikan_0',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(112,191,90,1.0)',
            }
                    break;
                case '86':
                    return {
                pane: 'pane_PresentasiJumlahPendudukyangMengenyamPendidikan_0',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(69,171,77,1.0)',
            }
                    break;
            }
        }
        map.createPane('pane_PresentasiJumlahPendudukyangMengenyamPendidikan_0');
        map.getPane('pane_PresentasiJumlahPendudukyangMengenyamPendidikan_0').style.zIndex = 400;
        map.getPane('pane_PresentasiJumlahPendudukyangMengenyamPendidikan_0').style['mix-blend-mode'] = 'normal';
        var layer_PresentasiJumlahPendudukyangMengenyamPendidikan_0 = new L.geoJson(json_PresentasiJumlahPendudukyangMengenyamPendidikan_0, {
            attribution: '<a href=""></a>',
            pane: 'pane_PresentasiJumlahPendudukyangMengenyamPendidikan_0',
            onEachFeature: pop_PresentasiJumlahPendudukyangMengenyamPendidikan_0,
            style: style_PresentasiJumlahPendudukyangMengenyamPendidikan_0_0,
        });
        bounds_group.addLayer(layer_PresentasiJumlahPendudukyangMengenyamPendidikan_0);
        map.addLayer(layer_PresentasiJumlahPendudukyangMengenyamPendidikan_0);
        var baseMaps = {};
        L.control.layers(baseMaps,{'Presentasi Jumlah Penduduk yang Mengenyam Pendidikan<br /><table><tr><td style="text-align: center;"><img src="kependudukan/legend/PresentasiJumlahPendudukyangMengenyamPendidikan_0_TidakAdaData0.png" /></td><td>Tidak Ada Data</td></tr><tr><td style="text-align: center;"><img src="kependudukan/legend/PresentasiJumlahPendudukyangMengenyamPendidikan_0_711.png" /></td><td>71 %</td></tr><tr><td style="text-align: center;"><img src="kependudukan/legend/PresentasiJumlahPendudukyangMengenyamPendidikan_0_762.png" /></td><td>76 %</td></tr><tr><td style="text-align: center;"><img src="kependudukan/legend/PresentasiJumlahPendudukyangMengenyamPendidikan_0_773.png" /></td><td>77 %</td></tr><tr><td style="text-align: center;"><img src="kependudukan/legend/PresentasiJumlahPendudukyangMengenyamPendidikan_0_784.png" /></td><td>78 %</td></tr><tr><td style="text-align: center;"><img src="kependudukan/legend/PresentasiJumlahPendudukyangMengenyamPendidikan_0_795.png" /></td><td>79 %</td></tr><tr><td style="text-align: center;"><img src="kependudukan/legend/PresentasiJumlahPendudukyangMengenyamPendidikan_0_806.png" /></td><td>80 %</td></tr><tr><td style="text-align: center;"><img src="kependudukan/legend/PresentasiJumlahPendudukyangMengenyamPendidikan_0_817.png" /></td><td>81 %</td></tr><tr><td style="text-align: center;"><img src="kependudukan/legend/PresentasiJumlahPendudukyangMengenyamPendidikan_0_828.png" /></td><td>82 %</td></tr><tr><td style="text-align: center;"><img src="kependudukan/legend/PresentasiJumlahPendudukyangMengenyamPendidikan_0_839.png" /></td><td>83 %</td></tr><tr><td style="text-align: center;"><img src="kependudukan/legend/PresentasiJumlahPendudukyangMengenyamPendidikan_0_8410.png" /></td><td>84 %</td></tr><tr><td style="text-align: center;"><img src="kependudukan/legend/PresentasiJumlahPendudukyangMengenyamPendidikan_0_8511.png" /></td><td>85 %</td></tr><tr><td style="text-align: center;"><img src="kependudukan/legend/PresentasiJumlahPendudukyangMengenyamPendidikan_0_8612.png" /></td><td>86 %</td></tr></table>': layer_PresentasiJumlahPendudukyangMengenyamPendidikan_0,},{collapsed:false}).addTo(map);
        setBounds();
        map.addControl(new L.Control.Search({
            layer: layer_PresentasiJumlahPendudukyangMengenyamPendidikan_0,
            initial: false,
            hideMarkerOnCollapse: true,
            propertyName: 'Kelurahan'}));
        </script>
    </body>
</html>
