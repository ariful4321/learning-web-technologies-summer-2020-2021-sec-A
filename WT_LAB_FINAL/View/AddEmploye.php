<?php session_start(); 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Employe</title>
</head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    

<?php
include 'head.html';

?>

<body>
        <div style="position:fixed;
   right:10px;
   top:40px;" ><a href="AdminPanel.php"> back to Admin panel</a>
</div>

	<h2 align="center">Add Employe </h2>
<div class="col ml-5">






<form name="AddEmploye" action="JSEmployeAction.php" onsubmit="return validate()" method="POST">
	<label for = "fname"> First name :&nbsp;&nbsp;&nbsp; </label>
<input type="text" name="fname" id="fname">


<br>
<br>

<label for = "lname"> Last name :&nbsp;&nbsp;&nbsp;</label>
<input type="text" name="lname" id="lname">

<br>
<br>

<label for = "dob"> Date of birth :&nbsp;&nbsp;&nbsp;</label>
<input type="date" name="dob" id="dob">

<br>
<br>

<label for = "gender"> Gender :&nbsp;&nbsp;&nbsp;</label>
<input type="radio" name="gender" id="male" value="male">
<label for = "male"> Male </label>
<input type="radio" name="gender" id="female" value="female">
<label for = "female"> Female </label>

<br>
<br>

<label for = "email"> Email :&nbsp;&nbsp;&nbsp;</label>
<input type="email" name="email" id="email">

<br>
<br>



<label for = "username">User Name :&nbsp;&nbsp;&nbsp;</label>
<input type="text" name="username" id="username">

<br>
<br>

<label for = "password"> Password :&nbsp;&nbsp;&nbsp;</label>
<input type="password" name="password" id="password">


<br>
<br>
<input type="submit" value="Submit" style="height:30px; width:150px">
</form>

<br>

<br>
	<p id="errorMsg"></p>

	<script>
			function validate() {
				var isValid = false;
				var fname = document.forms["AddEmploye"]["fname"].value;
				var lname = document.forms["AddEmploye"]["lname"].value;
				var dob = document.forms["AddEmploye"]["dob"].value;
				var gender = document.forms["AddEmploye"]["gender"].value;
				var email = document.forms["AddEmploye"]["email"].value;
				var username = document.forms["AddEmploye"]["username"].value;
				var password = document.forms["AddEmploye"]["password"].value;
			
				if(fname == "" || lname == "" || dob == "" || gender == "" || email == "" || username == "" || password == "" || Speciality == "" || starttime == "" || endtime == "") {
					document.getElementById("errorMsg").innerHTML = "<b>Please fill up the form properly.</b>";
					document.getElementById("errorMsg").style.color = "red";
				}
				else {
					isValid = true;
				}

				return isValid;
			}
		</script>



</div>


</body>

</html>
