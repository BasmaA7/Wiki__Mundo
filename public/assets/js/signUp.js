
const form = document.getElementById("form");
const name = document.getElementById("name");
const email = document.getElementById("email");
const password = document.getElementById("password");

form.addEventListener("submit", (e) => {
  e.preventDefault();
  console.log(e);
  let name = e.target.name.value
  let email = e.target.email.value
  let password = e.target.password.value

  
  console.log(name);
 

  
  const emailError = document.querySelector("#email-error");
  const nameError = document.querySelector("#name-error");
  const passwordError = document.querySelector("#password-error");
  

  
  const emailRegex = /^[a-z0-9]+@[a-z]+\.[a-z]{2,3}$/;
  const nameRegex = /^[A-Za-zs]+$/;
  const lastnameRegex = /^[A-Za-zs]+$/;
  const passwordRegex = /^[A-Za-zs]+$/;
  
  
  if(!nameRegex.test(name)){
  
     nameError.classList.toggle("hidden")
    
  }

  if(!passwordRegex.test(password)){
  
     passwordError.classList.toggle("hidden")
    
  }

  if(!emailRegex.test(email)){
 
    
    emailError.classList.toggle("hidden")
  }
 
 
 
})