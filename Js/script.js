// inputs :
const username = document.getElementById("usernameInput");
const password = document.getElementById("passwordInput");
const cPassword = document.getElementById("PasswordVerifyInput");

// Empty divs :
const userError = document.getElementById("UserError");
const passwordError = document.getElementById("PasswError");
const cPasswordError = document.getElementById("CPasswError");
const submitError = document.getElementById("SubmitError");

// onload event , focuses on username input
window.onload = function () {
  username.focus();
};

function validateUserName() {
  // Styling userError text field
  userError.style.color = "red";
  // input value :
  let usernameV = username.value;

  if (usernameV.length === 0) {
    userError.innerHTML = "Username is required";
    username.setAttribute("style", "outline : 3px solid red");
    return false;
  }
  if (!usernameV.match(/^[a-zA-Z0-9 \s]{3,20}$/)) {
    userError.innerHTML =
      " Should contain only numbers and letters & less than 20";
    username.setAttribute("style", "outline : 3px solid red");
    return false;
  }
  username.setAttribute("style", "outline : 3px solid green");
  userError.innerHTML = "";
  return true;
}
// Second input Value :

function validatePassword() {
  // input value :
  let passwordV = password.value;
  // Styling PasswordError text field
  passwordError.style.color = "red";

  if (passwordV.length === 0) {
    passwordError.innerHTML = "Password is required";
    password.setAttribute("style", "outline : 3px solid red");
    return false;
  }
  if (passwordV.length < 6) {
    passwordError.innerHTML = "Password must be at least 6 Characters";
    return false;
  }
  if (passwordV.length > 30) {
    passwordError.innerHTML = "Password must be less than 30 Characters";
    return false;
  }
  password.setAttribute("style", "outline: 3px solid green");
  passwordError.innerHTML = "";
  return true;
}

function validateCPassword() {
  // inputs values :
  let passwordV = password.value;
  let cPasswordV = cPassword.value;
  // Styling cPassword text field
  cPasswordError.style.color = "red";

  if (cPasswordV.length === 0 || passwordV !== cPasswordV) {
    cPasswordError.innerHTML = "Should Match Password Value";
    cPassword.setAttribute("style", "outline:3px solid red");
    return false;
  }
  cPassword.setAttribute("style", "outline : 3px solid green");
  cPasswordError.innerHTML = "";
  return true;
}

function validateForm() {
  if (!validateUserName() || !validatePassword() || !validateCPassword()) {
    submitError.innerHTML = "Please Fix Error To Submit";
    setTimeout(function () {
      submitError.style.display = "none";
    }, 2500);
    return false;
  } else {
    return true;
  }
}