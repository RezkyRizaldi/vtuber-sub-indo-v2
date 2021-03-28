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
  $(".mobile").removeClass(
    "overflow-auto border border-2 border-dark rounded-3"
  );
}

$(window).on("resize", function () {
  if (window.matchMedia("(max-width: 575.98px)").matches) {
    $(".list-group-item").removeClass("list-group-item-action");
    $(".mobile").addClass(
      "overflow-auto border border-2 border-dark rounded-3"
    );
  } else {
    $(".list-group-item").addClass("list-group-item-action");
    $(".mobile").removeClass(
      "overflow-auto border border-2 border-dark rounded-3"
    );
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
    if ((y >= 420 && y <= 1475) || (y >= 2000 && y <= 2950)) {
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

  if ($('section[data-anchor="home"]').length) {
    if ($(this).scrollTop() < $('section[data-anchor="home"]').offset().top) {
      $(".navbar-nav li a").removeClass("active");
    }
  }

  if ($('section[data-anchor="home"]').length) {
    if ($(this).scrollTop() >= $('section[data-anchor="home"]').offset().top) {
      $(".navbar-nav li a").removeClass("active");
      $(".navbar-nav li:eq(0) a").addClass("active");
    }
  }

  if ($('section[data-anchor="about"]').length) {
    if (
      $(this).scrollTop() >=
      $('section[data-anchor="about"]').offset().top - 75
    ) {
      $(".navbar-nav li a").removeClass("active");
      $(".navbar-nav li:eq(1) a").addClass("active");
    }
  }

  if ($('section[data-anchor="videos"]').length) {
    if (
      $(this).scrollTop() >=
      $('section[data-anchor="videos"]').offset().top - 75
    ) {
      $(".navbar-nav li a").removeClass("active");
      $(".navbar-nav li:eq(3) a").addClass("active");
    }
  }

  if ($('section[data-anchor="contact"]').length) {
    if (
      $(this).scrollTop() >=
      $('section[data-anchor="contact"]').offset().top - 75
    ) {
      $(".navbar-nav li a").removeClass("active");
      $(".navbar-nav li:eq(4) a").addClass("active");
    }
  }
});

$(window).on("load", function () {
  let affId = $("#aff").val();
  let columnSize = $(`#load_${affId} .col-md-12`).length;
  let x = 3;
  $(`#load_${affId} .col-md-12:lt("${x}")`).show();
  $(`#load_${affId} .col-md-12`).not(`:lt("${x}")`).hide();
  if (columnSize < x) {
    $("#loadMore").hide();
    $("#showLess").hide();
  } else {
    $("#loadMore").show();
    $("#showLess").show();
  }
  $("#loadMore").on("click", function () {
    x = x + 3 <= columnSize ? x + 3 : columnSize;
    $(`#load_${affId} .col-md-12:lt(${x})`).show();
    if (x == columnSize) {
      $("#loadMore").hide();
      $("#showLess").show();
    }
  });
  $("#showLess").on("click", function () {
    x = x - 3 < 0 ? 3 : x - 3;
    $(`#load_${affId} .col-md-12`).not(`:lt("${x}")`).hide();
    if (x == 3) {
      $("#loadMore").show();
      $("#showLess").hide();
    }
  });
});

function affiliationGen(id) {
  let columnSize = $(`#load_${id} .col-md-12`).length;
  let x = 3;
  $(`#load_${id} .col-md-12:lt(${x})`).show();
  $(`#load_${id} .col-md-12`).not(`:lt(${x})`).hide();

  if (columnSize < x) {
    $("#loadMore").hide();
    $("#showLess").hide();
  } else {
    $("#loadMore").show();
    $("#showLess").show();
  }

  $("#loadMore").on("click", function () {
    x = x + 3 <= columnSize ? x + 3 : columnSize;
    $(`#load_${id} .col-md-12:lt(${x})`).show();
    if (x == columnSize) {
      $("#loadMore").hide();
      $("#showLess").show();
    }
  });

  $("#showLess").on("click", function () {
    x = x - 3 < 0 ? 3 : x - 3;
    $(`#load_${id} .col-md-12`).not(`:lt(${x})`).hide();
    if (x !== columnSize) {
      $("#loadMore").show();
      $("#showLess").hide();
    }
  });
}

$(function () {
  $(document).on("mousedown", "[data-ripple]", function (e) {
    let $self = $(this);
    if ($self.is(".btn-disabled")) {
      return;
    }
    if ($self.closest("[data-ripple]")) {
      e.stopPropagation();
    }

    let initPos = $self.css("position"),
      offs = $self.offset(),
      x = e.pageX - offs.left,
      y = e.pageY - offs.right,
      dia = Math.min(this.offsetHeight, this.offsetWidth, 100),
      $ripple = $("<div/>", { class: "ripple", appendTo: $self });

    if (!initPos || initPos === "static") {
      $self.css({ position: "relative" });
    }

    $("<div/>", {
      class: "ripple_wave",
      css: {
        background: $self.data("ripple"),
        width: dia,
        height: dia,
        left: x - dia / 2,
        top: y - dia / 2,
      },
      appendTo: $ripple,
      one: {
        animationEnd: function () {
          $ripple.remove();
        },
      },
    });
  });
});

window.dataLayer = window.dataLayer || [];

function gtag() {
  dataLayer.push(arguments);
}

gtag("js", new Date());
gtag("config", "UA-174222113-1");
