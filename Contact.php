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
                <a href="login.php" class="LoginLink text-secondary">Log out</a>
        </div>
    </div>
    
</nav>

<div class="container mt-5">
<h1>
        Contacts
</h1>
    <!-- Form -->
          <form method="POST" action="includes/contactCrud.inc.php">
             <div class="d-flex mt-4">
              <div class="mb-3 w-25">
                <label for="exampleFormControlInput1" class="form-label d-block">Enter Your Name</label>
                <input type="text" name="Name" placeholder="Name" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="w-50">
                <label for="exampleFormControlInput1" class="form-label">Enter Your Phone </label>
                <input type="number" name="Phone" placeholder="Phone" class="form-control" id="exampleFormControlInput1">
                </div>
              </div>
            
              <div class="mb-3 w-50">
                <label for="exampleFormControlInput1" class="form-label">Enter Your Email</label>
                <input type="email" name="Email" placeholder="Name" class="form-control" id="exampleFormControlInput1">
              </div>
              <div>
                <label for="adreess">Adreess</label>
                <textarea id="adreess" name="Adreess" rows="5" cols="60" class="d-block" maxlength="255" style="resize: none;"></textarea>
              </div>
              <button type="submit" class="btn btn-dark" name="CreateContact">Create Contact</button>
          </form>
          <table class="table caption-top mt-3 ">
            <caption class="TableCaption">Contacts list :</caption>
            <tbody>
              <?php
                 if(isset($empty)){echo $empty ;}

              ?>
             
            </tbody>
          </table>
      </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>