<?php
session_start();
	include("connection.php");
	include("functions.php");
	$user_data = check_login($con);
?>

<style >
	body {
  margin: 0;
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen',
    'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue',
    sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
 
}

code {
  font-family: source-code-pro, Menlo, Monaco, Consolas, 'Courier New',
    monospace;
}


h1{
	padding:15px;
	text-align:center;
}


.note-text{
	border:none;
	resize: none;
	height:200px;
	box-shadow: 0 0 7px rgba(0,0,0,0.15);
	padding:10px;
 	border-radius:10px;
 	font-size:16px;
	
}
#app{
  
overflow:auto;
display:grid;
grid-template-columns: repeat(auto-fill,200px);
padding:20px;
gap:20px;
max-height: calc(100vh - 150px); /* Set a maximum height for the notes container */
  margin-bottom: 100px; /* Set a margin bottom to create space for the button */
}
.add-note{
	height:200px;
	
	border:none;
	outline:none;
	
	background: rgba(0,0,0,0.1);
	border-radius:10px;
	font-size:100px;
	cursor: pointer;
	transition:background 0.2s;
}
.add-note:hover{
background: rgba(0,0,0,0.2);




}



</style>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="main.js" defer></script>
    <title>My Website</title>
</head>
<body style="background-color:#292b2a;">

	<nav class="navbar navbar-expand-lg navbar-dark  bg-dark ">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Notes</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page"  href="login.php">Log Out</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Sign In</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            More options
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Leave review</a></li>
            <li><a class="dropdown-item" href="https://github.com/Raulj123/NotesApp">Github repo</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">idk what to add here</a></li>
          </ul>
       
      </ul>
      <form class="d-flex" >
        <input  class="form-control me-2" id="search_input" type="text" placeholder="Search" aria-label="Search" >
        <button class="btn btn-outline-success"  type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
	
	<h1 style="color:white;">hello, <?php echo $user_data['user_name']; ?> &#128512</h1>
	
	
	
	<div id="app">	
	
	<button class="add-note" type="button">+</button>
	</div>	
	
		
	
    
</body>
</html>
