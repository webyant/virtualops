$(document).ready(function() {
    $(window).scroll(function() {
        var height = $(window).scrollTop();
        if (height > 300) {
            $(".site-header").addClass("headerup animate__animated animate__fadeInDown");
        } else {
            $(".site-header").removeClass("headerup animate__animated animate__fadeInDown");
        }
    });
    new WOW().init();

    $('.slider').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true
    });
    $('.marketing__slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 6000,
        arrows: false,
        pauseOnHover: false
    });
    $(function() {
        var title = $(".accordian__block h4");
        title
            .on("click", function() {
                var ThisIt = $(this);
                $(".accordian__block h4").not(ThisIt).removeClass("active");
                $(this).toggleClass("active");
                $(".accordian__content").not(ThisIt.next(".accordian__content")).slideUp(400);
                ThisIt.next(".accordian__content").slideToggle(400);
            })
    });
});