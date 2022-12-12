$(document).ready(function() {
    // $(window).scroll(function() {
    //     var height = $(window).scrollTop();
    //     if (height > 300) {
    //         $(".site-header").addClass("headerup animate__animated animate__fadeInDown");
    //     } else {
    //         $(".site-header").removeClass("headerup animate__animated animate__fadeInDown");
    //     }
    // });
    new WOW().init();

    $('.slider').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true
    });
});