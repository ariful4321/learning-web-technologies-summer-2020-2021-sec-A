<?php
	require_once('../Model/userModel.php');
	$products = getAllUser();
?>

<html>
<head>
	<title> Display </title>
</head>
	<body>
		<fieldset style ="margin: 0px 460px ;" >
            <legend><b>Display</legend>
            	<br>
		<table border="1">
			<tr>
				<td>NAME</td>
				<td>PROFIT</td>
				<td colspan="2">ACTION</td>
			</tr>

			<?php  for($i=0; $i<count($products); $i++){ ?>
				<tr>
					<td><?=$products[$i]['name']?></td>
					<td><?=$products[$i]['selling_price']-$products[$i]['buying_price'] ?></td>
					
					<td>
						<a href="edit.php?id=<?=$products[$i]['id']?>">Edit</a>
					</td>
					<td>
						<a href="delete.php?id=<?=$products[$i]['id']?>">Delete</a>
					</td>
				</tr>
			<?php } ?>
		</table>
	</body>
</html>