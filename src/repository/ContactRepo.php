<?php
session_start();
class ContactRepo
{

    private $Name;
    private $Phone;
    private $Email;
    private $Address;

    public function construct($name , $phone , $email , $address)
    {
        $this->Name = $name ;
        $this->Phone = $phone ;
        $this->Email = $email ;
        $this->Address = $address ;
    }

    // Getting contact from database
   public function createContact()
    {
        $stmt = DbConnection::connect()->prepare('INSERT INTO  contacts (Contact_id,Name,Phone,Email,Address) VALUES (' . $_SESSION['userid'] . ',?,?,?,?);');

        // if the actual exceution of the sql statement fails to database :
        if (!$stmt->execute(array($this->Name , $this->Phone , $this->Email , $this->Address))) {
            $stmt = null;
            header("location: ../ContactRepo.php?error=stmtfailed");
            exit();
        }
        header("location: ../ContactRepo.php");
    }

   public static function getContacts()
    {
        $stmt = DbConnection::connect()->prepare('SELECT * FROM contacts WHERE Contact_id = ?');
        if (!$stmt->execute(array($_SESSION['userid']))) {
            $stmt = null;
            header("location: ../ContactRepo.php?error=stmtfailed");
            exit();
        }
       
        $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
         if( $contacts != null ){
             foreach($contacts as $data) {
                 echo ' 
         <tr>
         <th scope="row"> '. $data['Name'] .'</th>
         <td>'. $data['Phone'] .'</td>
         <td>'. $data['Email'] .'</td>
         <td>'. $data['Address'] .'</td>
         <td>
          <button type="button" class="btn btn-dark"><a href=" includes/contactCrud.inc.php?updateid='.$data['Contact_id'].'" style="text-decoration : none; color: white ;">Edit&nbsp&nbsp</a></button>
          <button type="button" class="btn btn-dark"><a href=" includes/contactCrud.inc.php?deleteid='.$data['Contact_id'].'" style="text-decoration : none; color: white ;">Delete</a></button>
         </td>
         </tr>
         ';
             }
         }
    }

        function deleteContact($contactId) {

        $stmt = DbConnection::connect()->prepare('DELETE FROM contacts WHERE Contact_id = ?');

        if($stmt->execute(array($contactId))) {

        $stmt = null ;
        header("location: ../ContactRepo.php?error=failedToDelete");
        exit();
        
        }

        header("location: ../ContactRepo.php");

    }
        
        function getContactForUpdate($contactId) {

            $stmt = DbConnection::connect()->prepare('SELECT * FROM contacts WHERE Contact_id = ?');

            if(!$stmt->execute(array($contactId))) {

                $stmt = null ;
                header("location: ../ContactRepo.php?error=stmtFailed");
                exit();
            }
            if($stmt->rowCount() == 0)
            {
                $stmt = null ;
                header("location: ../ContactRepo.php?error=DataNotFound");
                $empty = 'No contacts yet';
                exit();
            }

            $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach($contacts as $data);
            echo '
            
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Page Acceuil</title>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                <link rel="stylesheet" href="Css/style.css">
            </head>
            <body>
            <div class="container mt-5 d-flex justify-content-center">

            <!-- Form -->
                  <form method="POST">
                     <div class="d-flex mt-4">
                      <div class="mb-3 w-50">
                        <label for="exampleFormControlInput1" class="form-label d-block">Enter Your Name</label>
                        <input type="text" name="Name" value="'.$data['Name'] .'" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="w-50">
                        <label for="exampleFormControlInput1" class="form-label">Enter Your Phone </label>
                        <input type="number" name="Phone" value="'.$data['Phone'] .'" class="form-control" id="exampleFormControlInput1">
                        </div>
                      </div>
                    
                      <div class="mb-3 w-100">
                        <label for="exampleFormControlInput1" class="form-label">Enter Your Email</label>
                        <div class="d-flex ">
                        <input type="email" name="Email" value="'.$data['Email'] .'" class="form-control text-center align-self-center" id="exampleFormControlInput1">
                        </div>
                      </div>
                      <div>
                        <label for="adreess">Adreess</label>
                        <textarea id="adreess" name="Adreess" rows="5" cols="60" class="d-block" maxlength="255" style="resize: none;">'.$data['Address'] .'</textarea>
                      </div>
                      <button type="submit" class="btn btn-dark mt-2 w-100" name="updateContact">Update ContactRepo</button>
                  </form> 
              </div>
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
              </body>
              </html>
              ';

        }

        function updateContact($Name,$Phone,$Email,$Address) {
            
            $stmt = DbConnection::connect()->prepare('UPDATE  contacts SET Name= ?, Phone= ?, Email= ?, Address=? WHERE Contact_id = ?');

        // if the actual exceution of the sql statement fails to database :
            if (!$stmt->execute(array($Name,$Phone,$Email,$Address,$_SESSION['userid']))) {
            $stmt = null;
            header("location: ../ContactRepo.php?error=stmtfailed");
            exit();
            }
            header("location: ../ContactRepo.php");
        }
}