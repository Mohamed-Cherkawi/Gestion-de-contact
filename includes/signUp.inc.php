<?php

if(isset($_POST["SignUp"])) {

    $username = $_POST["Username"];
    $password = $_POST["Password"];

    // Instantiate SignupContr-class
    /* it is important to have the database file first because the signup class
    needs to have something from within the database file so that needs to 
    be loaded first and the signup control class needs to have methods from
    inside the sign up class (Oredering is important) .
    */
    require "../Classes/dbh.classes.php";
    require "../Classes/signUp.classes.php";
    require "../Classes/signup-contr.classes.php";

    $signUp = new SignupContr($username,$password);

    // Running error handlers and user signup
    $signUp->signupUser();
    // Going to back to front page
    header("location: ../Profile.php");

}