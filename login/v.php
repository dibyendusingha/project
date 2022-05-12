<?php 
include("function.php");
?>

<?php 
if(isset($_POST['login'])){
	
	$femail= $_POST['femail'];
	$rePassword=$_POST['rePassword'];
	$user=array('femail'=>$femail,'rePassword'=>$rePassword);
     
	login($user);
	if(!login($user)){

		// session_start();
	 // $_SESSION['e']=$email;
	header("location:../product/home.php?email=$femail");
	$msg="Can not match";
		header("location:login.php?msg=$msg");

	}
	else{
		header("location:../product/home.php?email=$femail");
		
		// $msg="Can not match";
		// header("location:login.php?msg=$msg");
	}
}
?>