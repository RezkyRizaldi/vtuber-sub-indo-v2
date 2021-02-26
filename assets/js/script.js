function preventScroll() {
  setTimeout(function () {
    document.getElementsByTagName("html")[0].style.overflow = "auto";
  }, 1500);
}
let mq = window.matchMedia("(max-width: 575.98px)");
const back = document.getElementById("back");

function backToTop() {
  let y = window.scrollY;
  if (mq.matches) {
    if (y >= 250) {
      back.className = "top show";
    } else {
      back.className = "top hide";
    }
  } else {
    if (y >= 450) {
      back.className = "top show";
    } else {
      back.className = "top hide";
    }
  }
}

window.addEventListener("scroll", backToTop);

const body = document.getElementById("body");

function changeScrollbar() {
  let y = window.scrollY;

  if (mq.matches) {
    if ((y >= 375 && y <= 745) || (y >= 2750 && y <= 3250)) {
      body.classList.add("white");
      body.classList.remove("blue");
    } else {
      body.classList.add("blue");
      body.classList.remove("white");
    }
  } else {
    if ((y >= 420 && y <= 1030) || (y >= 1800 && y <= 2650)) {
      body.classList.add("white");
      body.classList.remove("blue");
    } else {
      body.classList.add("blue");
      body.classList.remove("white");
    }
  }
}

window.addEventListener("scroll", changeScrollbar);
