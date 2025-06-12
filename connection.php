<?php //php tag  

   $hostname = "localhost"; //hosting name
   $username = "root"; //xampp eke username
   $password = ""; //xampp eke password ekk nh
   $database = "smarttech"; //database name eka

   $connection = mysqli_connect($hostname,$username,$password,$database); //connection kiyn variable ekt parameter widiyt data tik pass krl connection ek hadagnno

   if(isset($connection)){ //connection ek set weld blnne
        echo "connected"; //display eknw connected kiyl connect unannm
   }
   else {
    echo"not connected"; //display not connected when not connect
   }

?>