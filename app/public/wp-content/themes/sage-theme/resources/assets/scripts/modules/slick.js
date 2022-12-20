$(".carousel").slick({
  prevArrow: '<span class="slick-prev icomoon icon-chevron-left"></span>',
  nextArrow: '<span class="slick-next icomoon icon-chevron-right"></span>',
});
$(".certi-slick").slick({
  prevArrow: $(".certi-btn-prev"),
  nextArrow: $(".certi-btn-next"),
});
$(".trust-slick").slick({
  infinite: true,
  slidesToShow: 6,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 1000,
  prevArrow: $(".trust-btn-prev"),
  nextArrow: $(".trust-btn-next"),
  responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 4,
      },
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 5,
      },
    },
  ],
});
