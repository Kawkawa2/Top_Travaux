
$( document ).ready(function() {
 // blog page js
$('.blog-head-one .owl-carousel').owlCarousel({
  loop:true,
  margin:10,
  dots:false,
  autoplay:true,
  nav:true,
  navText: ["<i class='fas fa-long-arrow-alt-left'></i>", "<i class='fas fa-long-arrow-alt-right'></i>"],
  responsive:{
      0:{
          items:1
      },
      600:{
          items:1
      },
      1000:{
          items:1
      }
  }
})
$('.blog-head-two .owl-carousel').owlCarousel({
loop:true,
margin:10,
dots:false,
autoplay:true,
nav:true,
navText: ["<i class='fas fa-long-arrow-alt-left'></i>", "<i class='fas fa-long-arrow-alt-right'></i>"],
responsive:{
    0:{
        items:1
    },
    600:{
        items:1
    },
    1000:{
        items:1
    }
}
})
$('.blog-head-three .owl-carousel').owlCarousel({
loop:true,
margin:10,
dots:false,
autoplay:true,
nav:true,
navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
responsive:{
  0:{
      items:1
  },
  600:{
      items:1
  },
  1000:{
      items:1
  }
}
})
$('.blog-head-four .owl-carousel').owlCarousel({
loop:true,
margin:10,
dots:false,
autoplay:true,
nav:true,
navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
responsive:{
  0:{
      items:1
  },
  600:{
      items:1
  },
  1000:{
      items:1
  }
}
})
$('.blog-head-five .owl-carousel').owlCarousel({
loop:true,
margin:10,
dots:false,
autoplay:true,
nav:true,
navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
responsive:{
  0:{
      items:1
  },
  600:{
      items:1
  },
  1000:{
      items:1
  }
}
})
$('.blog-slider-six  .owl-carousel').owlCarousel({
loop:true,
margin:10,
dots:true,
autoplay:true,
responsive:{
  0:{
      items:1
  },
  600:{
      items:1
  },
  1000:{
      items:1
  }
}
})







// Clent page js
$('.clientOneSlider .owl-carousel').owlCarousel({
  loop: true,
  margin: 10,
  autoplay:false,
  responsiveClass: true,
  navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
  responsive: {
    0: {
      items: 1,
      nav: true
    },
    600: {
      items: 3,
      nav: true
    },
    1000: {
      items: 4,
      nav: true,
      loop: true,
      margin: 20
    }
  }
});

// -------------------------------------------------------------
//  clientThreeSlider
// -------------------------------------------------------------
$('.clientThreeSlider .owl-carousel').owlCarousel({
  loop: true,
  margin: 10,
  autoplay:false,
  responsiveClass: true,
  navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
  responsive: {
    0: {
      items: 2,
      nav: true
    },
    600: {
      items: 4,
      nav: true
    },
    1000: {
      items: 6,
      nav: true,
      loop: true,
      margin: 20
    }
  }
});

// -------------------------------------------------------------
//  clientFiveSlider
// -------------------------------------------------------------
$('.clientFiveSlider .owl-carousel').owlCarousel({
  loop: true,
  margin: 10,
  autoplay:false,
  responsiveClass: true,
  navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
  responsive: {
    0: {
      items: 1,
      nav: true
    },
    600: {
      items: 3,
      nav: true
    },
    1000: {
      items: 4,
      nav: true,
      loop: true,
      margin: 20
    }
  }
});


// JQuery end

// blog js


//-------------Progress bar section-13-a------------//
 
$( document ).ready(function() {
          

  //------ progress bar js -----//
var wind = $(window);
        $(".loading").fadeOut(500);
    
    
        wind.on('scroll', function () {
            $(" .skills-progress span").each(function () {
                var bottom_of_object = 
                $(this).offset().top + $(this).outerHeight();
                var bottom_of_window = 
                $(window).scrollTop() + $(window).height();
                var myVal = $(this).attr('data-value');
                if(bottom_of_window > bottom_of_object) {
                    $(this).css({
                      width : myVal
                    });
                }
            });
        });
  
        $(".ps-section-4 .skills-progress span").each(function () {
          var bottom_of_object = 
          $(this).offset().top + $(this).outerHeight();
          var bottom_of_window = 
          $(window).scrollTop() + $(window).height();
          var myVal = $(this).attr('data-value');
          if(bottom_of_window > bottom_of_object) {
              $(this).css({
                width : myVal
              });
          }
      });
//
// -------------------------------------------------------------





//-------------Progress bar section-13-a------------//

//------------------------ OWL JS Start --------------------//

$('.slider-1 .owl-carousel').owlCarousel({
loop: true,
margin: 40,
autoplay: true,
autoplayTimeout: 2000,
autoplayHoverPause: true,
navText : ['<i class="fas fa-circle"></i>','<i class="fas fa-circle"></i>'],
responsive: {
    0: {
        items: 1
    },
    480: {
        items: 1,
        margin: 20
    },
    600: {
        items: 2,
        margin: 20
    },
    1000: {
        items: 4
    }
}
})
//------------------------second slider js--------------------//

$('.slider-2 .owl-carousel').owlCarousel({
loop: true,
margin: 40,
autoplay: true,
autoplayTimeout: 2000,
autoplayHoverPause: true,
responsive: {
    0: {
        items: 4
    },
    600: {
        items: 4
    },
    1000: {
        items: 7
    }
}
})
//------------------------second slider js--------------------//

$('.slider-3 .owl-carousel').owlCarousel({
loop: true,
margin: 20,
nav:true,
navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
responsive: {
    0: {
        items: 1
    },
    480: {
        items: 1,
        margin: 20
    },
    600: {
        items: 3
    },
    1000: {
        items: 5
    }
}
})
 //------------------------ four slider js--------------------//

 $('.slider-5 .owl-carousel').owlCarousel({
    loop: true,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    navText : ['<i class="fas fa-circle"></i>','<i class="fas fa-circle"></i>'],
    responsive: {
        0: {
            items: 1
        },
        480: {
            items: 1,
           
        },
        600: {
            items: 3,
            
        },
        1000: {
            items: 5
        }
    }
})
//------------------------ seven slider js--------------------//

$('.slider-7 .owl-carousel').owlCarousel({
loop: true,
autoplay: true,
autoplayTimeout: 2000,
autoplayHoverPause: true,
responsive: {
    0: {
        items: 1
    },
    480: {
        items: 1,
       
    },
    600: {
        items: 3,
        
    },
    1000: {
        items: 5
    }
}
})
//------------------------ seven slider js--------------------//

$('.slider-9 .owl-carousel').owlCarousel({
loop: true,
autoplay: true,
margin:20,
autoplayTimeout: 2000,
autoplayHoverPause: true,
responsive: {
    0: {
        items: 1
    },
    480: {
        items: 1,
       
    },
    600: {
        items: 2,
        
    },
    1000: {
        items: 4
    }
}
})
//------------------------ seven slider js--------------------//

$('.slider-10 .owl-carousel').owlCarousel({
loop: true,
autoplay: true,
autoplayTimeout: 2000,
autoplayHoverPause: true,
responsive: {
0: {
    items: 1
},
480: {
    items: 1,
   
},
600: {
    items: 2,
    
},
1000: {
    items: 4
}
}
})
//------------- 12 slider js--------------//
$('.slider-12 .owl-carousel').owlCarousel({
stagePadding: 50,
loop:true,
margin:10,
nav:true,
navText : ['<i class="fas fa-circle"></i>','<i class="fas fa-circle"></i>'],
responsive:{
0:{
    items:1
},
480: {
    items: 1
   
},
600:{
    items:3
},
1000:{
    items:6
}
}
})
//------------- 13 slider js--------------//
$('.slider-13 .owl-carousel').owlCarousel({
stagePadding: 50,
loop:true,
margin:10,
nav:true,
navText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
responsive:{
0:{
    items:1
},
480: {
    items: 1
   
},
600:{
    items:3
},
1000:{
    items:6
}
}
})

});

// testimonial page js 
/*section-1 slider js */
$(document).ready(function() {
    $('.section1_slider_wrapper .owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      autoplay:true,
      responsiveClass: true,
      navText : ['<i class="fa fa-angle-double-left" aria-hidden="true"></i>','<i class="fa fa-angle-double-right" aria-hidden="true"></i>'],
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        600: {
          items: 2,
          nav: true
        },
        1000: {
          items: 3,
          nav: true,
          loop: true,
          margin: 20
        }
      }
    })
})

/*section-2 slider js */	
$(document).ready(function() {
$('.section2_slider_wrapper .owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      autoplay:false,
      responsiveClass: true,
      navText : ['<i class="fa fa-angle-double-left" aria-hidden="true"></i>','<i class="fa fa-angle-double-right" aria-hidden="true"></i>'],
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        600: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true,
          loop: true,
          margin: 20
        }
      }
})
})

/*section-3 slider js */
$(document).ready(function() {
    $('.section3_slider_wrapper .owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      autoplay:true,
      responsiveClass: true,
      navText : ['<i class="fa fa-angle-double-left" aria-hidden="true"></i>','<i class="fa fa-angle-double-right" aria-hidden="true"></i>'],
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        600: {
          items: 2,
          nav: true
        },
        1000: {
          items: 2,
          nav: true,
          loop: true,
          margin: 20
        }
      }
  })
})

/*section-4 slider js */
$(document).ready(function() {
$('.section4_testimonial_info .owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
              autoplay:true,
      responsiveClass: true,
      navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        600: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true,
          loop: true,
          margin: 20
        }
      }
  })
})


/*section-5 slider js */
$(document).ready(function() {
    $('.section5_slider_wrapper .owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      autoplay:false,
      responsiveClass: true,
      navText : ['<i class="fa fa-long-arrow-left" aria-hidden="true"></i>','<i class="fa fa-long-arrow-right" aria-hidden="true"></i>'],
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        600: {
          items: 2,
          nav: true
        },
        1000: {
          items: 3,
          nav: true,
          loop: true,
          margin: 20
        }
      }
    })
  })		
// team page js
/* section1_team_slider js */
$(document).ready(function() {
    $('.section1_team_slider .owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      autoplay:false,
      responsiveClass: true,
      navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        600: {
          items: 2,
          nav: true
        },
        1000: {
          items: 3,
          nav: true,
          loop: true,
          margin: 20
        }
      }
    })
  })		
  
/* section2_team_slider js */
$(document).ready(function() {
    $('.section2_team_slider .owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      autoplay:true,
      responsiveClass: true,
      navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        600: {
          items: 2,
          nav: true
        },
        1000: {
          items: 3,
          nav: true,
          loop: true,
          margin: 20
        }
      }
    })
  })		
  
/* section4_team_slider js */
$(document).ready(function() {
    $('.section4_team_slider .owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      autoplay:false,
      responsiveClass: true,
      navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        600: {
          items: 2,
          nav: true
        },
        1000: {
          items: 4,
          nav: true,
          loop: true,
          margin: 20
        }
      }
    })
  })
  
/* section5_team_slider js */
$(document).ready(function() {
    $('.section5_team_slider .owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      autoplay:false,
      responsiveClass: true,
      navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        600: {
          items: 1,
          nav: true
        },
        1000: {
          items: 4,
          nav: true,
          loop: true,
          margin: 20
        }
      }
    })
  })	

// light box js
/* section-1 lightbox js */
			
$('.portfolio_img_text').magnificPopup({
    delegate: '.search',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0,1]
    },
    image: {
        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
        titleSrc: function(item) {
            return item.el.attr('title') + '<small></small>';
        }
    }
})


/* section-2 lightbox js */

$('#all').magnificPopup({
    delegate: '.search_link',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0,1]
    },
    image: {
        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
        titleSrc: function(item) {
            return item.el.attr('title') + '<small></small>';
        }
    }
});

$('#web').magnificPopup({
    delegate: '.search_link',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0,1]
    },
    image: {
        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
        titleSrc: function(item) {
            return item.el.attr('title') + '<small></small>';
        }
    }
});

$('#UI').magnificPopup({
    delegate: '.search_link',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0,1]
    },
    image: {
        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
        titleSrc: function(item) {
            return item.el.attr('title') + '<small></small>';
        }
    }
});

$('#creative').magnificPopup({
    delegate: '.search_link',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0,1]
    },
    image: {
        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
        titleSrc: function(item) {
            return item.el.attr('title') + '<small></small>';
        }
    }
});

$('#graphics').magnificPopup({
    delegate: '.search_link',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0,1]
    },
    image: {
        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
        titleSrc: function(item) {
            return item.el.attr('title') + '<small></small>';
        }
    }
});

$('#mockup').magnificPopup({
    delegate: '.search_link',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0,1]
    },
    image: {
        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
        titleSrc: function(item) {
            return item.el.attr('title') + '<small></small>';
        }
    }
});

/* section-4 lightbox js */

$('.portfolio_img_icon').magnificPopup({
    delegate: '.zoom_link',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0,1]
    },
    image: {
        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
        titleSrc: function(item) {
            return item.el.attr('title') + '<small></small>';
        }
    }
});
 
//   portfolio page js start
/* section4_portfolio_slider js */
$(document).ready(function() {
    $('.section4_portfolio_slider .owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      autoplay:false,
      responsiveClass: true,
      navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        600: {
          items: 2,
          nav: true
        },
        1000: {
          items: 5,
          nav: true,
          loop: true,
          margin: 20
        }
      }
    })
  })	
  
/* section5_portfolio_slider js */
$(document).ready(function() {
    $('.section5_portfolio_slider .owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      autoplay:false,
      responsiveClass: true,
      navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        600: {
          items: 2,
          nav: true
        },
        1000: {
          items: 3,
          nav: true,
          loop: true,
          margin: 20
        }
      }
    })
  })		




// Clent page js
$('.clientOneSlider .owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    autoplay:false,
    responsiveClass: true,
    navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
    responsive: {
      0: {
        items: 1,
        nav: true
      },
      600: {
        items: 3,
        nav: true
      },
      1000: {
        items: 4,
        nav: true,
        loop: true,
        margin: 20
      }
    }
  });

// -------------------------------------------------------------
//  clientThreeSlider
// -------------------------------------------------------------
$('.clientThreeSlider .owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    autoplay:false,
    responsiveClass: true,
    navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
    responsive: {
      0: {
        items: 2,
        nav: true
      },
      600: {
        items: 4,
        nav: true
      },
      1000: {
        items: 6,
        nav: true,
        loop: true,
        margin: 20
      }
    }
  });

// -------------------------------------------------------------
//  clientFiveSlider
// -------------------------------------------------------------
$('.clientFiveSlider .owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    autoplay:false,
    responsiveClass: true,
    navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
    responsive: {
      0: {
        items: 1,
        nav: true
      },
      600: {
        items: 3,
        nav: true
      },
      1000: {
        items: 4,
        nav: true,
        loop: true,
        margin: 20
      }
    }
  });


 // JQuery end



});

