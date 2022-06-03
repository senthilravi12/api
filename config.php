<?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname= "rcms_task";


     $conn=mysqli_connect($servername,$username,$password,$dbname);
     
     if(!$conn){
         die("connection failed". mysqli_connect_error());
<<<<<<< HEAD
     } else echo "not conneced";
=======
     }else echo "not connected ";
>>>>>>> parent of f3ef9c5 (Update config.php)
     
     ?>