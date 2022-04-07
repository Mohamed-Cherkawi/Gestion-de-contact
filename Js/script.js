const form = document.getElementById("form");
// inputs :
const username = document.querySelector("[name='Username']");
const password = document.querySelector("[name='Password']");
const cPassword = document.querySelector("[name='PasswordVerify']");

// Empty divs :
const userError = document.querySelector(".UserError");
const passwordError = document.querySelector(".PasswError");
const cPasswordError = document.querySelector(".CPasswError");

// onload event , focuses on username input
window.onload = function() {
    username.focus();
}

form.addEventListener("submit" , (e) => {

if(username.value === "" || username.value === null || username.value.length <= 3){
    userError.innerHTML = "Username Field Can Not Be Empty and should coutain at least 3 characters";
    e.preventDefault();
}   
if( password.value === "" || password.value === null || password.value.length <= 6) {
    passwordError.innerHTML = "Password Field Can Not Be Empty and should coutain at least 6 characters";
    e.preventDefault();
}
if( password.value !== cPassword.value){
    cPasswordError.innerHTML = "Password is not match";
    e.preventDefault();
}
})