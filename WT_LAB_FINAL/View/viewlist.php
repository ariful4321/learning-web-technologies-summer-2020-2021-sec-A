<?php include 'head.html'; ?>
<!DOCTYPE html>
<html>
<head>


	    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    	<title>Check user list</title>
</head>
<body>


			<div class="col ml-5">
				


	<h2>Seach By User Type and User ID </h2>

	<label for="searchemploye">Search employe by User ID:</label>
	<br>
	<input type="number" name="searchemploye" id="searchemploye">

	<button id="search" onclick="searchemploye()" style="height:30px; width:150px">Search</button>

	<p id="p1"></p>
	<a href="Addemploye.php"> Add employe</a>
	<br>
	<hr>
	<br>

	<script>
		


		function searchemploye() {
			var searchemploye = document.getElementById("searchemploye").value;

			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if(this.readyState == 4 && this.status == 200) {
					document.getElementById("p1").innerHTML = xhttp.responseText;
				}
			}

			xhttp.open("GET", "employeviewlistaction.php?searchemploye=" + searchemploye, true);
			xhttp.send();
		}

		
	</script>
	<br></div>
        <div style="position:fixed;
   right:10px;
   top:40px;" ><a href="AdminPanel.php"> back to Admin panel</a>
</div>

	
</body>

</html>