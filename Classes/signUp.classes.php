<?php
    /* The first thing to do is to double check if the the username
    and sending that result as a true or false statement ,back to the
    controller so we can do one of the error handlings of
    */
    class Signup extends Dbh {

        // Quotation marks acts like a placeholder to fill out later with the execute method
        protected function setUser($user,$pass) {
            $stmt = $this->connect()->prepare('INSERT INTO  users (userName,Password) VALUES (?,?);');

            // if the actual exceution of the sql statement fails to database :
            if(!$stmt->execute(array($user,$pass))) {
                $stmt = null ;
                header("location: ../signUp.php?error=stmtfailed");
                exit();
            }
            $stmt = null ;
            
        }


        // Quotation marks acts like a placeholder to fill out later with the execute method
        protected function checkUser($user) {
            $stmt = $this->connect()->prepare('SELECT userName FROM users WHERE userName = ?');

            // if the actual exceution of the sql statement fails to database :
            if(!$stmt->execute(array($user))) {
                $stmt = null ;
                header("location: ../signUp.php?error=stmtfailed");
                exit();
            }

            // Checks if there are any rows that returned from this query up here
            $resultCheck ;

            if($stmt->rowCount() > 0) {
                $resultCheck = false;
            }
            else {
                $resultCheck = true ;
            }

            return $resultCheck ;



        }
    }