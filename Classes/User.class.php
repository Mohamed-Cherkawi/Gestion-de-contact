<?php

    class User {
        // Variables : 
        private $id;
        private $Username ;
        private $Password;
        protected $DbConex ;

        // Methods :
        public function __construct($id=0,$username = "",$password = "")
        {
            $this->id = $id ;
            $this->Username = $username ;

        }

        public function setid($id) {
            $this->$id = $id ;
        }
        public function getid() {
           return $this->id ;
        }
        public function setUsername($username) {
            $this->Username = $username ;
        }
        public function getUsername() {
           return $this->Username ;
        }
        public function setPassword($password) {
            $this->Password = $password ;
        }
        public function getPassword() {
          return  $this->Password  ;
        }

        public function createContact() {
            try {
                $stm = $this->DbConex->prepare("INSERT INTO users(Name,Password) values(?,?)");
                $stm->execute([$this->Username,$this->Password]); 
                echo "<script>alert('data saved successfully');document.location='test.php'</script>";
            }
            catch(Exception $e){
                return $e->getMessage();
            }
        }
    }