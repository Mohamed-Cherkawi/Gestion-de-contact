<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
     integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />  
    <link rel="stylesheet" href="../src/assets/Css/style.css">
</head>
<style>
  body {
    overflow-y: hidden;
  }
</style>
<body>
    <!-- Header -->
<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <span class="navbar-brand ">Contacts list</span>
      <a href="login.php" class="LoginLink text-secondary">Login</a>
    </div>
    
  </nav>

    <div class="container d-flex">

      <!-- Form -->
    <form method="POST" action="../src/includes/Signup.inc.php" id="form" class="p-4 mt-5 Form shadow rounded w-50">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Username</label>
          <input type="text" class="form-control" id="usernameInput" aria-describedby="emailHelp" placeholder="Username" name="Username" onkeyup="validateUserName()">
          <span id="UserError" ></span>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="passwordInput" placeholder="Password" name="Password" onkeyup="validatePassword()" max="30" >
          <span id="PasswError" class="text-danger"></span>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Password Verify</label>
            <input type="password" class="form-control" id="PasswordVerifyInput" aria-describedby="emailHelp" placeholder="Password verify" name="PasswordVerify" onkeyup="validateCPassword()" max="30">
            <span id="CPasswError" class="text-danger"></span>
          </div>
        <button type="submit" class="btn signUpBtn w-100" name="SignUp" onclick="return validateForm()">Sign up</button>
        <span id="SubmitError" class="text-danger"></span>
        <div class="pt-4">
            <span>Already have an account? <a href="login.php" class="ConnexionLinks">Login </a>here</span>
        </div>
      </form>
      <img class="Img2 w-50" src="../src/assets/img/Mobile%20login-amico.png" alt="Sign up image">
      </div>

  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script>
    if(window.history.replaceState) {
    window.history.replaceState(null , null ,window.location.href);
}
  </script>  
  <script src="../src/assets/Js/script.js"></script>
</body>
</html>