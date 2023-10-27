/*--------------------- Copyright (c) 2020 -----------------------
[Master Javascript]
Project: Hotelier
Version: 1.0.0
-------------------------------------------------------------------*/
// map js start
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
        icon: 'img/icons/map-pin.png'
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
    let hotel_package = '<div class="card card-hotel-package">' +
                        '<div class="card-image">' + 
                            '<img src="img/hotel-tour/10.png" alt="">' +
                            '<div class="price"><span>$50 / Night</span></div>' +
                        '</div>' +
                        '<div class="card-body">' +
                            '<a href="" class="card-title">Name Of Hotel</a>' +
                            '<div class="rating-review">' +
                                '<i class="fa fa-star"></i>' +
                                '<i class="fa fa-star"></i>' +
                                '<i class="fa fa-star"></i>' +
                                '<i class="fa fa-star-o"></i>' +
                                '<i class="fa fa-star-o"></i>' +
                            '</div>' +
                            '<div class="review">1+ Review</div>' + 
                        '</div>' +
                    '</div>';

    let infowindow = new google.maps.InfoWindow({
        content: hotel_package,
        maxWidth: 250
    });

    let markers = [];

    for (var i = 0; i < locations.length; i++) {

        let marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][0], locations[i][1]),
            icon: 'img/icons/map-pin.png',
            map: map
        });

        marker.addListener('click', function() {
            for (var j = 0; j < markers.length; j++) {
               markers[j].setIcon('img/icons/map-pin.png');
            }

            marker.setIcon('img/icons/map-pin1.png');
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
            btnClose.addClass('fa fa-close btn btn-red btn-close');
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
        icon: 'img/icons/map-pin2.png',
        map: map
    });
}





// 
(function ($) {
    "use strict";

    // ready function
    jQuery(document).ready(function ($) {
        var $this = $(window);

        // ===== Scroll to Top ==== //
        $(window).on("scroll", function() {
            if ($(this).scrollTop() >= 100) {
                $('#return-to-top').fadeIn(250);
            } else {
                $('#return-to-top').fadeOut(250);
            }
        });
        $('#return-to-top').on("click", function() {
            $('body,html').animate({
                scrollTop: 0
            }, 500);
        });		
        /*--- Responsive Menu Start ----*/

        $(".navbar-toggler").on("click", function () {
            var w = $('#sidebar').width();
            var pos = $('#sidebar').offset().left;

            if (pos === 0) {
                $("#sidebar").animate({ "left": -w }, "slow");
            }
            else {
                $("#sidebar").animate({ "left": "0" }, "slow");
            }

        });

        (function ($) {
            $(document).ready(function () {

                $('#cssmenu li.active').addClass('open').children('ul').show();
                $('#cssmenu li.has-sub>a').on('click', function () {
                    $(this).removeAttr('href');
                    var element = $(this).parent('li');
                    if (element.hasClass('open')) {
                        element.removeClass('open');
                        element.find('li').removeClass('open');
                        element.find('ul').slideUp(200);
                    }
                    else {
                        element.addClass('open');
                        element.children('ul').slideDown(200);
                        element.siblings('li').children('ul').slideUp(200);
                        element.siblings('li').removeClass('open');
                        element.siblings('li').find('li').removeClass('open');
                        element.siblings('li').find('ul').slideUp(200);
                    }
                });

            });
        })(jQuery);

        $(function () {
            //toggle class open on button
            $('#sidebar').on('hide.bs.collapse', function () {
                $('.navbar-toggler').removeClass('open');
            })
            $('#sidebar').on('show.bs.collapse', function () {
                $('.navbar-toggler').addClass('open');
            })
        });

    });
})();
/////////// fixed menu js////////////////
$(window).on("scroll", function () {
    var window_top = $(window).scrollTop() + 1;
    if (window_top > 100) {
      $('.main_menu_navbar').addClass('menu-fixed animated fadeInDown');
    } else {
      $('.main_menu_navbar').removeClass('menu-fixed animated fadeInDown');
    }
  });
// index-02 page slider
$('.second-page-slider .owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    navText: ['<i class="fas fa-long-arrow-alt-left"></i>', '<i class="fas fa-long-arrow-alt-right"></i>'],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 4
        },
    }
})
// index page partner slider
$('.partner-main-wrapper .owl-carousel').owlCarousel({
    loop:true,
    margin:5,
    navs:false,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        },
        
       
    }
})
// index second page slider
$('.second-page-review-wrapper .owl-carousel').owlCarousel({
    loop:true,
    margin:40,
    center:false,
    nav:true,
     navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        900:{
            items:1
        },
        1000:{
            items:2
        },
        1499:{
            items:2
        }
       
    }
})

$('.slider-third-wrapper .owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    center:false,
    nav:true,
     navText: ['<i class="fas fa-long-arrow-alt-left"></i>', '<i class="fas fa-long-arrow-alt-right"></i>'],
    responsive:{
        0:{
            items:1
        },
        500:{
            items:1
        },
        700:{
            items:2
        },
        900:{
            items:3
        },
        1000:{
            items:3
        },
        1300:{
            items:3
        },
        1499:{
            items:5
        }
       
    }
})
// carousl slider js
$('.slider-wrapper .owl-carousel').owlCarousel({
    loop: true,
    margin: 40,
    nav: true,
    navText: ['<i class="fas fa-long-arrow-alt-left"></i>', '<i class="fas fa-long-arrow-alt-right"></i>'],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
})

//review section slider
$('.blog-main-wrapper .owl-carousel').owlCarousel({
    loop: true,
    margin: 40,
    nav: true,
    navText: ['<i class="fas fa-long-arrow-alt-left"></i>', '<i class="fas fa-long-arrow-alt-right"></i>'],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
})
// for date pikar
let component = document.querySelector('ul.toggle-main-wrapper');
component.addEventListener('click',()=>{
     component.classList.toggle('active');  
})

// for date pikar
$( function() {
    $( ".datepicker" ).datepicker();
  } );


// page slider
$('.hs-banner-wrapper .owl-carousel').owlCarousel({
    loop:true,
    margin:5,
    nav:true,
     navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
       
    }
})


