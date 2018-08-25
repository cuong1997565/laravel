$('.slide').owlCarousel({
    loop: true,
    nav: false,
    dots: false,
    responsive: {
        0: {
            items:1
        },
        600: {
            items:1
        },
        1000: {
            items:1,
            nav: false
        }
    }
});

$('.abum').owlCarousel({
    loop: true,
    nav: false,
    dots: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 2,
            nav: false
        }
    }
});

   $('.abum-1-slide').owlCarousel({
    loop: true,
    nav: false,
    dots: false,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 3,
             nav: false

        }
    }
});

$(document).ready(function(){
$("#clickme").click(function(){
$(".group").toggle();
$("#menu1").toggle();
});

});
