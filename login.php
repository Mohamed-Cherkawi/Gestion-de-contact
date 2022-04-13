<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
     integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />  
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

    <div class=" container d-flex">

      <!-- Form -->
    <form method="POST" id="form" class="p-4 mt-5 ms-3  shadow rounded w-50 Form">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Username</label>
          <input type="text" class="form-control" id="usernameInput" aria-describedby="emailHelp" placeholder="Username" name="Username" max="20" onkeyup="validateUsername()">
          <span id="UserError" ></span>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="passwordInput" placeholder="Password" name="Password"  max="30" onkeyup="validatePassword()">
          <span id="PasswError"></span>
        </div>

        <button type="submit" class="btn signUpBtn w-100" name="logIn" onclick="return validateForm()">Sign in</button>
        <span id="SubmitError" class="text-danger"></span>
        <div class="pt-4">
            <span>No Account? <a href="signUp.php" class="ConnexionLinks">Sign up </a>here</span>
        </div>
      </form>
       <!-- Image -->
        <img class="w-50 Img2" src="src/Mobile login-rafiki.png" alt="Sign in image">
      </div>
     
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="Js/submit.js"></script>
  <script src="Js/script2.js"></script>
</body>
</html>