$(document).ready(function(){
  $(window).scroll(function(){
      var scroll = $(window).scrollTop();
      if (scroll > 400) {
        $("nav").css("opacity" , "1");
      }

      else{
          $("nav").css("opacity" , "0.8");
      }
  })
})