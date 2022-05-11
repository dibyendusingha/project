<?php 
include("function.php");
?>

<?php 
if(isset($_POST['login'])){
	$femail= $_POST['femail'];
	$rePassword=$_POST['rePassword'];
	$user=array('femail'=>$femail,'rePassword'=>$rePassword);

	//login($email,$password);
	login($user);
	if(login($user)){
		// session_start();
	 // $_SESSION['e']=$email;
	header("location:../product/home.php?email=$femail");

	}
	else{
		header("location:login.php");
	}
}
?>