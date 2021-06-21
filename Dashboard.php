<?php
session_start();
?>
<html>
<head>
	<title> DashBoard </title>
</head>
<body>

    <form >
    
        <table border = "1" height ="100%" width ="100%">
        <tr>
            <td align= "Right" colspan = 3>
                Logged in as <a href="Dashboard.php"> <?php echo $_SESSION["user"]["username"]; ?> </a> |
                <a href="../Controller/Logout.php">Logout</a> 
            </td>
        </tr>
        <tr height= "80%">
            <td width = "30%"  valign= "top">
            <h2>Account </h2>
            
            <hr>
            
   
                    <ul type= "disc" >
                    <li> <a href= "Dashboard.php"> Dashboard </a> </li>
                    <li> <a href= "View_Profile.php"> View Profile </a> </li>
                    <li> <a href= "Edit_profile.php"> Edit Profile </a> </li>
                    <li> <a href= "Edit_propic.php"> Change Profile Picture </a> </li>
                    <li> <a href= "ChangePass.php"> Change Password </a> </li>
                    <li> <a href= "../Controller/Logout.php"> Logout </a> </li>
                    </ul>
                
            </td>
            <td colspan=2 valign= "top" >
                <h2> Welcome  <?php  echo $_SESSION["user"]["username"]; ?></h2>
            </td>
        </tr>
            
        <tr>
            <td colspan=3>
            <center>
            <p>Copyright © 2017</p>
            </center>
            </td>
        </tr>
        </table>
    </form>

</body>
</html>