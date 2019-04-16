<html>
<head>
	
   <link rel="stylesheet" href="my.css">
   <meta charset='utf-8'>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<style>
	body {
		background: lightblue;
	}
	</style>
</head>

<body>
		<?php
			
			if (isset($_POST['add_user']))
			{
				$con=mysqli_connect("localhost","root","","vasi");
				$sql="insert into user values('$_POST[name]','$_POST[lastname]','$_POST[password]','$_POST[email]','$_POST[user_type]')";
				if (mysqli_query($con,$sql)) 
				{
					if ($_POST['user_type']=='admin')
						echo "<script> alert('Δημιουργήθηκε admin επιτυχώς')</script>";
					else
						echo "<script> alert('Δημιουργήθηκε user επιτυχώς')</script>";
					
					echo "<script> window.location.href='user.php'</script>";
				}
				else 
				{
					echo "<script> alert('ΔΕΝ δημιουργήθηκε admin/user')</script>";
					echo "<script> window.location.href='user.php'</script>";
				}
			}
		?>
		
		<a href="admin_loginpage.php"> <img src="image.jpg" alt="arrow" style="width:45px; height:45px; border:1;"> </a> 
		
			<form class="form-container2" action="" method="POST">
				<input type ="text" name="name" placeholder="Name">
				<input type="text" name="lastname" placeholder="lastname">
				<input type="email" required name="email" placeholder="email">
				<input type ="password" required name="password"  placeholder="password">
				<select name="user_type">
					<option> employee </option>
					<option> admin </option>
				</select>
				<input type="submit" value="Προσθήκη" name="add_user">
		</form>	
		
		<br><br><br>
