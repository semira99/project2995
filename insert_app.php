<?php
session_start();
?>
<?php
	$email=$_SESSION['email'];
  /*  $from = '$_POST[email]';
    $to = "semievans99@gmail.com";
    $subject = "Checking PHP mail";
    $message = "PHP mail works just fine";
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";*/

			$con=mysqli_connect("localhost","root","","vasi");
			
			$query="insert into app(user_email,vac_start,vac_end,reason)
			values ('$email','$_POST[vacation_start]','$_POST[vacation_end]','$_POST[reason]')";

			if(mysqli_query($con,$query)==true) 
			{
				echo "<script> alert('Application submitted')</script>";
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
			echo'<table class="paleBlueRows">';		
			for($k=1;$k<=$i;$k++)
			{
				if($email==$table1[$k])
				echo'<tr><td>from'.' '.$table2[$k].' to '.$table3[$k].'</td></li></tr>';
			}
			echo"</table>";
			}

			else
			{
				echo "<script> alert('Η εγγραφή ΔΕΝ καταχωρήθηκε επιτυχώς')</script>";
				
				echo "<script> window.location.href='form_application.php'</script>"; 
			}	
?>
<a href="employee_applist.php"> <img src="image.jpg" alt="arrow" style="width:30px; height:30px; border:1;"> </a>
</body>
</html>