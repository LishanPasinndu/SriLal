<?php

session_start();

if(isset($_SESSION["a"])){

?>

<script src="script.js"></script>

<script>
window.location = "home.php";
</script>

<?php

}else{

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sri Lal Products</title>
    <link rel="icon" href="image/head.png"/>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="footer.css" />

</head>

<body class="bg">

    <div class="boxx">

            <h1>LOG IN</h1>

            <?php
                
            if(isset($_COOKIE["e"]) && isset($_COOKIE["p"])){

                $e=$_COOKIE["e"];
                $p=$_COOKIE["p"];

            ?>

               <input class="inp" type="text" placeholder="email*" id="e" value="<?php echo $e;?>">
               <br />
               <input class="inp" type="password" placeholder="Password*" id="p" value="<?php echo $p;?>">
               <br /><br />
               <input type="checkbox" id="c" checked="">
               <span style="color: rgb(0, 170, 219);">Remember Me!</span>

            <?php

            }else{

            ?>

               <input class="inp" type="text" placeholder="email*" id="e" value="">
               <br />
               <input class="inp" type="password" placeholder="Password*" id="p">
               <br /><br />
               <input type="checkbox" id="c">
               <span style="color: rgb(0, 170, 219);">Remember Me!</span>

            <?php
            }

            ?>


            <hr style="border-color: rgba(0,0,0, 0)">
            <p>you have not a account?<a href="signup.php" style="color:white;">Sign Up </a>
            </p>
            <a href=" " style="color:white;">Forget Password</a>
            <br /><br />
            <button class="btn" onclick="login();">Log in</button>
            <button class="btnn" onclick="gotoindex();">Home</button>

    </div>

    <script src="script.js"></script>
    <script src="alert.js"></script>

</body>

</html>

<?php
}

?>