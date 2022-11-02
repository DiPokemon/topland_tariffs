$('.cloud_tag_slider').slick({
    autoplay: true,
    dots: false,
    arrows: false,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 460,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        },
    ],
});