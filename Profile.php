<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/style.css">
</head>
<body>
        <!-- Header -->
<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid d-flex justify-content-between">
        <span class="navbar-brand ">Contacts list</span>
        <div>
                <span class="me-4" style="color: azure;"><?php if(isset($_SESSION['userName'])) {echo $_SESSION['userName'] ;} ?></span>
                <a href="Contact.php" class="LoginLink text-secondary me-2">Contact</a>
                <a href="login.php" class="LoginLink text-secondary">Log out</a>
        </div>
    </div>
    
</nav>

<div class="container mt-5">
<h1>
        Welcome , <?php if(isset($_SESSION['userName'])) {echo $_SESSION['userName'] ;} ?> !
</h1>
    
<table class="table caption-top mt-3 ">
    <caption class="TableCaption">Your profile :</caption>
    <tbody>
      <tr>
        <th scope="row">Username</th>
       
        <td><?php if(isset($_SESSION['userName'])) {echo $_SESSION['userName'] ;} ?></td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">Signup Date</th>
        <td><?php if(isset($_SESSION['signupD'])) {echo $_SESSION['signupD'] ;} ?></td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">Last Login</th>
        <td><?php if(isset($_SESSION['lastLogin'])) { echo $_SESSION['lastLogin'] ;} ?></td>
        <td></td>
      </tr>
    </tbody>
    </div>
  </table>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>