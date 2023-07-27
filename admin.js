let menu = document.querySelector(".menu");
let sidebar = document.querySelector(".sidebar");

menu.addEventListener("click", () => {
  sidebar.classList.toggle("active");
});
