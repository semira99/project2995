<?php
session_start();
?>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="newcss.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
    <title>Application site</title>
	<style>
	body 
	{
		background: url("10.png") ;
	}
	</style>
</head>
 <form class="form-container2" action="insert_app" method="POST" onsubmit="return myfunction()">  
			
				Vacation Start: <br>   
				<input class="form-field" type="date" name ="vacation_start" placeholder="Date from" required>  <br>
				Vacation end: <br> 
				<input class="form-field" type="date" name="vacation_end" placeholder="Date to" required> <br> 
				Reason<br> 
				<input class="form-field" color="lightblue" type="textarea" name="reason" placeholder="Reason" required> <br> 
				
				
				<br>
				
				<input class="submit-button" type="submit" name="button2" value="Create Application"> <br> 
				<br>
				<button class="submit-button" type="reset" value="reset"> Reset Values </button> <br> <!-- Το κουμπί reset καθαρίζει τα πεδία της φόρμας --> 
		</fieldset>		
	</form>
</html>