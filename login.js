// login signup
let login = document.querySelector(".login");
let signup = document.querySelector(".signup");
let admin = document.querySelector(".admin");

let links = document.querySelectorAll(".main .box ul li a");

links.forEach((option) => {
  option.addEventListener("click", (e) => {
    e.preventDefault();
    document.querySelector(".main .box ul .active ").classList.remove("active");
    option.classList.add("active");

    let result = e.target.dataset.tab;
    if (result === "login") {
      login.classList.remove("display");
      signup.classList.add("display");
      admin.classList.add("display");
    } else if (result === "signup") {
      login.classList.add("display");
      signup.classList.remove("display");
      admin.classList.add("display");
    } else {
      login.classList.add("display");
      signup.classList.add("display");
      admin.classList.remove("display");
    }
  });
});
