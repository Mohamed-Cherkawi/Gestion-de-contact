<?php
include "connection.php";
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else {
  $ConnMessage = "Connected";
}
if (isset($_POST['SignUp'])) {
  $username          =     $_POST['Username'];
  $password          =     $_POST['Password'];
  $passwordVerify    =     $_POST['PasswordVerify'];


    $sql = " INSERT INTO `users`(`Username`,`Password`)
    VALUES ('$username','$password') ";
    
    if ($conn->query($sql) === TRUE) {
      $newRecord = "New record created successfully";
    } else {
      $noRecord =  "Error" . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/style.css">
</head>
<body>
    <!-- Header -->
<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <span class="navbar-brand ">Contacts list</span>
      <a href="login.php" class="LoginLink text-secondary">Login</a>
    </div>
    
  </nav>

    <div class="d-flex justify-content-center align-content-center ">

      <!-- Form -->
    <form method="POST" id="form" class="p-4 mt-5  shadow rounded">
      <?php
      if(isset($error)){
        echo $error;
      }
      ?>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Username</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" name="Username">
          <div id="UserError" class="text-danger"></div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="Password">
          <div id="PasswError" class="text-danger"></div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Password Verify</label>
            <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password verify" name="PasswordVerify">
            <div id="CPasswError" class="text-danger"></div>
          </div>
        <button type="submit" class="btn signUpBtn w-100" name="SignUp">Sign up</button>
        <div class="pt-4">
            <span>Already have an account? <a href="login.html" class="ConnexionLinks">Login </a>here</span>
        </div>
        <?php
        if(isset($newRecord)){
          echo $newRecord;
        }
         if(isset($noRecord)) {
           echo $noRecord;
         }
        ?>
      </form>
      </div>

  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="Js/submit.js"></script>
  <script src="Js/script.js"></script>
</body>
</html>