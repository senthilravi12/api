<?php
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Simple Login Form Example</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'><link rel="stylesheet" href="./style.css">
  <link href='https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script> 
  
</head>
<body>
<!-- partial:index.partial.html -->
<div class="login-form">
  <form method="post" action="curl_login.php">
    <h1>Login</h1>
    <div class="content">
      <div class="input-field">
        <input type="username" placeholder="username" name="username" autocomplete="nope">
      </div>
      <div class="input-field">
        <input type="password" placeholder="Password" name="password" autocomplete="new-password">
      </div>
      <a href="#" class="link">Forgot Your Password?</a>
    </div>
    <div class="action">
      <button onclick="fun1()">Register</button>
      <button name="singin">Sign in</button>
    </div>
  </form>
</div>
<!-- partial -->
</body>
<script>

$('#singin_btn').on('click',function(){
  //alert("hii");
  var email= $('#email').val();

  var pass=$('#password').val();

  $.ajax({
      type:'post',
      url:'curl_login.php',
      data:{
          email:email,
          pass:pass,
      },
      datatype:'json',
      success:function(res){
             alert("data updatedd");
           location.reload();

      }
  })
});



  </script>
</html>