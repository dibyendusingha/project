<?php 

include("../conn.php");
?>
<?php 

 class Insert{

 	function add($user){
 	$conn=$GLOBALS['conn'];
    $fname=$user['fname'];
    $femail=$user['femail'];
    $rePassword=$user['rePassword'];
    $new_password=md5($rePassword);

	$sql="INSERT INTO pro VALUES(null,?,?,?)";
    $sc=$conn->prepare($sql);
    $sc->bind_param("sss",$fname,$femail,$new_password);
    if($sc->execute()){
	echo "<br>"."Insert database";
    //return true;
   }
    else{
	echo $conn->error;
    //return false;
     } 
}

 }

?>
