$(document).ready(function () {
  //mainSwiper
  var mainSwiper = new Swiper(".mainSwiper", {
    spaceBetween: 0,
    centeredSlides: true,
    loop: true,
    // effect: "fade",
    speed: 500,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".mainSwiperPagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".mainSwiperNext",
      prevEl: ".mainSwiperPrev",
    },
  });
  //project Details Slider
  var projectDetailsSlider = new Swiper(".projectDetailsSlider", {
    spaceBetween: 0,
    loop: false,
    // effect: "fade",
    speed: 500,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".projectDetailsSliderPagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".projectDetailsSliderNext",
      prevEl: ".projectDetailsSliderPrev",
    },
  });
  // services slider
  var latestProjectsSlider = new Swiper(".latestProjectsSlider", {
    navigation: {
      nextEl: ".latestProjectsSliderNext",
      prevEl: ".latestProjectsSliderPrev",
    },
    pagination: {
      el: ".latestProjectsSliderPagination",
    },
    loop: true,
    spaceBetween: 24,
    speed: 1000,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      576: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
      1600: {
        slidesPerView: 4,
      },
    },
  });
  $(".latestProjectsSlider").hover(
    function () {
      this.swiper.autoplay.stop();
    },
    function () {
      this.swiper.autoplay.start();
    }
  );
  var topSlider = new Swiper(".topSlider", {
    speed: 1000,
    loop: true,
    effect: "fade",
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
  // nav menu
  $(".navBtn").click(function () {
    $(this).toggleClass("active");
    $(".navMenu").toggleClass("active");
  });
  //navbar ainmation
  $(window).scroll(function () {
    var appScroll = $(document).scrollTop();
    if (appScroll >= 1) {
      $("header").addClass("headerAnimate");
    } else {
      $("header").removeClass("headerAnimate");
    }
  });
  // filter
  $(".advancedSearch ,.moreFeaturesBtn ,.moreFeatures ").hide();
  $(".advancedSearchBtn").click(function () {
    $(".advancedSearch , .moreFeaturesBtn").slideToggle();
    $(".moreFeatures").slideUp();
  });
  $(".moreFeaturesBtn").click(function () {
    $(".moreFeatures").slideToggle();
  });
  // modal
  //////////////////////////////////////////

  $(".modal").hide();
  $(document).on("click", ".reserve , .closeModal", function () {
    $(".modal").toggleClass("showModal");
  });
  //////////////////////////////////////////
  // language
  //////////////////////////////////////////
  $("#englishLanguage").click(function () {
    $("#styleLink").attr("href", "css/styleEN.css");
    localStorage.setItem("language", "english");
  });
  $("#arabicLanguage").click(function () {
    $("#styleLink").attr("href", "css/style.css");
    localStorage.setItem("language", "arabic");
  });
  var savedLanguage = localStorage.getItem("language");
  if (savedLanguage === "english") {
    $("#styleLink").attr("href", "css/styleEN.css");
  } else if (savedLanguage === "arabic") {
    $("#styleLink").attr("href", "css/style.css");
  }
  //////////////////////////////////////////
});
// ////////////////////////////////////////
// ////////////////////////////////////////
// ////////////////////////////////////////
// ////////////////////////////////////////
// ////////////////////////////////////////
// ////////////////////////////////////////
// ////////////////////////////////////////
// ////////////////////////////////////////
// ////////////////////////////////////////
// ////////////////////////////////////////
// ////////////////////////////////////////
// ////////////////////////////////////////
$(document).ready(function () {
  //spinner
  $(".spinner").fadeOut("slow");
  // odometer
  $(".odometer").appear(function (e) {
    var odo = $(".odometer");
    odo.each(function () {
      var countNumber = $(this).attr("data-count");
      $(this).html(countNumber);
    });
  });
  // select2
  $(".select2search").select2();
  $(".select2").select2({
    minimumResultsForSearch: -1,
  });
  // aos
  AOS.init({
    offset: 60,
    delay: 50,
    duration: 1000,
    // easing: "linear",
    once: true,
  });
  //aos Delay
  function aosDelay() {
    var class_ = "mainSection";
    $("section").each(function (i) {
      class_ = $(this).attr("class");
      if (class_) {
        $("." + class_ + " div[data-aos]").each(function (i) {
          var d = 0;
          d = i * 100;
          $(this).attr("data-aos-delay", d);
          d = 0;
        });
      }
    });
  }
  aosDelay();
  // tooltip
  var tooltipTriggerList = [].slice.call(
    document.querySelectorAll('[data-bs-toggle="tooltip"]')
  );
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
  });
});
