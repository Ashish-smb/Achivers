<!-- jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- owl carousel js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- bootstrap bundle js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>

<script>
    // PRODUCT CAOUSEL
    const prd_carousel = $(".product-carousel");
    prd_carousel.owlCarousel({
        items:4,
        autoplay:true,
        margin :20,
        loop:true,
        autoplayTimeout:3000,
        autoplayHoverPause: true,
        responsive : {
            0: {
                items:1
            },
            500: {
                items:2
            },
            900: {
                items:3
            }
        }
    })
    // TESTIMONIAL CAROUSEL
    $(".testimonial").owlCarousel({
        items: 1,
        autoplay:true,
        loop : true,
        autoplayHoverPause: true,
        dots:true
    })

    // JQUERY SCRIPT
    $('#product-prev').click(function () {
        prd_carousel.trigger('prev.owl.carousel');
    });
    $('#product-next').click(function() {
        prd_carousel.trigger('next.owl.carousel');
    });


</script>