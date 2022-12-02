<?php

class LoginContr extends LoginRepo {

    private $username;
    private $password ;

    // To grab the data that user submitted using the up form and assign them to these properties
    public function __construct($user , $pass)
    {
        $this->username = $user ;
        $this->password = $pass ;
    }

    public function loginUser() {
       
        $this->getUser($this->username,$this->password);
    }
   
    

     
}
