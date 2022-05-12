<?php 
include("dao.php");
?>


<?php
if(isset($_POST['submit']) && $_FILES['profile_name']){
    $file=$_FILES['profile_name'];
    $name=$file['name'];
    $type=$file['type'];
    $size=$file['size'];
    $error=$file['error'];
    $tmp_name=$file['tmp_name'];
    if($error==0)
    {
        if($size<1250000)
        {
            $ext=pathinfo($name,PATHINFO_EXTENSION);
            $ext_l=strtolower($ext);
            $new_name=uniqid("img-",true).".".$ext_l;
            $path='upload/'.$new_name;
            
            $upload=uploadFile($new_name);
            if(uploadFile($new_name))
            {
                if(move_uploaded_file($tmp_name,$path))
                {
                    header("location:welcome.php");
                }
            }
            else{echo "canot upload image";
             }
        }
        else{echo "it is maximum size of image";
           }
       }
    else{
        echo " something wrong ";
      }
$name=$_POST['name'];
 $phone=$_POST['phone'];
 $address=$_POST['address'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $gender=$_POST['gender'];
 $dept=$_POST['dept'];
  $hobby=$_POST['hobby'];
 $h=implode(",", $hobby);
 $user=array('name'=>$name,'phone'=>$phone,'address'=>$address,'email'=>$email,'password'=>$password,'gender'=>$gender,'dept'=>$dept,'hobby'=>$h);

 $insert=insert($user);
 if(insert($user))
 {
  header("location:welcome.php?name=$name&phone=$phone&address=$address&email=$email&password=$password&gender=$gender&department=$dept&hobby=$h");
 
}
 else{
echo $conn->error;
 }
}

function getImg(){
$img=getFiles();
return $img;
}
?>