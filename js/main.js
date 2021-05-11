$(function () {
	var mySwiper = new Swiper(".swiper-container", {
		slidesPerView: "auto",
		freeMode: true,
		false: true,
		navigation: {
			nextEl: ".swiper-btn-next",
			prevEl: ".swiper-btn-prev",
		},
	});
	let autoSlide;
	let animationTriggerPoint = 70;
	if ($(window).innerWidth() / $(window).innerHeight() < 1.25) {
		animationTriggerPoint = 80;
	}

	$(window).on("load", function () {
		console.error(`
		
		

			█▄▀ █░░ █ █▀▄▀█ █▀█ █▄░█
			█░█ █▄▄ █ █░▀░█ █▄█ █░▀█		
		
		

		`);

		let preloaderVisited = localStorage.getItem("preloaderVisited");
		let slideshowDelay, introDelay, preloaderDuration;
		if (preloaderVisited && window.location.pathname != "/") {
			introDelay = 100;
			slideshowDelay = 1200;
			setTimeout(function () {
				$(window).scrollTop(0);
				$("#preloader").addClass("loaded");
				$("#preloader").fadeOut(0);
			}, 0);
		} else {
			introDelay = 3000;
			preloaderDuration = 3000;
			slideshowDelay = 4000;
			setTimeout(function () {
				$(window).scrollTop(0);
				$(window).scrollTop(0);
				$("#preloader").addClass("loaded");
			}, 10);
			setTimeout(function () {
				$("#preloader").fadeOut(500);
			}, preloaderDuration);
			localStorage.setItem("preloaderVisited", true);
		}

		setTimeout(function () {
			$(".slide-in.auto").addClass("show");
			if ($(window).innerWidth() < 961) {
				$(".slide-in.auto-mobile").addClass("show");
			}
			$(".yz-animate.auto").addClass("init");
		}, introDelay);
		setTimeout(function () {
			let slides = $(".home-hero .hero-right .slideshow-item").length;
			let dots = "";
			for (let i = 0; i < slides; i++) {
				if (i == 0) {
					dots += "<span class='active'></span>";
				} else {
					dots += "<span></span>";
				}
			}
			$(".slideshow-dots").html(dots);
			$(".home-hero .hero-right .slideshow-item").eq(0).addClass("active show");
			autoSlide = setInterval(() => {
				slideShowNext();
			}, 5200);
		}, slideshowDelay);
	});
	$(window).scroll(function (e) {
		let wTop = $(this).scrollTop();
		let wHeight = $(this).innerHeight();
		let offset = wTop + wHeight;
		if ($(".home-hero.klimon-hero").length > 0) {
			if (wTop < $(".home-hero.klimon-hero").offset().top + $(".home-hero.klimon-hero").innerHeight()) {
				$(".home-hero .hero-right .slideshow-container").css({
					transform: "translate(0," + parseInt((wTop / $(".home-hero.klimon-hero").innerHeight()) * 150) + "px)",
				});
			}
		}
		$.each($(".slide-in"), function () {
			let thisTop = $(this).offset().top;
			if (thisTop < offset) {
				$(this).addClass("show");
			}
		});
		$.each($(".parallax-bg.parallax"), function () {
			let parallaxTop = $(this).offset().top;
			let scale = $(this).data("scale") || 150;
			if (parallaxTop < offset) {
				if ($(window).innerWidth() < 961) {
					$(this).css({
						"background-position": ((scale - 100) / 2) * -1 + "vw " + (parallaxTop - offset) * 0.07 + "px",
					});
				} else {
					$(this).css({ "background-size": scale + "%" });
					$(this).css({
						"background-position": ((scale - 100) / 2) * -1 + "vw " + (parallaxTop - offset) * 0.15 + "px",
					});
				}
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
		if ($(".home-content .home-content-desc h2, .about-no-dairy-mobile h2").length > 0) {
			$.each($(".home-content .home-content-desc h2,.about-no-dairy-mobile h2"), function () {
				if ($(this).offset().top < offset) {
					let asasd = offset - $(this).offset().top;
					$(this).css({
						transform: "translateX(" + (asasd / wHeight) * -100 + "%)",
					});
				}
			});
		}
		if ($(".products-no-dairy h2").length > 0) {
			$.each($(".products-no-dairy h2"), function () {
				let trigger = $(window).innerWidth() > 960 ? 300 : 0;
				if ($(this).offset().top < offset - trigger) {
					console.log(trigger);

					let asasd = offset - $(this).offset().top;
					$(this).css({
						transform: "translateX(" + (asasd / wHeight) * -100 + "%)",
					});
				}
			});
		}
		$.each($(".yz-animate:not(.auto)"), function () {
			if ($(window).scrollTop() + $(window).innerHeight() * animationTriggerPoint * 0.01 > $(this).offset().top) {
				$(this).addClass("init");
			} else {
				// $(this).removeClass("init");
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
	$(document).on("click", ".slideshow-dots span", function () {
		let index = $(this).index();
		goToSlide(index);
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
		$(activeSlide).removeClass("show");
		setTimeout(() => {
			$(activeSlide).removeClass("active");
		}, 1000);
		$(".slideshow-dots span").removeClass("active");

		if (totalSlides - activeSlideIndex == 1) {
			$(".home-hero .hero-right .slideshow-item").eq(0).addClass("active show");
			$(".slideshow-dots span").eq(0).addClass("active");
		} else {
			$(activeSlide).next(".slideshow-item").addClass("active show");
			$(".slideshow-dots span")
				.eq(activeSlideIndex + 1)
				.addClass("active");
		}
	}
	function slideShowPrev() {
		let totalSlides = $(".home-hero .hero-right .slideshow-item").length;
		let activeSlide = $(".home-hero .hero-right .slideshow-item.active");
		let activeSlideIndex = $(".home-hero .hero-right .slideshow-item.active").index();
		$(".slideshow-dots span").removeClass("active");
		// console.log(activeSlideIndex, totalSlides);
		$(activeSlide).removeClass("show").removeClass("active");

		if (activeSlideIndex == 0) {
			$(".home-hero .hero-right .slideshow-item")
				.eq(totalSlides - 1)
				.addClass("active");
		} else {
			$(activeSlide).prev(".slideshow-item").addClass("active").addClass("show");
		}
		$(".slideshow-dots span").eq($(".home-hero .hero-right .slideshow-item.active").index()).addClass("active");
	}
	function goToSlide(index) {
		let activeSlide = $(".home-hero .hero-right .slideshow-item.active");
		$(".slideshow-dots span").removeClass("active");
		$(".slideshow-dots span").eq(index).addClass("active");
		$(activeSlide).removeClass("show");
		setTimeout(() => {
			$(activeSlide).removeClass("active");
		}, 1000);
		$(".home-hero .hero-right .slideshow-item").eq(index).addClass("show active");
		clearInterval(autoSlide);
		autoSlide = setInterval(() => {
			slideShowNext();
		}, 5200);
	}
});
