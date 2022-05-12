<?php 
include("dao.php");
?>
<?php 

if(isset($_POST['submit'])){
     echo $username=$_POST['username'];
	 $phone=$_POST['phone'];
     $email=$_POST['email'];
      $password=$_POST['password'];
    

     $user=array('username'=>$username,'phone'=>$phone,'email'=>$email,'password'=>$password);
     $in=new Insert();
     $in->add($user);
     if($in){
     	echo "registration successfully";
     	header("location:../product/product.php");

     }
  }

  if(isset($_POST['login'])){
  	header("location:../login/login.php");

  }
?>
