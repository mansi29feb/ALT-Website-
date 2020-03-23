$(document).ready(function(){




$('.Count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 3000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});


if($('#map-canvas').length != 0){
    var filePath = $("#file-path").val();
    var map;
    var bounds = new google.maps.LatLngBounds();
    var image = {
    url: filePath+'/include/images/ATL_100x60.png',
    origin: new google.maps.Point(0, 0),
    anchor: new google.maps.Point(17, 34),
    scaledSize: new google.maps.Size(25, 25)
    }
    
    function initialize() {
    var mapOptions = {
    zoom: 4,
    scrollwheel: true,
    mapTypeId: 'roadmap',
    center: new google.maps.LatLng(25.932884, 83.569633),
    styles: [
    {"stylers": [{ hue: "#000000" },
    { saturation: -100 },
    { lightness: -5 }]},
    {
    "featureType": "road",
    "elementType": "labels",
    "stylers": [{"visibility": "off"}]
    },
    {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [{"lightness": 100},
    {"visibility": "simplified"}]
    }
    ]
    };
    map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
    map.setTilt(45);
    // Multiple Markers
    var markers = [
    ['Bengaluru, India', 12.9303933,77.5824172],
    ['Noida, India', 28.6260606,77.36688529999999]
    ];
    
    // Info Window Content
    var infoWindowContent = [
    ['<div class="info_content">' +
    '<p><strong>WORK DISTRICT</stong><br /> Address :#46, 7th B Main Rd, 4th Block, Jayanagar,<br /> Bengaluru – 560041</p>' + '</div>'],
    ['<div class="info_content">' +
    '<p><strong>Alt commerce pvt ltd.</stong><br />#1211, Tower B, 12 Floor, i-thum, A-40 ,sector 62 <br />Noida - 201309</p>' +
    '</div>'],
    ];
    // Display multiple markers on a map
    var infoWindow = new google.maps.InfoWindow(), marker, i;
    
    for( i = 0; i < markers.length; i++ ) {
    var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
    bounds.extend(position);
    marker = new google.maps.Marker({
    position: position,
    map: map,
    title: markers[i][0],
    icon: image,
    animation: google.maps.Animation.DROP
    });
    
    // Allow each marker to have an info window
    google.maps.event.addListener(marker, 'click', (function(marker, i) {
    return function() {
    infoWindow.setContent(infoWindowContent[i][0]);
    infoWindow.open(map, marker);
    
    }
    })(marker, i));
    // Automatically center the map fitting all markers on the screen
    map.fitBounds(bounds);
    }
    
    
    
    
    
    }
    
    google.maps.event.addDomListener(window, 'load', initialize);
    
    }
    
});