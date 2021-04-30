$(function () {
  var mySwiper = new Swiper(".swiper-container", {
    slidesPerView: "auto",
    freeMode: true,
    loop: true,
    navigation: {
      nextEl: ".swiper-btn-next",
      prevEl: ".swiper-btn-prev",
    },
  });
  let autoSlide;
  let animationTriggerPoint = 70;
  if ($(window).innerWidth() / $(window).innerHeight() < 1.25) {
    animationTriggerPoint = 50;
  }

  $(window).on("load", function () {
    $(".slide-in.auto").addClass("show");
    $(".yz-animate.auto").addClass("init");

    setTimeout(() => {
      $(".home-hero .hero-right .slideshow-item").eq(0).addClass("active show");
      autoSlide = setInterval(() => {
        slideShowNext();
      }, 5200);
    }, 1000);
  });
  $(window).scroll(function (e) {
    let wTop = $(this).scrollTop();
    let wHeight = $(this).innerHeight();
    let offset = wTop + wHeight;
    $.each($(".slide-in"), function () {
      let thisTop = $(this).offset().top;
      if (thisTop < offset) {
        $(this).addClass("show");
      }
    });
    $.each($(".parallax-bg.parallax"), function () {
      let parallaxTop = $(this).offset().top;
      if (parallaxTop < offset) {
        $(this).css({
          "background-position": "0 " + (parallaxTop - offset) * 0.6 + "px",
        });
      }
    });
    $.each($(".home-content .home-content-decor"), function () {
      let decorTop = $(this).offset().top;
      if (decorTop < offset) {
        if ($(this).hasClass("down")) {
          $(this).css({
            transform: "translateY(" + ((offset - decorTop) / wHeight) * 30 + "%)",
          });
        } else {
          $(this).css({
            transform: "translateY(" + ((offset - decorTop) / wHeight) * -30 + "%)",
          });
        }
      }
    });
    $.each($(".klimon-decor.about, .klimon-decor.product-decor"), function () {
      let decorTop = $(this).offset().top;
      if (decorTop < offset) {
        $(this).css({
          transform: "translateY(" + ((offset - decorTop) / wHeight) * 15 + "%)",
        });
      }
    });
    if ($(".home-content .home-content-desc h2").length > 0) {
      if ($(".home-content .home-content-desc h2").offset().top < offset) {
        let asasd = offset - $(".home-content .home-content-desc h2").offset().top;
        $(".home-content .home-content-desc h2").css({
          transform: "translateX(" + (asasd / wHeight) * -100 + "%)",
        });
      }
    }
    if ($(".products-no-dairy h2").length > 0) {
      if ($(".products-no-dairy h2").offset().top < offset - 300) {
        let asasd = offset - $(".products-no-dairy h2").offset().top;
        $(".products-no-dairy h2").css({
          transform: "translateX(" + (asasd / wHeight) * -100 + "%)",
        });
      }
    }
    $.each($(".yz-animate:not(.auto)"), function () {
      if ($(window).scrollTop() + $(window).innerHeight() * animationTriggerPoint * 0.01 > $(this).offset().top) {
        $(this).addClass("init");
      } else {
        $(this).removeClass("init");
      }
    });
  });

  $(".home-hero .hero-right .hero-slideshow-controls button").click(function (e) {
    e.preventDefault();
    if ($(this).hasClass("next")) {
      slideShowNext();
      clearInterval(autoSlide);
      autoSlide = setInterval(() => {
        slideShowNext();
      }, 5200);
    }
    if ($(this).hasClass("prev")) {
      slideShowPrev();
      clearInterval(autoSlide);
      autoSlide = setInterval(() => {
        slideShowNext();
      }, 5200);
    }
  });

  $(".menu-toggle").click(function (e) {
    e.preventDefault();
    $("body").toggleClass("no-overflow");
    $("header nav").toggleClass("open");
    $(this).toggleClass("open");
  });

  function slideShowNext() {
    let totalSlides = $(".home-hero .hero-right .slideshow-item").length;
    let activeSlide = $(".home-hero .hero-right .slideshow-item.active");
    let activeSlideIndex = $(".home-hero .hero-right .slideshow-item.active").index();
    // console.log(activeSlideIndex, totalSlides);
    $(activeSlide).removeClass("show").removeClass("active");

    if (totalSlides - activeSlideIndex == 1) {
      $(".home-hero .hero-right .slideshow-item").eq(0).addClass("active");
    } else {
      $(activeSlide).next(".slideshow-item").addClass("active").addClass("show");
    }
  }
  function slideShowPrev() {
    let totalSlides = $(".home-hero .hero-right .slideshow-item").length;
    let activeSlide = $(".home-hero .hero-right .slideshow-item.active");
    let activeSlideIndex = $(".home-hero .hero-right .slideshow-item.active").index();
    // console.log(activeSlideIndex, totalSlides);
    $(activeSlide).removeClass("show").removeClass("active");

    if (activeSlideIndex == 0) {
      $(".home-hero .hero-right .slideshow-item")
        .eq(totalSlides - 1)
        .addClass("active");
    } else {
      $(activeSlide).prev(".slideshow-item").addClass("active").addClass("show");
    }
  }
});
