const header = document.querySelector("header");

window.addEventListener("scroll", () => {
  header.classList.toggle("header-open", scrollY > 0);
});

const nav = document.querySelector(".nav");
const menu = document.querySelector("#menu");
const menui = document.querySelector("#menu i");

menu.addEventListener("click", () => {
  nav.classList.toggle("nav-open");
  menu.classList.toggle("active");
  menui.classList.toggle("fa-x");
});

// img popup

$(document).ready(function () {
  // required elements
  var imgPopup = $(".img-popup");
  var imgCont = $(".gallery-img");
  var popupImage = $(".img-popup img");
  var closeBtn = $(".close-btn");

  // handle events
  imgCont.on("click", function () {
    var img_src = $(this).children("img").attr("src");
    imgPopup.children("img").attr("src", img_src);
    imgPopup.addClass("opened");
  });

  $(imgPopup, closeBtn).on("click", function () {
    imgPopup.removeClass("opened");
    imgPopup.children("img").attr("src", "");
  });

  popupImage.on("click", function (e) {
    e.stopPropagation();
  });
});

// data filter

const dataBtn = document.querySelectorAll(".course-nav a");
const dataBox = document.querySelectorAll(".data-filter-box");

for (let i = 0; i < dataBtn.length; i++) {
  dataBtn[i].addEventListener("click", function (e) {
    e.preventDefault();
    for (let j = 0; j < dataBtn.length; j++) {
      dataBtn[j].classList.remove("course-nav-active");
    }
    this.classList.add("course-nav-active");

    let dataFilter = this.getAttribute("data-menu");

    for (let k = 0; k < dataBox.length; k++) {
      if (
        dataBox[k].getAttribute("data-item") === dataFilter ||
        dataFilter === "all"
      ) {
        dataBox[k].classList.remove("hide-box");
        dataBox[k].classList.add("show-box");
      } else {
        dataBox[k].classList.remove("show-box");
        dataBox[k].classList.add("hide-box");
      }
    }
  });
}
