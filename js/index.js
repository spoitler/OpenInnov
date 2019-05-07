$(document).ready(function() {
   var id = "";
   var pos = "";
  $('.popup-btn').click(function(e) {
     id = $(this).attr('id');
     // alert($(this).attr('id'));
     // alert('.popup-box'+id);
     $('.popup-box'+id).css("z-index", "1").delay(1000).removeClass('transform-out').addClass('transform-in');
     $('.overlay').delay(70).fadeIn(500);
     $('.cache'+id).fadeIn(500);
     e.preventDefault();
  });

  $('.popup-close').click(function(e) {
     $('.overlay').delay(70).fadeOut(500);  //peut etre un delay la
     $('.popup-box'+id).css("z-index","").removeClass('transform-in').addClass('transform-out');    //peut etre un delay la
     $('.cache'+id).fadeOut(70);
     e.preventDefault();
  });

  // $('.popup-btn1').click(function(e) {
  //    $('.popup-box1').css("z-index", "1").removeClass('transform-out').addClass('transform-in');
  //    $('.test').delay(70).fadeIn(500);
  //    $('.cache').fadeIn(500);
  //   e.preventDefault();
  // });

//   $('.popup-btn2').click(function(e) {
//      $('.popup-box2').css("z-index", "1").removeClass('transform-out').addClass('transform-in');
//      $('.test').delay(70).fadeIn(500);
//      $('.cache').fadeIn(500);
//     e.preventDefault();
//   });
 });
