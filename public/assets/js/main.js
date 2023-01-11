
//testimonial slider
$('.testimonialCarousel').slick({
    infinite: true,
    slidesToShow: 2,
    margin: 10,
    slidesToScroll: 1,
    // autoplay: true,
    dots: false,
    arrows: true,
    responsive: [{
            breakpoint: 1099,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 900,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
            }
        },
    ]
});




// industry we serve
$(document).ready(function(){
    $('.industry-we-surve-slider').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:true,
        autoplay:true,
        // navText: ["<i class='fa-solid fa-chevron-left'></i>", "<i class='fa-solid fa-chevron-right'></i>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1300:{
                items:4
            },
            1500:{
                items:4
            }
        }
      })
});


//   clientCarousel

$(document).ready(function(){
    $('.clientCarousel').owlCarousel({
        loop:true,
        center: true,
        margin:10,
        autoplay:true,
        autoplayTimeout:5000,
        responsiveClass:true,
        autoplayHoverPause: true,
        navText: ["<i class='fa-solid fa-chevron-left'></i>","<i class='fa-solid fa-chevron-right'></i>"],
        responsive:{
            0:{
                items:1,
                nav:false
            },
            600:{
                items:3,
                nav:true
            },
            1000:{
                items:5,
                nav:true,
                autoplay:true
            }
        }
    })
  })
  
  // testimonial carousel


