// inputs : 
const Name = document.getElementById("nameInput");
const phone = document.getElementById("phoneInput");
const email = document.getElementById("emailInput");
const address = document.getElementById("adreess");

// onload event , focuses on username input

function validateName() {

    let nameV = Name.value ;
    if(Name.length == 0) {
        Name.setAttribute("style", "outline : 3px solid red");
        return false ;
    }

    if (!Name.match(/^[a-zA-Z\s]{5,20}$/)) {
        Name.setAttribute("style", "outline : 3px solid red");
        return false;
      }

      Name.setAttribute("style", "outline : 3px solid green");
     return true ;
}

function validatePhone() {

    let phoneV = phone.value ;
    if(phone.length == 0) {
        Name.setAttribute("style", "outline : 3px solid red");
        return false ;
    }

    Name.setAttribute("style", "outline : 3px solid green");
    return true ;
}

function validateEmail() {

    let emailV = email.value ;
   
    if(email.length == 0) {
        Name.setAttribute("style", "outline : 3px solid red");
        return false ;
    }

    if (!email.match(/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+$/)) {
        Name.setAttribute("style", "outline : 3px solid red");
        return false;
      }

    email.setAttribute("style", "outline : 3px solid green");
    return true ;
}

function validateAddress() {

    let addressV = address.value ;

    if(address.length == 0) {
        Name.setAttribute("style", "outline : 3px solid red");
        return false ;
    }
    if(address.length > 255) {
        Name.setAttribute("style", "outline : 3px solid red");
        return false ;
    }

    address.setAttribute("style", "outline : 3px solid green");
    return true ;
}
function validateForm() {
    if(!validateName() || !validatePhone() || !validateAddress() || !validateEmail()) {
        SubmitError.style.display = 'block' ;
        SubmitError.innerHTML = 'Please Fix Error To Submit' ;
       setTimeout(function(){submitError.style.display = 'none';},2500);
       return false ;
    }
}