<?php

if(isset($_POST["SignUp"])) {

     // Filtering function 
     function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }

    $username = test_input($_POST["Username"]);
    $password = test_input($_POST["Password"]);


    // Instantiate SignupContr-class
    /* it is important to have the database file first because the signup class
    needs to have something from within the database file so that needs to 
    be loaded first and the signup control class needs to have methods from
    inside the sign up class (Oredering is important) .
    */
    require "../util/DbConnection.php";
    require "../repository/SignupRepo.php";
    require "../controllers/SignupContr.php";

    $signUp = new SignupContr($username,$password);

    // Running error handlers and user signup
    $signUp -> signupUser();
    header("location: ../../templates/login.php");

}