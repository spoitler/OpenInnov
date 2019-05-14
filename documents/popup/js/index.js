$(document).ready(function() {
  $('.popup-btn').click(function(e) {

     $('.popup-box').css("z-index", "1").removeClass('transform-out').addClass('transform-in');
    // $('.popup-wrap').fadeIn(500);
    $('.test').delay(70).fadeIn(500);
    $('.cache').fadeIn(500);
    e.preventDefault();
  });

  $('.popup-close').click(function(e) {
     $('.popup-box').delay(500).css("z-index","0").removeClass('transform-in').addClass('transform-out');    //peut etre un delay la
     $('.popup-box1').delay(500).css("z-index", "0").removeClass('transform-in').addClass('transform-out');  //peut etre un delay la
     $('.cache').fadeOut(100);
     $('.test').delay().fadeOut(500);  //peut etre un delay la
     $('.popup-wrap').fadeOut(500);
     $('.cache').fadeOut(500);


    e.preventDefault();
  });


  $('.popup-btn1').click(function(e) {
     $('.popup-box1').css("z-index", "1").removeClass('transform-out').addClass('transform-in');
    $('.popup-wrap').fadeIn(500);
    $('.test').delay(70).fadeIn(500);
    $('.cache').fadeIn(500);


    e.preventDefault();
  });
});
