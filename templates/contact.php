<?php
require "../src/util/DbConnection.php";
require "../src/repository/ContactRepo.php";
$getContact = new ContactRepo();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../src/assets/Css/style.css">
</head>
<style>
  /* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: black;
  border-radius: 3px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555;
}
</style>
<body>
        <!-- Header -->
<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid d-flex justify-content-between">
        <span class="navbar-brand ">Contacts list</span>
        <div>
                <span class="me-4" style="color: azure;"><?php if(isset($_SESSION['userName'])) {echo $_SESSION['userName'] ;} ?></span>
                <a href="../src/includes/logout.inc.php" class="LoginLink text-secondary">Log out</a>
        </div>
    </div>
    
</nav>
<h1 class="container mt-5 ">
        Contacts :
</h1>
<div class="container mt-5 d-flex justify-content-center">

    <!-- Form -->
          <form method="POST" action="../src/includes/contactCrud.inc.php">
             <div class="d-flex mt-4">
              <div class="mb-3 w-50">
                <label for="exampleFormControlInput1" class="form-label d-block">Enter Your Name</label>
                <input type="text" name="Name" placeholder="Name" class="form-control" id="nameInput">
                </div>
                <div class="w-50">
                <label for="exampleFormControlInput1" class="form-label">Enter Your Phone </label>
                <input type="number" name="Phone" placeholder="Phone" class="form-control" id="phoneInput">
                </div>
              </div>
            
              <div class="mb-3 w-100">
                <label for="exampleFormControlInput1" class="form-label">Enter Your Email</label>
                <div class="d-flex ">
                <input type="email" name="Email" placeholder="Email" class="form-control text-center align-self-center" id="emailInput">
                </div>
              </div>
              <div>
                <label for="adreess">Adreess</label>
                <textarea id="adreess" placeholder="Type your address (255)" name="Adreess" rows="5" cols="60" class="d-block" maxlength="255" style="resize: none;"></textarea>
              </div>
              <button type="submit" class="btn btn-dark mt-2 w-100" name="CreateContact">Create Contact</button>
              <span id="SubmitError" class="text-danger"></span>
          </form>
      </div>
      <table class="table caption-top mt-3 container ">
            <caption class="TableCaption">Contacts list :</caption>
            <tbody>
              <?php
                //  if(isset($empty)){echo $empty ;}
                $getContact->getContacts();
                
              ?>
             
            </tbody>
          </table>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>