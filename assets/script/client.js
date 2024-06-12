var swiper = new Swiper(".mySwiper", {
	direction: "vertical",
	pagination: {
	  el: ".swiper-pagination",
	  clickable: true,
	},
	spaceBetween: 50, // Increase spacing between slides
  });

  var swiperContainer = document.getElementById('swiper-container');

  swiperContainer.addEventListener('mouseenter', function () {
	window.addEventListener('wheel', onScroll, { passive: false });
  });

  swiperContainer.addEventListener('mouseleave', function () {
	window.removeEventListener('wheel', onScroll, { passive: false });
  });

  function onScroll(event) {
	if (event.deltaY > 0) {
	  swiper.slideNext();
	} else {
	  swiper.slidePrev();
	}
	event.preventDefault();
  }