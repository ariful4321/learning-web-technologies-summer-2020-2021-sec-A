<?php include 'head.html'; ?>

<?php  
session_start();
 
if(!isset($_SESSION['username']))
{
    header('location:adminlogin.php');
}
?>

<!DOCTYPE html>
<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    

</head>
<body>
	<div style="position:fixed;
   right:20px;
   top:65px;" >
	<a href="../Logout.php" >Logout</a>
</div>
<div align="center">


	<title>Admin Panel</title>
		<br><br>	
	<a href="AddEmploye.php"> Add Employe</a>
	<br><br>
	
	
	<br><br>
	<a href="updateEmploye.php"> Update Employe Information</a>
	<br><br>
	<a href="deleteEmploye.php"> Delete Employe </a>
	<br><br>
	


</div>

</body>

</html>
