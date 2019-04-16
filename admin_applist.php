<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="newcss.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  <style>
	body {
		background: lightblue url("11.png") repeat fixed bottom  ;
	}
	</style>
</head>
<body>

<div class="container">
<?php
error_reporting(E_ERROR | E_PARSE);
if (isset($_POST['email']) && isset($_POST['password']))
{
	$email=$_POST['email'];
	$con=mysqli_connect("localhost","root","","vasi");
	$query=mysqli_query($con,"select * from user where user_type='admin' and email='$email'");
	
	if($row=mysqli_fetch_array($query))
	{
			if($_POST['email']==$row['email'] && $_POST['password']==$row['password'])
		{
			echo "<script> alert ('Επιτυχής Σύνδεση') </script>";
			$_SESSION['sessionadmin']=1;	
		}
		else
		{
			echo "<script> alert ('Λάθος ή Κενά Στοιχεία') </script>";
			$_SESSION['sessionadmin']=0;
		}
	}
	
}

 if(@$_SESSION['sessionadmin']==0 || @$_SESSION['sessionadmin']=="")
 {
	 echo "<h1 style='color:white';>Σφάλμα Σύνδεσης</h1>";
	 echo "<a href='index.php'><img src='image.jpg' alt='arrow' style='width:25px; height:25px; border:1;'> Back</a>";
 }
 if($_SESSION['sessionadmin']==1)
 {
	 
	 echo"<tr><td><h2><a href='user.php' class='button'>Create User</h1></a></td><br>";
	 echo'<br>';
	
		$con=mysqli_connect("localhost","root","","vasi");
		$res= mysqli_query ($con, "select * from user");
		
		echo"<table  class='paleBlueRows'>";
		while ($row=mysqli_fetch_array($res)) 
		{		
				echo "<tr>
				<td>$row[name]</td>
				<td>$row[lastname]</td>
				<td>$row[password]</td>
				<td>$row[email]</td>
				<td>$row[user_type]</td>
				<td><a href = 'update_user.php?e=$row[email]'> <span class='glyphicon glyphicon-pencil'></span> </span> </td>
				<td> <a href = 'delete_user.php?e=$row[email]'> <span class='glyphicon glyphicon-trash'></span> </span> </td> 
				</tr>";
		}
		echo"</table>";
 }
 
?>

</div>
</body>