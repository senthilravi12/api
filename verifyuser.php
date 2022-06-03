<?php   
       
        $user=$_POST['username'];
        $pass=$_POST['password'];

        //$user='senthil';
        //$pass='12345';

        include "config.php";
$query="SELECT * from login where username='$user' and 
              password='$pass' ";
//echo $query;
$result = mysqli_query($conn,$query);
$n=mysqli_num_rows($result);
$ar=array();
//echo $n;
if($n>0){
    // echo "in if";
    $code = "000";
    $status = "SUCCESS";
 }else{ 
    // echo "in else";
    $code = "999";
    $status = "FAILURE";
 }
 
 $ar=array(
     "code"=>$code,
     "status"=>$status
 );
 $ch=json_encode($ar);
 echo $ch;


?>