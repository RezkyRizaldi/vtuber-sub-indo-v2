$(window).on("load", function () {
  $("#loader").fadeOut(2000, "linear");
  $("html").css("overflow", "auto");
});

$("#myModal").on("hidden-bs-modal", function () {
  $("#myModal iframe").removeAttr("src");
});

$(".nav-item .nav-link").on("click", function () {
  $(".navbar-toggle").addClass("collapsed");
  $(".navbar-collapse").removeClass("collapsed");
  $(".navbar-collapse").removeClass("show");
  $(".navbar-collapse").addClass("collapse");
});

if (window.matchMedia("(max-width: 575.98px)").matches) {
  $(".list-group-item").removeClass("list-group-item-action");
  $(".mobile").addClass("overflow-auto border border-2 border-dark rounded-3");
} else {
  $(".list-group-item").addClass("list-group-item-action");
  $(".mobile").removeClass("overflow-auto border border-2 border-dark rounded-3");
}

$(window).on("resize", function () {
  if (window.matchMedia("(max-width: 575.98px)").matches) {
    $(".list-group-item").removeClass("list-group-item-action");
    $(".mobile").addClass("overflow-auto border border-2 border-dark rounded-3");
  } else {
    $(".list-group-item").addClass("list-group-item-action");
    $(".mobile").removeClass("overflow-auto border border-2 border-dark rounded-3");
  }
});

// $(".nav-item .nav-link").on("click", function () {
//   $(".navbar-nav").find(".active").removeClass("active");
//   $(this).addClass("active");
// });

$(document).on("scroll", function () {
  var y = $(this).scrollTop();
  if (window.matchMedia("(max-width: 575.98px)").matches) {
    if ((y >= 375 && y <= 1750) || (y >= 2300 && y <= 3000)) {
      body.classList.add("white");
      body.classList.remove("blue");
    } else {
      body.classList.add("blue");
      body.classList.remove("white");
    }
  } else {
    if ((y >= 420 && y <= 1475) || (y >= 2175 && y <= 3050)) {
      body.classList.add("white");
      body.classList.remove("blue");
    } else {
      body.classList.add("blue");
      body.classList.remove("white");
    }
  }

  if (y >= 250) {
    $("#back").addClass("show");
    $("#back").removeClass("hide");
  } else {
    $("#back").addClass("hide");
    $("#back").removeClass("show");
  }

  if (y > 175) {
    $(".navbar").css("background-color", "#2e9fd1");
    $(".navbar").addClass("shadow");
  } else {
    $(".navbar").css("background-color", "transparent");
    $(".navbar").removeClass("shadow");
  }

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

window.dataLayer = window.dataLayer || [];

function gtag() {
  dataLayer.push(arguments);
}

gtag("js", new Date());
gtag("config", "UA-174222113-1");
