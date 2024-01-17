const form = document.getElementById("form");
const nameInput = document.getElementById("name");
const emailInput = document.getElementById("email");
const passwordInput = document.getElementById("password");

form.addEventListener("submit", (e) => {

  let inputName = e.target.elements.name.value;
  let inputEmail = e.target.elements.email.value;
  let inputPassword = e.target.elements.password.value;

  const nameError = document.querySelector("#name-error");
  const emailError = document.querySelector("#email-error");
  const passwordError = document.querySelector("#password-error");

  const emailRegex = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/i;
  const nameRegex = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/i;
  const passwordRegex = /^[A-Za-z\d]{8,}$/;

  // Réinitialiser les messages d'erreur
  nameError.classList.add("hidden");
  emailError.classList.add("hidden");
  passwordError.classList.add("hidden");

  // Valider les champs et afficher les erreurs si nécessaire
  
  if (!nameRegex.test(inputName)) {
    nameError.classList.remove("hidden");
  e.preventDefault();

  }

  if (!emailRegex.test(inputEmail)) {
    emailError.classList.remove("hidden");
  e.preventDefault();

  }

  if (!passwordRegex.test(inputPassword)) {
    passwordError.classList.remove("hidden");
  e.preventDefault();

  }
});
