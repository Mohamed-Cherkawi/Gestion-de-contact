<?php
    /* The first thing to do is to double check if the the username
    and sending that result as a true or false statement ,back to the
    controller so we can do one of the error handlings of
    */
    class SignupRepo  {

        // Quotation marks acts like a placeholder to fill out later with the execute method
        protected function setUser($user,$pass) {
            $stmt = DbConnection::connect()->prepare('INSERT INTO  users (userName,Password,sign_up_date	) VALUES (?,?,?);');

            date_default_timezone_set("Africa/Casablanca");
            $signUpDate = date("Y-m-d"); //2022-12-04
            // if the actual exceution of the sql statement fails to database :
            if(!$stmt->execute(array($user,$pass,$signUpDate))) {
                $stmt = null ;
                header("location: ../signUp.php?error=stmtfailed");
                exit();
            }
            $stmt = null ;
            
        }


        // Quotation marks acts like a placeholder to fill out later with the execute method
        protected function checkUser($user) {
            $stmt = DbConnection::connect()->prepare('SELECT userName FROM users WHERE userName = ?');

            // if the actual exceution of the sql statement fails to database :
            if(!$stmt->execute(array($user))) {
                $stmt = null ;
                header("location: ../signUp.php?error=stmtfailed");
                exit();
            }

            // Checks if there are any rows that returned from this query up here
            $resultCheck = true ;

            if($stmt->rowCount() > 0) {
                $resultCheck = false;
            }

            return $resultCheck ;

        }
    }