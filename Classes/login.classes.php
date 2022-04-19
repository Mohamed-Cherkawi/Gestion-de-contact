<?php
    date_default_timezone_set("Africa/Casablanca");

    class Login extends Dbh {

        // Quotation marks acts like a placeholder to fill out later with the execute method
        protected function getUser($user,$pass) {
            $stmt = $this->connect()->prepare('SELECT Password FROM users WHERE userName = ?;');

            // if the actual exceution of the sql statement fails to database :
            if(!$stmt->execute(array($user))) {
                $stmt = null ;
                header("location: ../login.php?error=stmtfailed");
                exit();
            }
            if($stmt->rowCount() == 0)
            {
                $stmt = null ;
                header("location: ../login.php?usernameNotFound");
                exit();
            }
            $getpass = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if($pass != $getpass[0]['Password']) {
                $stmt = null ;
                header("location: ../login.php?error=wrongPassword");
                exit();
            }
            else if($pass == $getpass[0]['Password']){
                    $stmt = $this->connect()->prepare('SELECT * FROM users WHERE userName = ? AND Password = ?;');

                    if(!$stmt->execute(array($user,$pass))) {
                        $stmt = null ;
                        header("location: ../login.php?errorstmtfailed");
                        exit();
                    }
            }

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION['userid'] = $user["id"];
            $_SESSION['userName'] = $user["userName"];
            $_SESSION['signupD'] = $user["date"] ;

            // Current date and time
            $date = date("l , d M  Y H:i:s A");

            $_SESSION['lastLogin'] = $date;

            $stmt = null ;
            
        }


    }