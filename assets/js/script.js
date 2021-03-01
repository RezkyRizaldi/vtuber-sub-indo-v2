window.dataLayer = window.dataLayer || [];

function gtag() {
  dataLayer.push(arguments);
}

gtag("js", new Date());
gtag("config", "UA-174222113-1");

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
}

window.addEventListener("scroll", changeScrollbar);
