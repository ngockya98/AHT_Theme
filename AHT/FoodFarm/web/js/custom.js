 require(["jquery","owlCarousel"],function($,owlCarousel) {
        $(document).ready(function() {
            $('#test1').owlCarousel({
                 nav:true,
                dots:true,
                loop:true,
                margin:5,
                responsive:{
                    0:{
                        items:2
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:4
                    }
                }
            })
        });
    });