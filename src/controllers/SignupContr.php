<?php

class SignupContr extends SignupRepo {

    private $username;
    private $password ;

    // To grab the data that user submitted using the up form and assign them to these properties
    public function __construct($user , $pass)
    {
        $this->username = $user ;
        $this->password = $pass ;
    }

    public function signupUser() {
        if(!$this->userNameCheck()) {
            header("location: ../signUp.php?error=usernameAlreadyTaken");
            exit() ;
        }

        $this->setUser($this->username,$this->password);
    }
    private function userNameCheck()
    {
        $result = true;
      
        if(!$this->checkUser($this->username)) {
            $result = false ;
        }

        return $result ;
    }

}