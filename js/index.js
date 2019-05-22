$(document).ready(function() {
   var id = "";
   var pos = "";
   $('.modification').addClass('menu-maj-current');
   $('.candidature').removeClass('menu-maj-current');
   $('.container-modification').css("display","block");
   $('.container-candidature').css("display","none");
  $('.popup-btn').click(function(e) {
     id = $(this).attr('id');
     $('.popup-box'+id).css("z-index", "1").delay(1000).removeClass('transform-out').addClass('transform-in');
     $('.overlay').delay(70).fadeIn(500);
     $('.cache'+id).fadeIn(500);
     $('.cachepopup'+id).css("display","none");
     $('.uncache'+id).css("height","auto");
     $('.membresI'+id).css("position","relative");
  });

  $('.popup-close').click(function(e) {
     $('.overlay').delay(70).fadeOut(500);  //peut etre un delay la
     $('.popup-box'+id).css("z-index","").removeClass('transform-in').addClass('transform-out');    //peut etre un delay la
     $('.cache'+id).fadeOut(70);
     $('.cachepopup'+id).css("display","block");
      $('.uncache'+id).css("height","120px");
      $('.membresI'+id).css("position","absolute");
     e.preventDefault();
  });

  $('.modification').click(function(e) {
     $('.modification').addClass('menu-maj-current');
     $('.candidature').removeClass('menu-maj-current');
     $('.container-modification').css("display","block");
     $('.container-candidature').css("display","none");

     e.preventDefault();
  });

  $('.candidature').click(function(e) {
     $('.candidature').addClass('menu-maj-current');
     $('.modification').removeClass('menu-maj-current');
     $('.container-modification').css("display","none");
     $('.container-candidature').css("display","block");
  });


 });
