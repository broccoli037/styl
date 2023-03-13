$(document).ready(function() {

    // Header Fixed on Scroll
    $(window).on("load resize scroll", function() {
        var sticky = $(".header"),
            scroll = $(window).scrollTop();

        if (scroll >= 150) sticky.addClass("fixed-header ");
        else sticky.removeClass("fixed-header");
    });

    $('.fa-bars').click(function() {
        $(".navbar-nav").toggleClass('active');
    })


    // slick for Banner Section
    $(".banner .slider").slick({
        centerMode: false,
        arrows: true,
        autoplay: true,
        prevArrow: "<span class='slick-arrow left'><i class='icon icon-arrow-left'></i></slick>",
        nextArrow: "<span class='slick-arrow right'><i class='icon icon-arrow-right'></i></slick>",
        slidesToShow: 1,
        dots: false,
        autoplaySpeed: 4000
    });

    $(window).resize(function() {
        $(".banner .slider").slick("resize");
    });


});