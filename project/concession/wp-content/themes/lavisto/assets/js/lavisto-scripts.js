(function ($) {
  "use strict";
  //Loading AOS animation with css class

  //fade animation
  $(".lavisto-fade-up").attr({
    "data-aos": "fade-up",
  });
  $(".lavisto-fade-down").attr({
    "data-aos": "fade-down",
  });
  $(".lavisto-fade-left").attr({
    "data-aos": "fade-left",
  });
  $(".lavisto-fade-right").attr({
    "data-aos": "fade-right",
  });
  $(".lavisto-fade-up-right").attr({
    "data-aos": "fade-up-right",
  });
  $(".lavisto-fade-up-left").attr({
    "data-aos": "fade-up-left",
  });
  $(".lavisto-fade-down-right").attr({
    "data-aos": "fade-down-right",
  });
  $(".lavisto-fade-down-left").attr({
    "data-aos": "fade-down-left",
  });

  //slide animation
  $(".lavisto-slide-left").attr({
    "data-aos": "slide-left",
  });
  $(".lavisto-slide-right").attr({
    "data-aos": "slide-right",
  });
  $(".lavisto-slide-up").attr({
    "data-aos": "slide-up",
  });
  $(".lavisto-slide-down").attr({
    "data-aos": "slide-down",
  });

  //zoom animation
  $(".lavisto-zoom-in").attr({
    "data-aos": "zoom-in",
  });
  $(".lavisto-zoom-in-up").attr({
    "data-aos": "zoom-in-up",
  });
  $(".lavisto-zoom-in-down").attr({
    "data-aos": "zoom-in-down",
  });
  $(".lavisto-zoom-in-left").attr({
    "data-aos": "zoom-in-left",
  });
  $(".lavisto-zoom-in-right").attr({
    "data-aos": "zoom-in-right",
  });
  $(".lavisto-zoom-out").attr({
    "data-aos": "zoom-out",
  });
  $(".lavisto-zoom-out-up").attr({
    "data-aos": "zoom-out-up",
  });
  $(".lavisto-zoom-out-down").attr({
    "data-aos": "zoom-out-down",
  });
  $(".lavisto-zoom-out-left").attr({
    "data-aos": "zoom-out-left",
  });
  $(".lavisto-zoom-out-right").attr({
    "data-aos": "zoom-out-right",
  });

  //flip animation
  $(".lavisto-flip-up").attr({
    "data-aos": "flip-up",
  });
  $(".lavisto-flip-down").attr({
    "data-aos": "flip-down",
  });
  $(".lavisto-flip-left").attr({
    "data-aos": "flip-left",
  });
  $(".lavisto-flip-right").attr({
    "data-aos": "flip-right",
  });

  //animation ease attributes
  $(".lavisto-linear").attr({
    "data-aos-easing": "linear",
  });
  $(".lavisto-ease").attr({
    "data-aos-easing": "ease",
  });
  $(".lavisto-ease-in").attr({
    "data-aos-easing": "ease-in",
  });
  $(".lavisto-ease-in-back").attr({
    "data-aos-easing": "ease-in-back",
  });
  $(".lavisto-ease-out").attr({
    "data-aos-easing": "ease-out",
  });
  $(".lavisto-ease-out-back").attr({
    "data-aos-easing": "ease-out-back",
  });
  $(".lavisto-ease-in-out-back").attr({
    "data-aos-easing": "ease-in-out-back",
  });
  $(".lavisto-ease-in-shine").attr({
    "data-aos-easing": "ease-in-shine",
  });
  $(".lavisto-ease-out-shine").attr({
    "data-aos-easing": "ease-out-shine",
  });
  $(".lavisto-ease-in-out-shine").attr({
    "data-aos-easing": "ease-in-out-shine",
  });
  $(".lavisto-ease-in-quad").attr({
    "data-aos-easing": "ease-in-quad",
  });
  $(".lavisto-ease-out-quad").attr({
    "data-aos-easing": "ease-out-quad",
  });
  $(".lavisto-ease-in-out-quad").attr({
    "data-aos-easing": "ease-in-out-quad",
  });
  $(".lavisto-ease-in-cubic").attr({
    "data-aos-easing": "ease-in-cubic",
  });
  $(".lavisto-ease-out-cubic").attr({
    "data-aos-easing": "ease-out-cubic",
  });
  $(".lavisto-ease-in-out-cubic").attr({
    "data-aos-easing": "ease-in-out-cubic",
  });
  $(".lavisto-ease-in-quart").attr({
    "data-aos-easing": "ease-in-quart",
  });
  $(".lavisto-ease-out-quart").attr({
    "data-aos-easing": "ease-out-quart",
  });
  $(".lavisto-ease-in-out-quart").attr({
    "data-aos-easing": "ease-in-out-quart",
  });

  setTimeout(function () {
    AOS.init({
      once: true,
      duration: 1200,
    });
  }, 100);

  $(window).scroll(function () {
    var scrollTop = $(this).scrollTop();
    var mightyBuildersStickyMenu = $(".lavisto-sticky-menu");
    var mightyBuildersStickyNavigation = $(".lavisto-sticky-navigation");

    if (mightyBuildersStickyMenu.length && scrollTop > 0) {
      mightyBuildersStickyMenu.addClass("sticky-menu-enabled lavisto-zoom-in-up");
    } else {
      mightyBuildersStickyMenu.removeClass("sticky-menu-enabled");
    }
  });
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
      jQuery(".lavisto-scrollto-top a").fadeIn();
    } else {
      jQuery(".lavisto-scrollto-top a").fadeOut();
    }
  });
  jQuery(".lavisto-scrollto-top a").click(function () {
    jQuery("html, body").animate({ scrollTop: 0 }, 600);
    return false;
  });

  // Function to check if an element is in the viewport
  function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return rect.top >= 0 && rect.left >= 0 && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && rect.right <= (window.innerWidth || document.documentElement.clientWidth);
  }

  // Function to start counter animation when element is in viewport
  function startCounterAnimation() {
    $(".lavisto-number-counter")
      .not(".counted")
      .each(function () {
        if (isElementInViewport(this)) {
          var $this = $(this);
          $this
            .addClass("counted")
            .prop("Counter", 0)
            .animate(
              {
                Counter: $this.text(),
              },
              {
                duration: 1000,
                easing: "swing",
                step: function (now) {
                  $this.text(Math.ceil(now));
                },
              }
            );
        }
      });
  }

  // Check if element is in viewport on page load
  $(document).ready(function () {
    startCounterAnimation();
  });

  // Check if element is in viewport on scroll
  $(window).on("scroll", function () {
    startCounterAnimation();
  });
})(jQuery);
