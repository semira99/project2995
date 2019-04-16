<meta charset= "utf-8">   

<?php
	error_reporting(E_ERROR|E_PARSE); 
	if ($_GET['e']) 
	{
		$con=mysqli_connect("localhost","root","","vasi");
		$sql="delete from user where email = '$_GET[e]'"; 
		if (mysqli_query($con,$sql)) 
		{
			echo "<script> alert('Η διαγραφή ολοκληρώθηκε επιτυχώς')</script>";
			echo "<script> window.location.href='user.php'</script>";
		}
		else 
		{
			echo "<script> alert('ΔΕΝ ολοκληρώθηκε η διαγραφή επιτυχώς')</script>";
			echo "<script> window.location.href='user.php'</script>";
		}
	}
?>

