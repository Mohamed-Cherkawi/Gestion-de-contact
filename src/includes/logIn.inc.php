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
    
    
    require "../util/DbConnection.php";
    require "../repository/LoginRepo.php";
    require "../controllers/LoginContr.php";

    $logIn = new LoginContr($username,$password);

    // Running error handlers and user signup
    $logIn->loginUser();
    // Going to back to front page
    header("location: ../../templates/profile.php");

}
