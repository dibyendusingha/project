
<?php 
$conn=new mysqli("localhost","root","","clg_pro");
if($conn->connect_error){
	die("Error :". $conn->connect_error);

}
else{
	echo "connection.. ";
}


?>


