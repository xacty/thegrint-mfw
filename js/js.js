function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
    //document.getElementById("header").style.marginLeft = "250px";
  }

  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    //document.getElementById("header").style.marginLeft= "0";
  };
  $(document).ready(function() {
    //caches a jQuery object containing the header element
    var header = $("header");
    var scroll = $(window).scrollTop();

    if (scroll >= 90) {
      header.addClass("effect-header");
    } else {
      header.removeClass("effect-header");
    }

    $(window).scroll(function() {
      var scroll = $(window).scrollTop();
      if (scroll >= 90) {
        header.addClass("effect-header");
      } else {
        header.removeClass("effect-header");
      }
    });

  });
var counter = 1;
setInterval(function() {
  var c = counter % $('.loop').length;
  $('.loop').removeClass('active');
  $('.loop').eq(c).addClass('active');
  ++counter
}, 2500);