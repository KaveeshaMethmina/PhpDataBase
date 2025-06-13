<?php
require_once 'connection.php';
?>
<?php
$id = $_GET['user_id']; //view eken ena variable ek get method eken aragen id kiyn ekata asign krno  , pahala form eke data enne podt method eken 
if (isset($_POST['update'])) {
    $email = mysqli_real_escape_string($connection, $_POST['mail']);
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $pasword = mysqli_real_escape_string($connection, $_POST['password']);
    $confirm = mysqli_real_escape_string($connection, $_POST['confirm']);

    if ($name != "" && $email != "" && $password != "" && $confirm != "") { //methandi kalin thibba ewata samana nadd kiyl blnn ona
        if ($pasword == $confirm) {

        } else {
            echo "enter correct password";
        }
    } else {
        echo "Fields can't be null!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

</head>

<body style="display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; background: #f5f5f5;">




    <div class="container-div">
        <!-- padding eken 30px up eke idan thiyana sape eka pahalata,  40px kiynne form eke depaththen thiyn space ek, border-radius kiynne form eke wate cureve edge ek-->
        <!-- *update ekakadi action ek mukuth denne nh -->
        <form method="post" action=""
            style="
    background: #fff; 
    padding: 35px 30px; 
    border-radius: 12px; 
    box-shadow: 0 10px 30px rgba(241, 3, 134, 0.15); 
    width: 100%; 
    max-width: 320px; 
    font-family: 'Poppins', sans-serif;
">

            <h2 style="text-align:center; margin-bottom:20px; color:#333;">Create Account</h2>
            <!-- margin-bottom eken create account text ekt pahalin thiyn space eka -->

            <div style="margin-bottom:15px;"> <!--full name ekt pahalin thiyn space ek-->
                <label for="name" style="display:block; margin-bottom:6px; font-weight:600; color:#555;">Full Name</label><!--lable for="name" kiyn eken lable ek input ekt connect wenw, it passe api name kiyn ek click krma automa text box ek select wenw, ke userfriendly , font-weight eken font bold gathiy ek 700t dmmoth thawa wadi weno  display-block kiyn eken aluth peliykt danna kiyn ek, it passe input box ek thiynn kiyn ek-->
                <input type="text" id="name" name="name" placeholder="Enter your full name" required
                    style="width:100%; padding:10px; border:1px solid #ccc; border-radius:8px; outline:none;" />
                <!-- padding eken usa wadi weno -->
            </div>

            <div style="margin-bottom:15px;">
                <label for="email" style="display:block; margin-bottom:6px; font-weight:600; color:#555;">Email Address</label>
                <input type="email" name="email" id="email" placeholder="Enter your email" required
                    style="width:100%; padding:10px; border:1px solid #ccc; border-radius:8px; outline:none;" />
            </div>

            <div style="margin-bottom:15px;">
                <label for="password" style="display:block; margin-bottom:6px; font-weight:600; color:#555;">Password</label>
                <input type="password" name="password" id="password" placeholder="Create a password" required
                    style="width:100%; padding:10px; border:1px solid #ccc; border-radius:8px; outline:none;" />
            </div>

            <div style="margin-bottom:20px;">
                <label for="confirm" style="display:block; margin-bottom:6px; font-weight:600; color:#555;">Confirm Password</label>
                <input type="password" id="confirm" name="confirm" placeholder="Re-enter your password" required
                    style="width:100%; padding:10px; border:1px solid #ccc; border-radius:8px; outline:none;" />
            </div>

            <button type="submit" name="update" style="width:100%; padding:12px; background:#7f00ff; color:#fff; border:none; border-radius:8px; font-weight:bold; cursor:pointer; font-size:16px;">
                UPDATE
            </button>


        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>