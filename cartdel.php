<?php

	session_start();

	$code=$_GET['code2'];

	if(!isset($_SESSION['email']) ||(!isset($_SESSION['pwd'])))

	{

		

		header('location:login.php');

	}

	 $email=$_SESSION['email'];

	$pwd=$_SESSION['pwd'];

 ?>

<?php

//include database

	include 'dbconnection.php';
	
	
	//select value form shopping card database
	
	$query1="select * from shopping_cart where ser_no='".$code."'";

	$rs1=mysql_query($query1);
	
	
	//store value to the variable
	
	while($row1=mysql_fetch_array($rs1)){
	
	$add_quantity = $row1['quantity'];
	
	$pcode=$row1['product_code'];
	}
	
	//
	
	$query2="select * from product where product_code='".$pcode."'";

	$rs2=mysql_query($query2);
	
	while($row2=mysql_fetch_array($rs2)){
	
	$up_quantity=$add_quantity+$row2['quantity'];
	
	}
	
	$query3="update product set quantity = '".$up_quantity."' where product_code ='".$pcode."'";

	$rs3=mysql_query($query3);
	
		//delete shopping cart   

	$query="delete from shopping_cart where ser_no='".$code."'";

	$rs=mysql_query($query);
	
	if($rs && $rs3)

	{
		
		header('location:cartdetails.php' );

	}

?>