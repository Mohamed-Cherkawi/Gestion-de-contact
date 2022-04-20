<?php

require "../Classes/dbh.classes.php";
require "../Classes/Contact.classes.php";

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
    
    $createContact = new Contact();
    $createContact->construct($name,$phone,$email,$adrress);
    $createContact->createContact();

    // Going to back to front page

}

    if(isset($_GET["updateid"])){

    $contactId = $_GET["updateid"];

    $updateContact = new Contact();
    $updateContact->getContactForUpdate($contactId);

    }

    if(isset($_POST["updateContact"])) {

  
    $name    =    test_input($_POST["Name"]);
    $phone   =    test_input($_POST["Phone"]);
    $email   =    test_input($_POST["Email"]);
    $adrress =    test_input($_POST["Adreess"]);

    
    // Object instanciation :
    
    $createContact = new Contact();
    $createContact->updateContact($name,$phone,$email,$adrress);

    // Going to back to front page

}

    if(isset($_GET["deleteid"])){
    // Getting the id from the method get :

    $contactId = $_GET["deleteid"];

    $deleteContact = new Contact();
    $deleteContact->deleteContact($contactId);

    }
