<?php
 require_once 'connection.php'; //connection.php file ek connect krgaththa
?>
<?php
//$message = "";
if(isset($_POST['sign'])){ //button ek click krld kiyl blnne, post method eken gnn nisa ok d kiyl blnne
    // $message = "clicked";
    $name = $_POST['name']; //post method eken data gnne
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    if($name != "" && $email != "" && $password != "" && $confirm != ""){
    
      if($password == $confirm){

        //mulin variable ekk hadanna (sql1) / it passe inster quary ek meke liynne / user table eke add wenn ona fiel tik thmy () meke athule liynne /it passe values tik dnn ona
        $sql1 = "INSERT INTO user (mail,name,password) VALUES('{$email}','{$name}','{$password}' )LIMIT 1"; //string nisa '{}' mehem /EK PARATA ekk enn ona nis LIMIT 1 kiyn eke denne
        $result1 = mysqli_query( $connection,$sql1 );  //meke default function ekk use krl database eke connection ek hdno
      
        //stop to page refresh
      header("Location: signup.php?status=success");
            exit();
      }

      else{
        echo"enter correct password";
      }
}
else{
  echo"Fields can't be null!";
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="align-items: center; display: flex; justify-content:center ;">

  <!-- Display message in top-left -->
  <!-- <div style="position: absolute; top: 10px; left: 10px; color: red; font-weight: bold;"> -->
   <!-- -->
  <!-- </div> -->

 

  <div class="container-div">
    <!-- padding eken 30px up eke idan thiyana sape eka pahalata,  40px kiynne form eke depaththen thiyn space ek, border-radius kiynne form eke wate cureve edge ek-->
     <form method="post" action="signup.php" style="background:#fff; padding:30px 40px; border-radius:12px; box-shadow:0 10px 30px rgba(241, 3, 134, 0.15); width:100%; max-width:400px;"><!--box-shadow eken form eke wate thiyn shadow ek, first value eke 0 krl thiyenne eken right side ekt withry shadow ek enne deweni eka wadi krm mada tik withry shadow wenne-->
    <!-- uda apit action ekt html file ekakin php file k\ekt yawnnth aki, dn mekedima krn nisa meke nama dnne -->
    <!-- tghw apu data gnne post method eken   , ek nisa post method variable ekk widiyt thamay udadi linne php tag athule-->
    <h2 style="text-align:center; margin-bottom:20px; color:#333;">Create Account</h2> 
    <!-- margin-bottom eken create account text ekt pahalin thiyn space eka -->

    <div style="margin-bottom:15px;"> <!--full name ekt pahalin thiyn space ek-->
      <label for="name" style="display:block; margin-bottom:6px; font-weight:600; color:#555;">Full Name</label><!--lable for="name" kiyn eken lable ek input ekt connect wenw, it passe api name kiyn ek click krma automa text box ek select wenw, ke userfriendly , font-weight eken font bold gathiy ek 700t dmmoth thawa wadi weno  display-block kiyn eken aluth peliykt danna kiyn ek, it passe input box ek thiynn kiyn ek-->
      <input type="text" id="name" name="name" placeholder="Enter your full name" required
        style="width:100%; padding:10px; border:1px solid #ccc; border-radius:8px; outline:none;"/>
        <!-- padding eken usa wadi weno -->
    </div>

    <div style="margin-bottom:15px;">
      <label for="email" style="display:block; margin-bottom:6px; font-weight:600; color:#555;">Email Address</label>
      <input type="email" name="email" id="email" placeholder="Enter your email" required
        style="width:100%; padding:10px; border:1px solid #ccc; border-radius:8px; outline:none;"/>
    </div>

    <div style="margin-bottom:15px;">
      <label for="password" style="display:block; margin-bottom:6px; font-weight:600; color:#555;">Password</label>
      <input type="password" name="password" id="password" placeholder="Create a password" required
        style="width:100%; padding:10px; border:1px solid #ccc; border-radius:8px; outline:none;"/>
    </div>

    <div style="margin-bottom:20px;">
      <label for="confirm" style="display:block; margin-bottom:6px; font-weight:600; color:#555;">Confirm Password</label>
      <input type="password" id="confirm" name="confirm" placeholder="Re-enter your password" required
        style="width:100%; padding:10px; border:1px solid #ccc; border-radius:8px; outline:none;"/>
    </div>

    <button type="submit" name="sign" style="width:100%; padding:12px; background:#7f00ff; color:#fff; border:none; border-radius:8px; font-weight:bold; cursor:pointer; font-size:16px;">
      Sign Up
    </button>

    <p style="text-align:center; margin-top:15px; color:#666;">
      Already have an account? 
      <a href="index.php" style="color:#7f00ff; text-decoration:none; font-weight:bold;">Login</a>
    </p>
  </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>