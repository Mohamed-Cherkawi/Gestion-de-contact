<?php

require "../util/DbConnection.php";
require "../repository/ContactRepo.php";

 // Filtering function 
 function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

if(isset($_POST["CreateContact"])) {


    $name    =    test_input($_POST["Name"]);
    $phone   =    test_input($_POST["Phone"]);
    $email   =    test_input($_POST["Email"]);
    $adrress =    test_input($_POST["Adreess"]);

    
    // Object instanciation :
    
    $createContact = new ContactRepo();
    $createContact->construct($name,$phone,$email,$adrress);
    $createContact->createContact();

    // Going to back to front page

}

    if(isset($_GET["updateid"])){

    $contactId = $_GET["updateid"];

    $updateContact = new ContactRepo();
    $updateContact->getContactForUpdate($contactId);

    }

    if(isset($_POST["updateContact"])) {

  
    $name    =    test_input($_POST["Name"]);
    $phone   =    test_input($_POST["Phone"]);
    $email   =    test_input($_POST["Email"]);
    $adrress =    test_input($_POST["Adreess"]);

    
    // Object instanciation :
    
    $createContact = new ContactRepo();
    $createContact->updateContact($name,$phone,$email,$adrress);

    // Going to back to front page

}

    if(isset($_GET["deleteid"])){
    // Getting the id from the method get :

    $contactId = $_GET["deleteid"];

    $deleteContact = new ContactRepo();
    $deleteContact->deleteContact($contactId);

    }
