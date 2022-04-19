<?php

if(isset($_POST["logIn"])) {

    $username = $_POST["Username"];
    $password = $_POST["Password"];

  
    require "../Classes/dbh.classes.php";
    require "../Classes/login.classes.php";
    require "../Classes/login-contr.classes.php";

    $logIn = new LoginContr($username,$password);

    // Running error handlers and user signup
    $logIn->loginUser();
    // Going to back to front page
    header("location: ../Profile.php");

}
