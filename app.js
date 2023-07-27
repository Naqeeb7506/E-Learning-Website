let menu = document.querySelector(".menu");
let topmenu = document.querySelector(".topmenu");
let cancel = document.querySelector(".cancel");

menu.addEventListener("click", () => {
  topmenu.classList.toggle("hide");
  menu.classList.add("no-display");
});

cancel.addEventListener("click", () => {
  topmenu.classList.toggle("hide");
  menu.classList.remove("no-display");
});
