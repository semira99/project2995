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
	$query=mysqli_query($con,"select * from user where user_type='employee' and email='$email'");
	
	if($row=mysqli_fetch_array($query))
	{
			if($_POST['email']==$row['email'] && $_POST['password']==$row['password'])
		{
			echo "<script> alert ('Επιτυχής Σύνδεση') </script>";
			$_SESSION['sessionadmin']=1;
			
			 
			$_SESSION['email']=$row['email'];
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
	
	 echo"<tr><td><h2><a href='form_application.php' class='button'>submit request</h1></a></td><br>";
	 echo'<br>';
	 echo'<h2>Application List</h2>';
	 
	$query=mysqli_query($con,"select * from app order by date DESC");
 
		$i=0;
		while($row=mysqli_fetch_array($query))
		{
			$i++;
			$table1[$i]=$row['user_email'];
			$table2[$i]=$row['date'];
			$table3[$i]=$row['vac_start'];
			$table4[$i]=$row['vac_end'];
			
		}
				echo"<ul>";
		echo'<table class="paleBlueRows"><h2>';		
for($k=1;$k<=$i;$k++)
{
	if($_SESSION['email']==$table1[$k])
	echo'<tr><td><li>from'.' '.$table2[$k].' to '.$table3[$k].'</td><td>'.$table4[$k].'</td></li></tr>';
}
echo"</table></h2>";

echo"</ul>";
	
 }
 
?>

</div>
</body>