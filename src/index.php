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
.note-tag {
	position: absolute; /* position the tag relative to the note */
	top: 200px; /* adjust the top and left values as needed */
	left: 60px;
	background-color: #f2f2f2;
	color: #333;
	font-size: 12px;
	padding: 3px 6px;
	border-radius: 5px;
}
.btn{
  height:2rem;
  margin-left:9px;
  padding:5px;
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
  <img class="navbar-brand" href="index.php" src="./media/Notess.gif" alt="Notess" width="40" height="50">
    <!-- <a class="navbar-brand" href="index.php">Notes</a> -->
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
            <li><a class="dropdown-item" href="https://github.com/Raulj123/Notess">Github repo</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">idk what to add here</a></li>
          </ul>
       
      </ul>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <form class="d-flex"  method ="get" >
        <input  class="form-control me-2" id="search_input" type="text" placeholder="Search" aria-label="Search" >
        <button type="button" id="tag1" class="btn btn-outline-success">Math</button>
        <button type="button" id="tag2" class="btn btn-outline-success" style="white-space: nowrap;" >Computer Science</button>
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
