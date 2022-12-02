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

    function styleOutline() {
        username.setAttribute("style", "outline : 3px solid red");
    }

    if(usernameV.length == 0) {
        usernameError.innerHTML = 'Username is required' ;
        username.setAttribute("style", "outline : 3px solid red");
        styleOutline();
        return false ;
    }

    if (!usernameV.match(/^[a-zA-Z0-9 \s]{3,20}$/)) {
        usernameError.innerHTML =
          " Should contain only numbers and letters & less than 20";
          styleOutline();
        return false;
      }

    usernameError.innerHTML = '';
    username.setAttribute("style", "outline : 3px solid green");
    return true ;
}

function validatePassword() {
    
    passwordError.style.color = "red";
    
        let passwordV = password.value ;

        function styleOutline() {
            password.setAttribute("style", "outline : 3px solid red");
        }
    
        if(passwordV.length == 0) {
            passwordError.innerHTML = 'Password is required' ;
            styleOutline();
            return false ;
        }
        if (passwordV.length < 6) {
            passwordError.innerHTML = "Password must be at least 6 Characters";
            styleOutline();
            return false;
          }
        if(passwordV.length > 30) {
            passwordError.innerHTML = 'Password is less than 30' ;
            styleOutline();
            return false ;
        }
    
        passwordError.innerHTML = '';
        password.setAttribute("style", "outline : 3px solid green");
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