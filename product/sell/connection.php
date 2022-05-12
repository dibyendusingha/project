<?php
$servername="localhost";
$username="root";
$password="";
$database="clg_pro";
$conn= new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
	die("Error :".$conn->connect_error);

}
else{
	//echo "connection database";
}


 ?>