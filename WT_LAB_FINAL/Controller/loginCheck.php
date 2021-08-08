<?php

   //include 'head.html'; 
		$UserName = "";
		$Password = "";
		$UserNameErr = "";
		$PasswordErr = "";
	if( $_SERVER["REQUEST_METHOD"] == "POST"){
	
	
	
		if(empty($_POST['username'])){
		echo "please fill up username properly"; 
		echo "<br>";
				 
	}
	else{

		$UserName = $_POST['username'];
		

	}
		if(empty($_POST['password'])){
		echo "please fill up password properly"; 
			echo "<br>";	 
	}
	else{

		$Password = $_POST['password'];
		

	}

}




	session_start();

	include('db.php');
 
	$error="";
	$msg ="";

	if (isset($_POST['Submit'])) {
		$username=$_POST['username'];
		$password=$_POST['password'];

		$connection = new db();
		$conobj=$connection->OpenCon();
		$userQuery=$connection->CheckUser($conobj,"admin",$username);

		if($userQuery->num_rows > 0){
			while($row = mysqli_fetch_assoc($userQuery)){
				//$job = $row["profession"];
				$pass_w = $row["password"];//DB's data

				if ($pass_w == $password){
						
					$_SESSION['username']=$username;
						header("location:AdminPanel.php");
						//echo $msg="Success";

				}

				else{ echo "<h1 >Password is incorrect!</h1>"; }
			}
		}

		else { echo "<h1 >Username or Password is invalid</h1>";}

		$connection->CloseCon($conobj);

	}
?>
