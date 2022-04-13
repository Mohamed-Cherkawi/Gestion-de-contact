// inputs : 
const username = document.getElementById("usernameInput");
const password = document.getElementById("passwordInput");

// Error space :
const usernameError = document.getElementById("UserError");
const passwordError = document.getElementById("PasswError");


// onload event , focuses on username input
window.onload = function() {
    username.focus();
}

function validateUsername() {

    usernameError.style.color = "red";

    let usernameV = username.value ;

    if(usernameV.length == 0) {
        usernameError.innerHTML = 'Username is required' ;
        return false ;
    }
    if(usernameV.length > 20) {
        usernameError.innerHTML = 'Username is less than 20' ;
        return false ;
    }

    usernameError.innerHTML = '';
    return true ;
}

function validatePassword() {
    
    passwordError.style.color = "red";
    
        let passwordV = password.value ;
    
        if(passwordV.length == 0) {
            passwordError.innerHTML = 'Password is required' ;
            return false ;
        }
        if(passwordV.length > 30) {
            passwordError.innerHTML = 'Password is less than 30' ;
            return false ;
        }
    
        passwordError.innerHTML = '';
        return true ;
}

function validateForm() {
    if(!validateUsername() || !validatePassword()) {
        SubmitError.style.display = 'block' ;
        SubmitError.innerHTML = 'Please Fix Error To Submit' ;
       setTimeout(function(){submitError.style.display = 'none';},2500);
       return false ;
    }
}