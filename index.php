<?php 
require_once 'connection.php'; //database connection php eka import karagaththa
?>
<?php
if(isset($_POST['login'])){
  $mail = mysqli_real_escape_string($connection, $_POST['email']); //default method ekk string widiyt convert krn , methanadi parameter 2k denn ona(connection data base eke ekai, form eken gnn post method eken gnne ekai)
  $password = mysqli_real_escape_string($connection, $_POST['password']); //methanadi mysql liynkot okkoma string krl thmy aragnne
  $sql1 = "SELECT*FROM user WHERE mail='{$mail}' AND password='{$password}'";  //sql command ek run krnn mek
  $result2 = mysqli_query($connection, $sql1); //sql command ekt hariynn databse eken data gann ek karnne
  if(mysqli_num_rows($result2)==1){ //email & password ek thiyn ek row ekaid thiyenne kiyl blnne
  echo "ado , nice bng";
    header("location: view.php"); //pview.php ek redirect wenw
  }
  else{
    echo"you aren't registered";
    
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login - Smart Tech</title>
  <style>
    * {
      box-sizing: border-box; /*login form eke box look ek* */
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
    }

    body {
      min-height: 100vh; /*full screen ekata height ek set krnw */
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(135deg, #0f0c29, #302b63, #24243e);
      color: #fff;
    }

    .login-container {
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(12px);
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.3);
      width: 100%;
      max-width: 400px;
      transition: all 0.3s ease;
    }

    .login-container h2 {
      text-align: center;
      margin-bottom: 30px;
      font-weight: 600;
      color: #ffffff;
    }

    .input-group {
      margin-bottom: 20px;
      position: relative;
    }

    .input-group label {
      display: block;
      margin-bottom: 6px;
      font-size: 14px;
      color: #ddd;
    }

    .input-group input {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 8px;
      background: rgba(255, 255, 255, 0.1);
      color: #fff;
      font-size: 16px;
      outline: none;
      transition: background 0.3s ease;
    }

    .input-group input:focus {
      background: rgba(255, 255, 255, 0.15);
    }

    .toggle-password {
      position: absolute;
      right: 12px;
      top: 38px;
      cursor: pointer;
      font-size: 14px;
      color: #aaa;
      user-select: none;
    }

    .login-btn {
      width: 100%;
      padding: 12px;
      background: #7f00ff;
      color: white;
      border: none;
      border-radius: 10px;
      font-weight: bold;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.3s ease;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .login-btn:hover {
      background: #a300ff;
    }

    .spinner {
      border: 2px solid transparent;
      border-top: 2px solid white;
      border-radius: 50%;
      width: 16px;
      height: 16px;
      animation: spin 0.8s linear infinite;
      margin-left: 10px;
      display: none;
    }

    @keyframes spin {
      to {
        transform: rotate(360deg);
      }
    }

    .bottom-text {
      text-align: center;
      margin-top: 20px;
      font-size: 14px;
    }

    .bottom-text a {
      color: #9f84ff;
      text-decoration: none;
      font-weight: bold;
    }

    @media (max-width: 480px) {
      .login-container {
        padding: 30px 20px;
      }
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Login to Smart Tech</h2>
    <form method="post" action="index.php" onsubmit="showSpinner(event)" >
      <!-- action eken kiynne check wen process ek mona php file eked wenne kiyl ,ekt denne index kiylmai -->
      <div class="input-group">
        <label for="email">Email Address</label>
        <input type="email" name="email" id="email" placeholder="Enter your email" required />
      </div>

      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Enter your password" required />
        <span class="toggle-password" onclick="togglePassword()">Show</span>
      </div>

      <button type="submit" class="login-btn" name="login">
        Login
        <span class="spinner" id="spinner"></span>
      </button>

      <div class="bottom-text">
        Don't have an account? <a href="signup.php">Sign Up</a>
      </div>
    </form>
  </div>

  <script>
   function togglePassword() { //password show hide krnn
  const pwd = document.getElementById("password"); // password box එක හඳුනාගන්නවා /button eke id ek variable ekakata argen
  const toggle = document.querySelector(".toggle-password"); // Show / Hide කියන button එක හඳුනාගන්නවා 

  if (pwd.type === "password") {  // password එක දැනට සඟවලා තියෙනවද කියලා බලනවා
    pwd.type = "text";            // සඟවලා තියෙන්නෙ නම් දැන් පෙන්වන්න වෙනස් කරනවා
    toggle.textContent = "Hide";  // button එකේ වචනය "Hide" කියලා වෙනස් කරනවා
  } else {
    pwd.type = "password";        // password එක දැක්වෙනව නම් දැන් සඟවන්න වෙනස් කරනවා
    toggle.textContent = "Show";  // button එකේ වචනය "Show" කියලා වෙනස් කරනවා
  }
}


    function showSpinner(e) { //loading wenawa kiyl usert pennanna
  const spinner = document.getElementById("spinner"); // spinner එක හඳුනාගන්නවා
  spinner.style.display = "inline-block";             // ඒක පේන්න කරලා animation එකක් පෙන්වනවා
}

  </script>
</body>
</html>
