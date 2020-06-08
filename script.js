let body = document.querySelector("body");
let elem = document.querySelector("nav");
let link = [...document.querySelectorAll(".nav-link")];
let header = document.querySelector("header");
let about = elem.querySelector(".about");
let work = elem.querySelector(".work");
let contact = elem.querySelector(".contact");

header.addEventListener("mouseover", function () {
  hoverFunction(this);
});
about.addEventListener("mouseover", function () {
  hoverFunction(this);
});
work.addEventListener("mouseover", function () {
  hoverFunction(this);
});
contact.addEventListener("mouseover", function () {
  hoverFunction(this);
});

about.addEventListener("mouseout", function () {
  hoverOff(this);
});
work.addEventListener("mouseout", function () {
  hoverOff(this);
});
contact.addEventListener("mouseout", function () {
  hoverOff(this);
});

function hoverFunction(elem) {
  switch (true) {
    case elem.classList.contains("header"):
      body.style.backgroundColor = "#42544b";
      header.style.color = "#f3eccd";
      link.forEach((links) => (links.style.color = "#f3eccd"));

      break;
    case elem.classList.contains("about"):
      body.style.backgroundColor = "#262626";
      header.style.color = "#c93a3a";
      link.forEach((links) => (links.style.color = "#c93a3a"));
      work.style.opacity = 0.5;
      contact.style.opacity = 0.5;

      break;
    case elem.classList.contains("work"):
      body.style.backgroundColor = "#f3eccd";
      header.style.color = "#42544b";
      link.forEach((links) => (links.style.color = "#42544b"));
      about.style.opacity = 0.5;
      contact.style.opacity = 0.5;
      break;
    case elem.classList.contains("contact"):
      body.style.backgroundColor = "#795528";
      header.style.color = "#f3d7a4";
      link.forEach((links) => (links.style.color = "#f3d7a4"));
      about.style.opacity = 0.5;
      work.style.opacity = 0.5;
      break;
  }
}

function hoverOff(elem) {
  switch (true) {
    case elem.classList.contains("about"):
      work.style.opacity = 1;
      contact.style.opacity = 1;
      break;
    case elem.classList.contains("work"):
      about.style.opacity = 1;
      contact.style.opacity = 1;
      break;
    case elem.classList.contains("contact"):
      about.style.opacity = 1;
      work.style.opacity = 1;
      break;
  }
}
