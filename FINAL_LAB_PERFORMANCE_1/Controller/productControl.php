<?php

require_once('../Model/userModel.php');

if(isset($_POST['Save']))
    {
    	$name = $_POST['name'];
    	$buying_price = $_POST['buying_price'];
    	$selling_price = $_POST['selling_price'];

    	if ($name != "" && $buying_price != "" && $selling_price != "")
    	{
    		insertUser($name, $buying_price, $selling_price);
    		if(isset($_POST["Display"])) 
	    	{
	    		header('location:../View/display.php');
	    	}
    	}


    }

if(isset($_POST['Update']))
  {		
  		$name = $_POST['name'];
    	$buying_price = $_POST['buying_price'];
    	$selling_price = $_POST['selling_price'];



    	if ($name != "" && $buying_price != "" && $selling_price != "")
    	{
    		updateUser($name, $buying_price, $selling_price);
    		if(isset($_POST["Display"])) 
	    	{
	    		header('location:../View/display.php');
	    	}
    	}

  }

  if(isset($_POST['Delete']))
  {		
  		$name = $_POST['name'];
    	$buying_price = $_POST['buying_price'];
    	$selling_price = $_POST['selling_price'];



    	if ($name != "" && $buying_price != "" && $selling_price != "")
    	{
    		deleteUser($name);
    		
	    		header('location:../View/display.php');
	    }

  }


?>
