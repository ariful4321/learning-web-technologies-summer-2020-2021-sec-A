<?php 
   include 'head.html'; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css">
    <title>Delete Records</title>
</head>
<body >

        <div class="container">
            <div class="row">
                <div class="col ml-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
                            <tr>
                                <td> User ID </td>
                                
                                <td> First Name </td>
                               
                                <td>Last Name </td>
                                
                                <td> D.O.B </td>
                                
                                <td> Gender  </td>
                                
                                <td> Email </td>
                                
                                <td> User Name  </td>
                                
                                <td> Password  </td>
                                
                                
                               
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $duserid = $row['duserid'];
                                        $FirstName = $row['FirstName'];
                                        $LastName = $row['LastName'];
                                        $DOB=$row['DOB'];
                                        $Gender=$row['Gender'];
                                        $Email = $row['Email'];
                                        $username = $row['username'];
                                        $password = $row['password'];
                                       
                                        
                                        
                            ?>
                                    <tr>
                                        <td><?php echo $duserid ?></td>
                                       
                                        <td><?php echo $FirstName ?></td>
                                        
                                        <td><?php echo $LastName ?></td>
                                        
                                        <td><?php echo $DOB ?></td>
                                       
                                        <td><?php echo $Gender ?></td>
                                       
                                        <td><?php echo $Email ?></td>
                                        
                                        <td><?php echo $username ?></td>
                                        
                                        <td><?php echo $password ?></td>
                                        
                                       
                                       

                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div  align="center">
    <label for="deleteemploye">Delete Employe by User ID:</label>
	<br>
	<input type="number" name="deleteemploye" id="deleteemploye">

	<button id="search" onclick="deleteemploye()">Delete</button>

	<p id="p1"></p>
</div>
</body>
<script>
	    function deleteemploye(){
	    
      var deleteemploye = document.getElementById("deleteemploye").value;


      if(deleteemploye == "" ) {
        document.getElementById("p1").innerHTML = "Please insert User ID";
        document.getElementById("p1").style.color = "red";
      }

      else {

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if(this.readyState == 4 && this.status == 200) {
            document.getElementById("p1").innerHTML = xhttp.responseText;
            document.getElementById("p1").style.color = "green";
          }
        }

        xhttp.open("POST", "deleteemployeaction.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("deleteemploye="+deleteemploye);
      }
    }


</script>
<br><br>
        <div style="position:fixed;
   right:10px;
   top:40px;" ><a href="AdminPanel.php"> back to Admin panel</a>
</div>

</html>
