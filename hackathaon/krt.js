const container = document.getElementById("container");
const registerBtn = document.getElementById("register");
const loginBtn = document.getElementById("login");

registerBtn.addEventListener("click", () => {
  container.classList.add("active");
});

loginBtn.addEventListener("click", () => {
  container.classList.remove("active");
});

const showPassword = document.querySelector(".show-password");
const passwordContainer = document.querySelector(".password-container");
let showIcon = showPassword.querySelector("i");

let passwordHidden = true;

showPassword.addEventListener("click", passwordToggle);

function passwordToggle() {
  passwordHidden = !passwordHidden;

  if (passwordHidden == false) {
    passwordContainer.firstElementChild.setAttribute("type", "text");
    showIcon.removeAttribute("class", "fa-regular fa-eye-slash");
    showIcon.setAttribute("class", "fa-regular fa-eye");

    console.log("shown");
  } else {
    passwordContainer.firstElementChild.setAttribute("type", "password");
    showIcon.removeAttribute("class", "fa-regular fa-eye");
    showIcon.setAttribute("class", "fa-regular fa-eye-slash");

    console.log("hidden");
  }
}
