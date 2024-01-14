const form = document.getElementById("form");
const emailInput = document.getElementById("email");
const passwordInput = document.getElementById("password");

form.addEventListener("submit", (e) => {
  e.preventDefault();
  
  let inputEmail = e.target.elements.email.value;
  let inputPassword = e.target.elements.password.value;

  const passwordError = document.querySelector("#password-error");

  // Reset error messages
  passwordError.classList.add("hidden");

  if (!inputEmail || !inputPassword) {
    passwordError.classList.remove("hidden");
  } 
});
