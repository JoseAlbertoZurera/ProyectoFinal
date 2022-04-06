/* Div botones fixed */
const botones_fixed = document.getElementById("down-buttons");
const buttons_fixed = () => {
  if (window.scrollY >= 300) {
    botones_fixed.classList.remove("hidden-down-buttons");
    botones_fixed.classList.add("show-down-buttons");
  } else {
    botones_fixed.classList.add("hidden-down-buttons");
    botones_fixed.classList.remove("show-down-buttons");
  }
};


/* Script scrolltotop */
const btn_scrolltop = document.getElementById("btn_scrolltop");
btn_scrolltop.addEventListener("click", () => {
  window.scrollTo(0, 0);
});

const add_btn_scrolltop = () => {
  if (window.scrollY < 300) {
    btn_scrolltop.classList.remove("btn-scrolltop-on");
  } else {
    btn_scrolltop.classList.add("btn-scrolltop-on");
  }
};

window.onscroll = () => {
    buttons_fixed();
    add_btn_scrolltop();

};