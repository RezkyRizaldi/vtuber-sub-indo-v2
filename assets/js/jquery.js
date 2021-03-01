$(window).on("load", function () {
  $("#loader").fadeOut(1500, "linear");
});

$(document).on("ready", function () {
  $(".nav-item .nav-link").on("click", function () {
    $(".navbar-toggle").addClass("collapsed");
    $(".navbar-collapse").removeClass("collapsed");
    $(".navbar-collapse").removeClass("show");
    $(".navbar-collapse").addClass("collapse");
  });
});

// $(".nav-item .nav-link").on("click", function () {
//   $(".navbar-nav").find(".active").removeClass("active");
//   $(this).addClass("active");
// });

$(document).on("scroll", function () {
  var y = $(this).scrollTop();
  if (y > 175) {
    $(".navbar").css("background-color", "#2e9fd1");
    $(".navbar").addClass("shadow");
  } else {
    $(".navbar").css("background-color", "transparent");
    $(".navbar").removeClass("shadow");
  }
});

$(window).on("scroll", function () {
  if ($(this).scrollTop() < $('section[data-anchor="home"]').offset().top) {
    $(".navbar-nav li a").removeClass("active");
  }

  if ($(this).scrollTop() >= $('section[data-anchor="home"]').offset().top) {
    $(".navbar-nav li a").removeClass("active");
    $(".navbar-nav li:eq(0) a").addClass("active");
  }

  if ($(this).scrollTop() >= $('section[data-anchor="about"]').offset().top - 75) {
    $(".navbar-nav li a").removeClass("active");
    $(".navbar-nav li:eq(1) a").addClass("active");
  }

  if ($(this).scrollTop() >= $('section[data-anchor="gallery"]').offset().top - 75) {
    $(".navbar-nav li a").removeClass("active");
    $(".navbar-nav li:eq(2) a").addClass("active");
  }

  if ($(this).scrollTop() >= $('section[data-anchor="contact"]').offset().top - 75) {
    $(".navbar-nav li a").removeClass("active");
    $(".navbar-nav li:eq(3) a").addClass("active");
  }
});

$("#myModal").on("hidden-bs-modal", function () {
  $("#myModal iframe").removeAttr("src");
});
