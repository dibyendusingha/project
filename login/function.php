<?php

include("../conn.php");

 ?>

<?php 

function login($user){

	$conn=$GLOBALS['conn'];
	$femail=$user['femail'];
	$rePassword=$user['rePassword'];
	$n_pass=md5($rePassword);
	$sql="SELECT femail,rePassword  FROM `pro` WHERE femail=? AND rePassword=?";
	$sc=$conn->prepare($sql);
	 $sc->bind_param("ss",$femail,$n_pass);
	 if($sc->execute()){
	 	$result=$sc->get_result();
	 	if($result->num_rows>0){
            //$row=$result->fetch_assoc();
            return true;
       }
	 }
	 else {
        echo $conn->error; }
}
?>