<?php 
include("dao.php");
?>
<?php 

if(isset($_POST['submit'])){
     echo $fname=$_POST['fname'];
	 $femail=$_POST['femail'];
     $fpassword=$_POST['fpassword'];
      $rePassword=$_POST['rePassword'];
     $user=array('fname'=>$fname,'femail'=>$femail,'rePassword'=>$rePassword);

    $in=new Insert();
      $in->add($user);
      if($in){
     	
     	header("location:../login/login.php");

      }
   }

   
?>
