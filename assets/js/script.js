function preventScroll() {
  document.getElementsByTagName("html")[0].style.overflow = "auto";
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
    if ((y >= 375 && y <= 1750) || (y >= 3600 && y <= 4150)) {
      body.classList.add("white");
      body.classList.remove("blue");
    } else {
      body.classList.add("blue");
      body.classList.remove("white");
    }
  } else {
    if ((y >= 420 && y <= 1475) || (y >= 2275 && y <= 3150)) {
      body.classList.add("white");
      body.classList.remove("blue");
    } else {
      body.classList.add("blue");
      body.classList.remove("white");
    }
  }
}

window.addEventListener("scroll", changeScrollbar);
