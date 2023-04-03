<?php
session_start();

//this helped with erros earlier
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	
include("connection.php");
	include("functions.php");

if($_SERVER['REQUEST_METHOD']== "POST")
{
    //sum was posted 
    $user_name = $_POST['user_name'];
    $password= $_POST['password'];
	

    $query = "SELECT * FROM users WHERE user_name = '$user_name'";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) {
      echo "<p>Username already exists. Please choose a different username.</p>";
      
    }else if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
    	
        //save to database
        $user_id = random_num(20);
        $query = "insert into users(user_id, user_name, password,date) values('$user_id', '$user_name', '$password',NOW())";
        mysqli_query($con, $query);
        header("Location: login.php");
        die();
    }else
    {
        //p tag so you can see the white font 
        echo "<p>Please enter valid info</p>";
    }


}






?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Sign Up </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

    <!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


   
    <!-- Custom styles for this template -->
    <link href="styles.css" rel="stylesheet">
  </head>
  <body class="text-center">


  <style type="text/css">

.bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }

  html,
body {
  height: 100%;
}

body {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #24272b;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
p{
  color:white;
}
</style>
    <form class="form-signin" method = "post">
    <img class="mb-4" src="Notess.gif" alt="Notess" width="80" height="80">
  <h1 class="h3 mb-3 font-weight-normal" style="color:white;">Welcome! Create your account</h1>
  <label for="inputEmail" class="sr-only">User name</label>
  <input type="text" id="inputEmail" name="user_name" class="form-control" placeholder="user name" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
  <div class="checkbox mb-3">
    
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit" value="Login">Sign up</button>
  <a href="login.php">Click to log in </a>
  <p class="mt-5 mb-3 text-muted">&copy; 2023-2024</p>
</form>
</body>
</html>

