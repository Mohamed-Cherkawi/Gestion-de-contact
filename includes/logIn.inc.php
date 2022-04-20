<?php

if(isset($_POST["logIn"])) {

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
        
    $username = test_input($_POST["Username"]);
    $password = test_input($_POST["Password"]);
    
    
    require "../Classes/dbh.classes.php";
    require "../Classes/login.classes.php";
    require "../Classes/login-contr.classes.php";

    $logIn = new LoginContr($username,$password);

    // Running error handlers and user signup
    $logIn->loginUser();
    // Going to back to front page
    header("location: ../Profile.php");

}
