import Slick from 'slick-carousel';
$('.slider-js').slick({
  slidesToShow: 3,
  rows: 0,
  arrows: false,
  responsive: [
    //lg
    {
      breakpoint: 1199.98,
      settings: {
        slidesToShow: 3,
      }
      
    },
    //md
    {
      breakpoint: 991.98,
      settings: {
        slidesToShow: 2,
      }
    },
    //sm
    {
      breakpoint: 767.98,
      settings: {
        slidesToShow: 1,
      }
    },
    //xs
    {
      breakpoint: 575.98,
      settings: {
        slidesToShow: 1,
      }
    },
  ]
});