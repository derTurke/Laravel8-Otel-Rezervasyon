$('.owl-one').owlCarousel({

    loop:true,
    margin:20,
    nav:false,
    autoplay: true,
    autoplayTimeout: 4000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})

$('.owl-two').owlCarousel({
    loop:true,
    margin:30,
    nav:false,
    autoplay: true,
    autoplayTimeout: 4000,
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