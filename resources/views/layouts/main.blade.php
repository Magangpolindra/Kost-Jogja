<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-+4j30LffJ4tgIMrq9CwHvn0NjEvmuDCOfk6Rpg2xg7zgOxWWtLtozDEEVvBPgHqE" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="shortcut icon" href="{{ asset('img/lg.png') }}">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
        integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
        crossorigin="" />
    <script src="https://unpkg.com/esri-leaflet@3.0.8/dist/esri-leaflet.js"
        integrity="sha512-E0DKVahIg0p1UHR2Kf9NX7x7TUewJb30mxkxEm2qOYTVJObgsAGpEol9F6iK6oefCbkJiA4/i6fnTHzM6H1kEA=="
        crossorigin=""></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
        integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
        crossorigin=""></script>
    {{-- <title>{{ $title }}</title> --}}
</head>

<body>
    @include('partials.navbar')
    @yield('container')
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    {{-- <script src="js/script.js"></script> --}}

    {{-- icon Boostrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    {{-- Awesome --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- main Style --}}
    <link rel="stylesheet" href="/css/style.css">
    @include ('partials.sidebar')
    @include('partials.footer')
    <!-- Modal Login-->
    <div class="modal fade" id="masuk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="card-title h4 my-4 ">Masuk Ke KostJogja</p>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                </div>
                <div class="card-body">
                    <div class="modal-body">
                        <p><a class="dropdown-item " href="/login">
                                <img src="{{ asset('img/pck.svg') }}" alt="" style="width:70px;">
                                Pencari Kost
                            </a></p>
                        <hr class="dropdown-divider">
                    </div>
                    <div class="modal-body">
                        <p><a class="dropdown-item " href="/login">
                                <img src="{{ asset('img/pmk.svg') }}" alt="" style="width:70px;">
                                Pemilik Kost
                            </a></p>
                        <hr class="dropdown-divider">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="picker"> </div>
    <input type="hidden" id="result" value="">
    <script>
        $('#picker').dateTimePicker({
            dateFormat: 'YYYY',
            showTime: true,
            autoClose: false
        });
    </script>

</body>
<script>
    var map = L.map('map').setView([-7.8011858687741125, 110.3649181200966], 15);

    // var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    //     maxZoom: 19,
    //     attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    // }).addTo(map);


    // L.esri.basemapLayer('Imagery').addTo(map);


    //   street
    // L.tileLayer('http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}', {
    //     maxZoom: 20,
    //     subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
    // }).addTo(map);

    // hybrid
    // L.tileLayer('http://{s}.google.com/vt?lyrs=s,h&x={x}&y={y}&z={z}', {
    //     maxZoom: 20,
    //     subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
    // }).addTo(map);

    // satellite
    // L.tileLayer('http://{s}.google.com/vt?lyrs=s&x={x}&y={y}&z={z}', {
    //     maxZoom: 20,
    //     subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
    // }).addTo(map);

    // Hybrid: s,h;
    // Satellite: s;
    // Streets: m;
    // Terrain: p;

    //terrain
    L.tileLayer('http://{s}.google.com/vt?lyrs=p&x={x}&y={y}&z={z}', {
        maxZoom: 30,
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
    }).addTo(map);

    // L.marker([-7.818143588527818, 110.39072156427937]).addTo(map);

    // var kostIcon = L.icon({
    //     iconUrl: '/img/villa.png',

    //     iconSize: [26, 30], // size of the icon
    //     shadowSize: [50, 64], // size of the shadow
    //     iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
    //     shadowAnchor: [4, 62], // the same for the shadow
    //     popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
    // });
    // L.marker([-7.803753381226275, 110.41570767760275], {
    //     icon: kostIcon
    // }).addTo(map);

    var marker = L.marker([-7.788293836488279, 110.3647897279393], {}).addTo(map).on('click', function(e) {
        alert(e.latlng)
    });

    marker.bindPopup("<b>Helllloooooo</b><br>pencari kost").openPopup();

    //Polyline
    // var latlngs = [
    //     [
    //         -7.80454129037364,
    //         110.40384292602538
    //     ],
    //     [
    //         -7.81423524153603,
    //         110.38169860839844
    //     ],
    //     [
    //         -7.81967736109979,
    //         110.35749435424803
    //     ]
    // ];

    // var polyline = L.polyline(latlngs, {
    //     color: 'yellow'
    // }).addTo(map);

    // polyline.setStyle({
    //     color: 'red',
    //     weight: 10,
    //     lineCap: 'square'
    // });

    // zoom the map to the polyline
    // map.fitBounds(polyline.getBounds());

    // polyline.on('click', (e) => {
    //     // alert(e.latlng);
    //     polyline.setStyle({
    //         color: 'black'
    //     });
    // })





    //Polygon
    // var latlngs = [
    //     [
    //         [
    //             -7.80454129037364,
    //             110.37981033325194
    //         ],
    //         [
    //             -7.815085577395266,
    //             110.37242889404297
    //         ],
    //         [
    //             -7.822738522161785,
    //             110.39508819580078
    //         ],
    //         [
    //             -7.80454129037364,
    //             110.37981033325194
    //         ]
    //     ]
    // ];

    // var polygon = L.polygon(latlngs, {
    //     color: 'red'
    // }).addTo(map);

    // polygon.setStyle({
    //     color: 'blue',
    //     fillColor: 'yellow'
    // });

    // zoom the map to the polygon
    // map.fitBounds(polygon.getBounds());

    // polygon.on('click', (e) => {
    //     // alert('ksksksk');

    // });





    //dari database
    // $(document).ready(function() {
    //     $.getJSON('maps', function(data) {

    //         $.each(data, function(index) {

    //             var kostIcon = L.icon({
    //                 iconUrl: '/img/villa.png',

    //                 iconSize: [26, 30], // size of the icon
    //                 shadowSize: [50, 64], // size of the shadow
    //                 iconAnchor: [22,
    //                     94
    //                 ], // point of the icon which will correspond to marker's location
    //                 shadowAnchor: [4, 62], // the same for the shadow
    //                 popupAnchor: [-3, -
    //                     76
    //                 ] // point from which the popup should open relative to the iconAnchor
    //             });

    //             // alert(data[index].nama);
    //             L.marker([parseFloat(data[index].longitude), parseFloat(data[index]
    //                     .latitude)], {
    //                     // icon: kostIcon
    //                 })
    //                 .addTo(map);
    //         })
    //     });
    // });





    //Geojson
    // $.getJSON('geojson/map.geojson', function(json) {
    //     geoLayer = L.geoJson(json, {
    //         style: function(feature) {
    //             return {
    //                 weight: 5,
    //                 opacity: 1,
    //                 color: "red",
    //                 fillOpacity: 0,
    //                 dashArray: "30 10",
    //                 lineCap: 'square'
    //             };
    //         },
    //         onEachFeature: function(feature, layer) {
    //             // alert(feature.properties.nama)
    //             var iconLabel = L.divIcon({
    //                 className: 'label-bidang',
    //                 html: '<b>' + feature.properties.nama + '</b>',
    //                 iconSize: [100, 20]
    //             })
    //             L.marker(layer.getBounds().getCenter(), {
    //                 icon: iconLabel
    //             }).addTo(map);

    //             layer.on('click', (e) => {
    //                 alert(feature.properties.nama);
    //                 // $.getJSON('maps' + feature.properties.id, function(detail) {
    //                 //     $.each(detail, function(index) {
    //                 //         alert(detail[index].lokasi);
    //                 //     });
    //                 // });
    //             });
    //             layer.addTo(map);
    //         }
    //     });
    // });
</script>

</html>
