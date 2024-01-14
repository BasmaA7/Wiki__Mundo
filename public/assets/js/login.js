const form = document.getElementById("form");
const emailInput = document.getElementById("email");
const passwordInput = document.getElementById("password");

form.addEventListener("submit", (e) => {
  e.preventDefault();
  
  let inputEmail = e.target.elements.email.value;
  let inputPassword = e.target.elements.password.value;

  const passwordError = document.querySelector("#password-error");

  passwordError.classList.add("hidden");

  if (!inputEmail || !inputPassword) {
    passwordError.classList.remove("hidden");
  } 
  else{
    
      const response = await loginUser(inputEmail, inputPassword);
      
      if (response.success) {
        // Redirect to the appropriate page based on the user's role
        if (response.role === 1) {
          window.location.href = "../views/home.php";
        } else if (response.role === 2) {
          window.location.href = "../views/Dashbords/dachboard.php";
        }}}
  }
);
