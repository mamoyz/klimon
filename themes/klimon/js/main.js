$(document).ready(function () {
	window.addEventListener("orientationchange", function (event) {
		if (event.target.screen.orientation.angle == 0) {
			window.location.reload();
		}
	});
	if (navigator.userAgent.toLowerCase().indexOf("firefox") > -1) {
		$(".instagram-gallery").addClass("nohover");
		console.log("FireFox Detected!");
	}
	let autoSlide;
	let animationTriggerPoint = 70;
	if (typeof timeTreshold === "undefined" || timeTreshold === null) timeTreshold = 100; //ms
	if (typeof tresholdX === "undefined" || tresholdX === null) tresholdX = 30; //px
	if (typeof tresholdY === "undefined" || tresholdY === null) tresholdY = 30; //px
	var startX, startY;
	var endX, endY;

	var time;
	var totalTime = 0;
	if ($(window).innerWidth() / $(window).innerHeight() < 1.25) {
		animationTriggerPoint = 80;
	}
	let vh = window.innerHeight * 0.01;
	document.documentElement.style.setProperty("--vh", `${vh}px`);
	window.addEventListener("resize", function () {
		let vh = window.innerHeight * 0.01;
		document.documentElement.style.setProperty("--vh", `${vh}px`);
	});
	let fetch = setInterval(() => {
		if (document.readyState == "complete") {
			clearInterval(fetch);
			console.log(`
		
		

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
		}
	}, 300);

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
		// if ($(".home-content .home-content-img").length > 0) {
		// 	if ($(window).innerWidth() > 960) {
		// 		if (wTop + wHeight * 0.7 > $(".home-content .home-content-img").offset().top && wTop < $(".home-content .home-content-img").offset().top + $(".home-content .home-content-img").innerHeight()) {
		// 			$(".home-content .home-content-img > div img").css({
		// 				// transform: "translate(0," + parseInt((wTop / $(".home-content .home-content-img").innerHeight()) * 150) + "px)",
		// 				top: parseFloat((wTop / $(".home-content .home-content-img").innerHeight()) * -5) + "vw",
		// 			});
		// 		}
		// 	}
		// }
		$.each($(".slide-in"), function () {
			let thisTop = $(this).offset().top;
			if (thisTop < offset) {
				$(this).addClass("show");
			}
		});
		$.each($(".parallax-bg.parallax"), function () {
			let parallaxTop = $(this).offset().top;
			let scale = parseInt($(this).data("scale")) || 150;
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

	var mySwiper = new Swiper(".swiper-container", {
		slidesPerView: "auto",
		freeMode: true,
		false: true,
		speed: 1000,
		navigation: {
			nextEl: ".swiper-btn-next",
			prevEl: ".swiper-btn-prev",
		},
		autoplay: {
			delay: 3000,
			disableOnInteraction: true,
		},
	});
	// $(".home-hero .hero-right.home-hero-slideshow .slideshow-container").onSwipe(function (e, autoSlide) {
	// 	if (e.right == true) {
	// 	}
	// 	if (e.left == true) {
	// 		console.log(this, e);

	// 		// console.log(slideShowNext());
	// 		// clearInterval(autoSlide);
	// 		// autoSlide = setInterval(() => {
	// 		// 	slideShowNext();
	// 		// }, 5200);
	// 	}
	// });
	$(".home-hero .hero-right.home-hero-slideshow .slideshow-container").on("touchstart", function (e) {
		//Let's get our touch coordinates
		startX = e.touches[0].clientX;
		startY = e.touches[0].clientY;

		time = setInterval(function () {
			//Let's see how long the swipe lasts.
			totalTime += 10;
		}, 10);
	});

	$(".home-hero .hero-right.home-hero-slideshow .slideshow-container").on("touchend", function (e) {
		endX = e.changedTouches[0].clientX; //This is where touchend coordinates are stored.
		endY = e.changedTouches[0].clientY;

		clearInterval(time); //Let's stop calculating time and free up resources.

		if (totalTime >= timeTreshold) {
			let activeSlideIndex = $(".home-hero .hero-right .slideshow-dots span.active").index();
			if (startX > endX && startX - endX >= tresholdX) {
				//swipe left
				if (activeSlideIndex != $(".home-hero .hero-right .slideshow-dots span").length - 1)
					$(".home-hero .hero-right .slideshow-dots span")
						.eq(activeSlideIndex + 1)
						.click();
			} else if (startX < endX && endX - startX >= tresholdX) {
				//swipe right
				if (activeSlideIndex != 0)
					$(".home-hero .hero-right .slideshow-dots span")
						.eq(activeSlideIndex - 1)
						.click();
			}
		}
		totalTime = 0;
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
