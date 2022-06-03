<?php
if(isset($_POST['username'])){
    //echo "clicked";
    $username1=$_POST['username'];
    $password1=$_POST['password'];

    //$username1='senthil';
    //echo $username1;
    //$password1='123451';
    //echo $password1;
$data=array(
    "username"=>"$username1",
    "password"=>"$password1"
);

$url="http://localhost/curl_php/login_curl/verifyuser.php";
$ch=curl_init($url);
$data_string = urlencode(json_encode($data));
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);


$js=curl_exec($ch);
curl_close($ch);
$de=json_decode($js,true);
/*
echo $de['code'];
echo '<br>';
echo $de['status'];
*/
$code=$de['code'];
$status=$de['status'];

if($code=='000' && $status=='SUCCESS'){
    echo "authorized user ->index.php";
     session_start();
     $_SESSION['Auth']='user';

    header('location:index.php');
      
}else{
    echo "unauthorized user -> login.php";
    header('location:webpage1.php');
}

//echo $result;

       

   
}else{
   echo "not invoked";
}

?>