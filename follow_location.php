<?php 

$ch = curl_init(); 
curl_setopt( $ch, CURLOPT_URL, "http://localhost/curl_php/login_curl/verifyuser.php"); // URL to post 
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_POSTFIELDS, "username=Batman&password=DoYouWantToKnowMySecretIdentity");
curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);// 1 or TRUE
// Execute
$result = curl_exec( $ch ); 
curl_close($ch);
// Show "response"
echo "Reply Response: " . $result; 