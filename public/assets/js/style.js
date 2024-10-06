
/* *****************************************************************************************************************
*                                                                                                                  *
*                                       fixed navbar code code start                                      *
*                                                                                                                  *
********************************************************************************************************************/
// When the user scrolls the page, execute handleScroll
window.onscroll = function() {
    handleScroll();
};

// Get the navbar
var navbar = document.querySelector(".main-nav");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the fixed class to the navbar when you reach its scroll position. Remove "fixed" when you leave the scroll position
function handleScroll() {
    if (window.pageYOffset > sticky) {
        navbar.classList.add("fixed");
    } else {
        navbar.classList.remove("fixed");
    }
    
}

/* *****************************************************************************************************************
*                                                                                                                  *
*                                               fixed navbar code  end                                             *
*                                                                                                                  *
********************************************************************************************************************/
/* *****************************************************************************************************************
*                                                                                                                  *
*                                       writers home page carousel code start                                      *
*                                                                                                                  *
********************************************************************************************************************/
/* *****************************************************************************************************************
*                                                                                                                  *
*                                       writers home page carousel code start                                      *
*                                                                                                                  *
********************************************************************************************************************/
$(document).ready(function() {
    $('.writers-carousel-1').owlCarousel({
        // loop: true,
        margin: 10,
        responsiveClass: true,
        autoplay:true,
        autoplayTimeout: 1000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                nav: true,
                loop: false,
            },
            600: {
                items: 1,
                nav: true,
                loop: false,
            },
            1200: {
                items: 2,
                nav: true,
                loop: false,
                margin: 20
            }
        }
    })
})

/* *****************************************************************************************************************
*                                                                                                                  *
*                                       writers home page carousel code end                                      *
*                                                                                                                  *
********************************************************************************************************************/


/* *****************************************************************************************************************
*                                                                                                                  *
*                                       writers home page carousel code start                                      *
*                                                                                                                  *
********************************************************************************************************************/
$(document).ready(function() {
    var browserWidth = $(window).width();
    if (browserWidth < 1200) {
        console.log('Small screen detected: ' + browserWidth + 'px');
        // Add your code for small screens
        $('.writers-carousel-2').owlCarousel({
            // loop: true,
            margin: 10,
            responsiveClass: true,
            autoplay:true,
            autoplayTimeout: 1000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true,
                    loop: false,
                },
                600: {
                    items: 1,
                    nav: true,
                    loop: false,
                },
                1200: {
                    items: 2,
                    nav: true,
                    loop: false,
                    margin: 20
                }
            }
        })
    }else{
        $('.writers-carousel-2').addClass('writers-desktop')

    }
})

/* *****************************************************************************************************************
*                                                                                                                  *
*                                       writers home page carousel code end                                      *
*                                                                                                                  *
********************************************************************************************************************/



/* *****************************************************************************************************************
*                                                                                                                  *
*                                       samples home page carousel code start                                      *
*                                                                                                                  *
********************************************************************************************************************/
$(document).ready(function() {
    $('.samples-carousel-1').owlCarousel({
        // loop: true,
        margin: 10,
        responsiveClass: true,
        dotData: true,
        dotsData: true,
        dots:true,
        autoplay:false,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                nav: true,
                loop: true,
            },
            600: {
                items: 1,
                nav: true,
                loop: true,
            },
            1200: {
                items: 1,
                nav: true,
                loop: true,
                margin: 20
            }
        }
    })
})
/* *****************************************************************************************************************
*                                                                                                                  *
*                                       samples home page carousel code end                                      *
*                                                                                                                  *
********************************************************************************************************************/
/* *****************************************************************************************************************
*                                                                                                                  *
*                                       samples home page carousel code start                                      *
*                                                                                                                  *
********************************************************************************************************************/
$(document).ready(function() {
    $('.samples-carousel-2').owlCarousel({
        // loop: true,
        margin: 10,
        responsiveClass: true,
        dotData: true,
        dotsData: true,
        dots:true,
        autoplay:false,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                nav: true,
                loop: true,
            },
            600: {
                items: 1,
                nav: true,
                loop: true,
            },
            1200: {
                items: 1,
                nav: true,
                loop: true,
                margin: 20
            }
        }
    })
})
/* *****************************************************************************************************************
*                                                                                                                  *
*                                       samples home page carousel code end                                      *
*                                                                                                                  *
********************************************************************************************************************/



/* *****************************************************************************************************************
*                                                                                                                  *
*                                       testimonials home page carousel code start                                      *
*                                                                                                                  *
********************************************************************************************************************/
$(document).ready(function() {
    $('.testimonials-carousel').owlCarousel({
        // loop: true,
        margin: 10,
        responsiveClass: true,
        dots:false,
        autoplay:false,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                nav: true,
                loop: true,
            },
            600: {
                items: 1,
                nav: true,
                loop: true,
            },
            1200: {
                items: 1,
                nav: true,
                loop: false,
                margin: 20
            }
        }
    })
})
            
/* *****************************************************************************************************************
*                                                                                                                  *
*                                       testimonials home page carousel code end                                      *
*                                                                                                                  *
********************************************************************************************************************/
/* *****************************************************************************************************************
*                                                                                                                  *
*                                       latest-posts-carousel home page carousel code start                                      *
*                                                                                                                  *
********************************************************************************************************************/
$(document).ready(function() {
    $('.latest-posts-carousel').owlCarousel({
        // loop: true,
        margin: 10,
        responsiveClass: true,
        dots:false,
        autoplay:true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                nav: true,
                loop: true,
            },
            600: {
                items: 1,
                nav: true,
                loop: true,
            },
            1200: {
                items: 1,
                nav: true,
                loop: true,
                margin: 20
            }
        }
    })
})
            
/* *****************************************************************************************************************
*                                                                                                                  *
*                                       latest-posts-carousel home page carousel code end                                      *
*                                                                                                                  *
********************************************************************************************************************/
/* *****************************************************************************************************************
*                                                                                                                  *
*                                       writers home page carousel code start                                      *
*                                                                                                                  *
********************************************************************************************************************/
$(document).ready(function() {
    $('.reviews-carousel-1').owlCarousel({
        // loop: true,
        margin: 10,
        responsiveClass: true,
        autoplay:false,
        autoplayTimeout: 1000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                nav: true,
                loop: false,
            },
            600: {
                items: 1,
                nav: true,
                loop: false,
            },
            1200: {
                items: 2,
                nav: true,
                loop: false,
                margin: 20
            }
        }
    })
})

/* *****************************************************************************************************************
*                                                                                                                  *
*                                       writers home page carousel code end                                      *
*                                                                                                                  *
********************************************************************************************************************/