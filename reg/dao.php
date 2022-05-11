<?php 

include("../conn.php");
?>
<?php 

 class Insert{

 	function add($user){
 	$conn=$GLOBALS['conn'];
    $username=$user['username'];
    $phone=$user['phone'];
    $email=$user['email'];
    $password=$user['password'];
    $new_password=md5($password);

	$sql="INSERT INTO clg_pro VALUES(null,?,?,?,?)";
    $sc=$conn->prepare($sql);
    $sc->bind_param("ssss",$username,$phone,$email,$new_password);
    if($sc->execute()){
	//echo "<br>"."Insert database";
    return true;
   }
    else{
	//echo $conn->error;
    return false;
     } 
}

 }

?>
