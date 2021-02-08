import magnificPopup from 'magnific-popup';


$('.open-popup-link-js').magnificPopup({
  type: 'inline',
  midClick: true,
  showCloseBtn: false,
});

$('.popup-close-js').on("click", function(){
  $.magnificPopup.close();
});