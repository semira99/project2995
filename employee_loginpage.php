<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel = "stylesheet" type = "text/css" href = "newcss.css">
  
  <style>
	body {
		background: lightblue url("14.png") ;
	}
	</style>
</head>

<body>
<a href="index.php"> <img src="image.jpg" alt="arrow" style="width:30px; height:30px; border:1;"> </a>
<fieldset>

	<form class="form-container2" action="employee_applist.php" method="POST">
  <h2>Login Page</h2>
 
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" name="email" placeholder="Enter email" >
    </div>
	
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" >
    </div>
	
    <button type="submit" class="button3">Login</button>
	
  </form>

</fieldset>

</body>
</html>
