<?php 
	
	error_reporting(E_ERROR | E_PARSE);
	$con=mysqli_connect("localhost","root","","vasi");
	$res=mysqli_query($con,"select * from users where email='$_GET[e]'");
	$row=mysqli_fetch_array($res);
	$sos=$_GET[e];
	echo $sos;
 
	if(isset($_POST['update_button'])) 
		{	
			$query="update user set 
						name='$_POST[name]', 
						lastname='$_POST[lastname]', 
						password='$_POST[password]', 
						email='$_POST[email]',
						user_type='$_POST[user_type]'
					where email='$_GET[e]'
					";
				
			if (mysqli_query($con,$query)==true)  
			{
				echo"<script>alert('Η τροποποίηση ολοκληρώθηκε επιτυχώς')</script>";
				echo"<script>window.location.href='admin_applist.php' </script>";
			}
			else
			{
				echo "<script> alert('Η τροποποίηση ΔΕΝ ολοκληρώθηκε επιτυχώς')</script>"; 
				echo "<script> window.location.href='update_user.php'</script>"; 
			}
		}
?>

<html>
	<head>
		<title>Ενημέρωση </title>
		<meta charset= "utf-8">        <!-- entoli pou fortwnei KAI tous ellinikous xaraktires -->
		<link rel = "stylesheet" type = "text/css" href = "newcss.css">
	</head>

	<body> <!--Δημιουργούμε μία φόρμα στην οποία εμφανίζουμε όλα τα στοιχεία του πελάτη τον οποίο επιλέξαμε.-->
	<a href="user.php"> <img src="image.jpg" alt="arrow" style="width:25px; height:25px; border:1;"> </a> 
		<form action ="" method="post"> <!--Ο παραλήπτης είναι ίδια σελίδα λόγω κενού στο action-->
			<fieldset>
				<legend> Στοιχεία </legend> 
				<table>
				<?php
				echo 
					"<tr><th>name</th><td><input type='text' name='name' value='$row[name]'> </td> </tr>
					<tr><th>lastname</th><td><input type='text' name='lastname' value='$row[lastname]'> </td> </tr>
					<tr><th>Password</th><td><input type='password' name='password' value='$row[password]'> </td> </tr>
					<tr><th>Email</th><td><input type='text' name='email' value='$row[email]'> </td> </tr> 
					<tr><th>Τύπος</th><td><input type='text' name='user_type' value='$row[user_type]'> </td> </tr>
					<tr><td colspan='2'> <div align='center'> <input type='submit' name='update_button' value='Update'></td></tr>";
				?>
				</table>
			</fieldset>	
		</form>
	</body>
</html>	