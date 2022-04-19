<?php

require "../Classes/dbh.classes.php";
require "../Classes/Contact.classes.php";

if(isset($_POST["CreateContact"])) {

    $name    =    $_POST["Name"];
    $phone   =    $_POST["Phone"];
    $email   =    $_POST["Email"];
    $adrress =    $_POST["Adreess"];


    // Object instanciation :
    
    $contact = new Contact();
    $contact->construct($name,$phone,$email,$adrress);
    $contact->createContact();

    
    // Going to back to front page
    header("location: ../Contact.php");

}

    $contact = new Contact();
    $contact->getContacts();




//    //delet
//    if(isset($_GET["delet"])){

//      $contact_id = $_GET["delet"];

//      include "../classes/Dbh.php";
//      include "../classes/contact.php";

 
// $delet = new contact ();
// $delet ->delet($contact_id );


//   }
