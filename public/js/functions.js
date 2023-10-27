(function ($) {
    "use strict";
    
	 // Preloader 
   
	// fix header 


    var listingApp = {
        hover_events:function() {
            var $map_view = $('.page-blog .image-map .map-view');
            $map_view.on('hover', function() {
                $(this).parent().addClass('full-map');
            }, function() {
                $(this).parent().removeClass('full-map');
            });

            var selectField = $('select.form-control');
            if( selectField.length ) {
                tail.select("select.form-control");
            }
        }, 
        /* ---------------------------------------------
         function initializ
         --------------------------------------------- */
        initializ: function() {
            listingApp.hover_events();
        }
    };

    /* ---------------------------------------------
     Document ready function
     --------------------------------------------- */
    $(function() {
        listingApp.initializ();
    });


    /* ---------------------------------------------
     Others function
     --------------------------------------------- */

})(jQuery);

/* ---------------------------------------------
 Google Map Callback Functions
 --------------------------------------------- */
function googleMapContact() {
    var pt_center = new google.maps.LatLng(-33.9198, 151.2504);
    var mapCanvas = document.getElementById('map_contact');
    var styles = [{
        stylers: [{
            saturation: -100
        }]
    }];
    var mapOptions = {
        center: pt_center,
        zoom: 18,
        styles: styles
    };
    var map = new google.maps.Map(mapCanvas, mapOptions);
    var marker = new google.maps.Marker({
        position: pt_center,
        icon: 'images/map-pin.png'
    });
    marker.setMap(map);

    google.maps.event.addDomListener(window, 'resize', function() {
        google.maps.event.trigger(map, "resize");
        map.setCenter(pt_center);
    });
}

function googleMap() {
    let pt_center = new google.maps.LatLng(-33.9198, 151.2504);
    let mapCanvas = document.getElementById('google_map');
    let styles = [{
        stylers: [{
            saturation: -100
        }]
    }];
    let mapOptions = {
        center: pt_center,
        zoom: 18,
        styles: styles
    };
    let map = new google.maps.Map(mapCanvas, mapOptions);
    let locations = [
        [ pt_center.lat(), pt_center.lng() ],
        [ pt_center.lat() + 0.00066, pt_center.lng() - 0.0006 ],
        [ pt_center.lat() - 0.00055, pt_center.lng() - 0.0014 ],
        [ pt_center.lat() - 0.0007, pt_center.lng() + 0.001 ],
        [ pt_center.lat() + 0.005, pt_center.lng() ],
        [ pt_center.lat() + 0.0055, pt_center.lng() - 0.0007 ],
        [ pt_center.lat() + 0.0055, pt_center.lng() + 0.0007 ]
    ];
    let hotel_package = 
                    '<div class="sub-main"><div class="img-sec p-rel"><div class="hover-img p-rel"><a href="javascript:;"> <img src="images/blog-3.jpg" alt=""></a></div><span>$77 / Night</span></div><div class="slider-content"><span><a href="javascript:;"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> &nbsp;|&nbsp; 88+ Review</a></span><h5><a href="hotel-single-page.html">Montage Kapalua</a></h5><a href="javascript:;"><span class="clr-text"><i class="fas fa-map-marker-alt"></i>Republic of Cuba, USA</span></a> </div></div>'

    let infowindow = new google.maps.InfoWindow({
        content: hotel_package,
        maxWidth: 250,
        maxHeight: 350,
    });

    let markers = [];

    for (var i = 0; i < locations.length; i++) {

        let marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][0], locations[i][1]),
            icon: 'images/map-pin.png',
            map: map
        });

        marker.addListener('click', function() {
            for (var j = 0; j < markers.length; j++) {
               markers[j].setIcon('images/map-pin.png');
            }

            marker.setIcon('images/map-pin1.png');
            infowindow.open(map, marker);
        });

        google.maps.event.addListener(infowindow, 'domready', function() {
            
            var iwOuter = jQuery('.gm-style-iw');

            var iwBackground = iwOuter.prev();

            iwOuter.addClass('map-unnecessary-el');

            var btnClose = iwOuter.next();

            setTimeout(function() {
                iwOuter.parent().css({
                    'height': '0'
                });
            }, 300);

            iwOuter.css({
                'top': '249px',
                'left': '100px'
            });
            iwOuter.children(':nth-child(1)').css({
                'overflow': 'unset'
            });
            iwOuter.children(':nth-child(1)').children(':nth-child(1)').css({
                'overflow': 'unset',
                'padding': '5px'
            });

            btnClose.children(':nth-child(1)').hide();
            btnClose.addClass('fas fa-close btn btn-red btn-close');
            btnClose.css({
                'width': '38px',
                'height': '33px',
                'top': '-3px',
                'right': '-42px',
                'background': 'rgba(0,0,0,0.45)'
            });

            // Removes background shadow DIV
            iwBackground.children(':nth-child(2)').css({'display' : 'none'});

            iwBackground.children(':nth-child(3)').children(':nth-child(1)').css({'top': '5px'});
            iwBackground.children(':nth-child(3)').children(':nth-child(1)').children().css({'transform': 'skewX(32.6deg)', 'width': '10px', 'height': '15px'});

            iwBackground.children(':nth-child(3)').children(':nth-child(2)').css({'top': '5px'});
            iwBackground.children(':nth-child(3)').children(':nth-child(2)').children().css({'transform': 'skewX(-32.6deg)', 'width': '10px', 'height': '15px'});

            iwBackground.children(':nth-child(4)').css({'display' : 'none'});
        });
        markers.push(marker);
    }

    map.addListener('click', function() {
        infowindow.close();
    });
}

function googleMapLocation() {
    var pt_center = new google.maps.LatLng(-33.9198, 151.2504);
    var mapCanvas = document.getElementById('map_location');
    var styles = [{
        stylers: [{
            saturation: -100
        }]
    }];
    var mapOptions = {
        center: pt_center,
        zoom: 18,
        styles: styles
    };
    var map = new google.maps.Map(mapCanvas, mapOptions);
    var marker = new google.maps.Marker({
        position: pt_center,
        icon: 'images/map-pin2.png',
        map: map
    });
}
