<?php

include("conn.php");

 ?>

 <?php 

if(isset($_POST['submit'])){
	echo $name=$_POST['name'];
	echo $product=$_POST['product'];
	echo $price=$_POST['price'];
	echo $address=$_POST['address'];
	echo $birthday=$_POST['birthday'];
	echo $gender=$_POST['gender'];
	echo $email=$_POST['email'];
	echo $phone=$_POST['phone'];
	echo $addp=$_POST['addp'];
	//echo $total=$price *$addp;

	$sql="INSERT INTO mobile VALUES(null,'$name','$product','$price','$address','$birthday','$gender','$email','$phone','$addp')";

	$sc=$conn->query($sql);
	if($conn->query($sql)){
		echo "insert";

	}
	else{
		echo $conn->error;
	}


}


?>