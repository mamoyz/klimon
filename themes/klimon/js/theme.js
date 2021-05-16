$(document).ready(function () {
  $(window).on('load',function () {
    $(".autoplayed").addClass("init");
    $("header nav").addClass("init");
    $.each($(".mexican strong"), function () {
      $(this).html(
        $(this)
          .text()
          .replace(/([^ ])/g, "<span>$&</span>")
      );
      let letters = $(this).find("span");
      for (var i = 0; i < letters.length; i++) {
        letters.eq(i).css({ "animation-delay": i * 50 + "ms" });
      }
    });

    var animationTriggerPoint = 70;
    if ($(window).innerWidth() / $(window).innerHeight() < 1.25) {
      animationTriggerPoint = 50;
    }

    $(window).on("scroll", function () {
      if (
        $(window).scrollTop() + $(window).height() + 50 >=
        $(document).height()
      ) {
        $(".yz-animation-trigger-bottom").addClass("init");
      } else {
        $(".yz-animation-trigger-bottom").removeClass("init");
      }

      $.each($(".yz-animation"), function () {
        if (
          $(window).scrollTop() +
            $(window).innerHeight() * animationTriggerPoint * 0.01 >
          $(this).offset().top
        ) {
          $(this).addClass("init");
        } else {
          $(this).removeClass("init");
        }
      });
    });

    $(".menu-btn").click(function (e) {
      e.preventDefault();
      $(this).toggleClass("collapsed");
      $("body").toggleClass("menu-in");
      $("nav").toggleClass("collapsed");
      $("nav").toggleClass("meltUp");
    });
    if ($(".flavors-carousel")) {
      $(".flavors-carousel").owlCarousel({
        margin: 50,
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: false,
        items: 3,
        responsiveClass: true,
        responsive: {
          0: {
            items: 2,
            margin: 10,
          },
          961: {
            items: 3,
          },
        },
        nav: true,
        navText: ["<img src='images/prev.svg'>", "<img src='images/next.svg'>"],
      });
    }
    if ($(".about-carousel")) {
      $(".about-carousel").owlCarousel({
        margin: 50,
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: false,
        items: 3,
        responsiveClass: true,
        responsive: {
          0: {
            items: 2,
            margin: 10,
          },
          961: {
            items: 3,
          },
        },
        nav: true,
        navText: [
          "<img src='images/prev-i.svg'>",
          "<img src='images/next-i.svg'>",
        ],
      });
    }
  });
});
