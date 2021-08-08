
<!DOCTYPE html>
<html>
<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
	<title >Admin login </title>
</head>
<body>
	<h2 align="center">Admin Login</h2>
	<br><br>
	  <div align="center">
<form name="adminlogin" action="logincheck.php" onsubmit="return validate()" method="POST">
<label > Username :&nbsp;&nbsp;&nbsp;</label>
 
      <input name="username" type="text" class="Input" >
     <p> <?php echo $UserNameErr; ?> </p>


<label > Password :&nbsp;&nbsp;&nbsp;</label>
<input name="password" type="password" class="Input" >
     <p> <?php echo $PasswordErr; ?> </p>

<br>
<div class="col ml-5"><div class="col ml-5">
<input name="Submit" type="submit" value="Login" class="Button3" style="height:30px; width:85px;">
	</div></div>




</form>

<br>
	<p id="errorMsg"></p>

	<script>
			function validate() {
				var isValid = false;

				var username = document.forms["adminlogin"]["username"].value;
				var password = document.forms["adminlogin"]["password"].value;


				if( username == "" || password == "" ) {
					document.getElementById("errorMsg").innerHTML = "<b>Please fill up the form properly.</b>";
					document.getElementById("errorMsg").style.color = "red";
				}
				else {
					isValid = true;
				}

				return isValid;
			}
		</script>
<br><br><br><br><br><br><br><br>
</div>
          <div style="position:fixed;
   right:10px;
   top:40px;" >
<a href="C:\Users\Dell\Desktop\Webtech\Homepage.html"> Back to the Homepage.</a>
    </div>
</body>

</html>