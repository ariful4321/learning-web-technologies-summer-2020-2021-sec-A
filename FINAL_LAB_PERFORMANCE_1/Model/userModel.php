<?php
	require_once('DB_config.php');
	
	function getUserByID($id){

		$conn = getConnection();
		$sql = "select * from products where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$product = mysqli_fetch_assoc($result);
		return $product;
	}

	function getAllUser(){
		$conn = getConnection();
		$sql = "select * from products";
		$result = mysqli_query($conn, $sql);
		$products = [];

		while($product = mysqli_fetch_assoc($result)){
			array_push($products, $product);
		}

		return $products;
	}


	function deleteUser($name){
		$conn = getConnection();
		$sql = "delete from products
				where name = '{$name}'";
		mysqli_query($conn, $sql);
	}


	function updateUser($name, $buying_price, $selling_price){
		$conn = getConnection();
		$sql = "update products
				set name= '{$name}', buying_price= '{$buying_price}', selling_price= '{$selling_price}'
				where name = '{$name}'";
		mysqli_query($conn, $sql);

	}

	function insertUser($name, $buying_price, $selling_price){
		$conn = getConnection();
		$sql = "insert into products (name, buying_price, selling_price) values ('$name', '$buying_price' , '$selling_price')";
		mysqli_query($conn, $sql);
		
	}

?>