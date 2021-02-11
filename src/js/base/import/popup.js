import magnificPopup from 'magnific-popup';


$('.open-popup-link-js').magnificPopup({
  type: 'inline',
  midClick: true,
  showCloseBtn: false,
  mainClass: 'mfp-fade',
  removalDelay: 200,
});

$('.popup-close-js').on("click", function(){
  $.magnificPopup.close();
});