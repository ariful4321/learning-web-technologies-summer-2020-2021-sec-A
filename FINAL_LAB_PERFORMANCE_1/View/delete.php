<?php
	
	require_once('../Model/userModel.php');

	$id = $_GET['id'];
	$product=getUserByID($id);

?>

<html>
<head>
	<title>Delete Product</title>
</head>
<body >
	<form method="post" action="../Controller/productControl.php">
		<fieldset style ="margin: 0px 460px ;" >
            <legend><b>Delete Product</legend>
            	<br>
   

		<table>
			<tr>
				<td><b>Name </td>
	            <td>
	            <input type="text" name="name" value="<?=$product['name']?>">
	            </td>
	        </tr>

	        <tr>
				<td><b>Buying Price </td>
	            <td>
	            <input type="text" name="buying_price" value="<?=$product['buying_price']?>">
	            </td>
	        </tr>

	        <tr>
				<td><b>Selling Price </td>
	            <td>
	            <input type="text" name="selling_price" value="<?=$product['selling_price']?>">
	            </td>
	        </tr>
	        <tr>
	        	<td colspan="2"> <hr> </td>
	        </tr>

	        <tr>
	        	<td colspan="2"> <input type="submit" name= "Delete" value="Delete"> </td>
	        </tr>
		</table>

	</form>
</body>
</html>