<?php
session_start();
class Contact extends Dbh
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
        $stmt = $this->connect()->prepare('INSERT INTO  contacts (Contact_id,Name,Phone,Email,Address) VALUES (' . $_SESSION['userid'] . ',?,?,?,?);');

        // if the actual exceution of the sql statement fails to database :
        if (!$stmt->execute(array($this->Name , $this->Phone , $this->Email , $this->Address))) {
            $stmt = null;
            header("location: ../Contact.php?error=stmtfailed");
            exit();
        }
        
    }

   public function getContacts()
    {
        $stmt = $this->connect()->prepare('SELECT * FROM contacts WHERE id = ?');
        if (!$stmt->execute(array($_SESSION['userid']))) {
            $stmt = null;
            header("location: ../Contact.php?error=stmtfailed");
            exit();
        }
        if($stmt->rowCount() == 0)
            {
                $stmt = null ;
                header("location: ../Contact.php?usernameNotFound");
                $empty = 'No contacts yet';
                exit();
            }

        $getContacts = $stmt->fetch(PDO::FETCH_ASSOC);

    }
    function updateContact()
    {

    }
}


// while ($row = $stmt->fetch()) {
//     echo ' <tr>
//         <th scope="row">$row[\'Contact_id\']</th>
//         <td>$row[\'Name\']</td>
//         <td>$row[\'Email\']</td>
//         <td>$row[\'Phone\']</td>
//         <td>$row[\'Address\']</td>
//         <td>
//          <br>
//          <button type="button" onclick="confirm(\'Are you Sure\')" class="btn btn-dark">Delete</button>
//         </td>
//         </tr>';
// }