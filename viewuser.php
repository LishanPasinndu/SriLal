<?php

session_start();

$e = $_SESSION["ae"];
$p = $_SESSION["ap"];

if($e == "pereraajith296@srilal.com" && $p == "aQdt&%3R5vm,yQ"){

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
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="footer.css" />

</head>

<body class="bo">



    <nav class="navbar navbar-expand-lg navbar-light   c">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <img src="image/head.png" class="img-fluid" alt="">
                <a class="navbar-brand" href="#">Sri Lal Products</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="admin.php">admin dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add.php">product add</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="viewuser.php">users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">payement</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">msg</a>
                    </li>
                </ul>
                <button class="btn btn-danger b" onclick="gotoindex();">Logout</button>
            </div>
        </div>
    </nav>

    <div class="container-fluid">

        <div class="titles col-lg-6 offset-lg-3 col-12">
            <div class="ld">
                <br/>
                <h2 style="color: rgb(0, 78, 30);">view Users</h2>
            </div>
        </div>

        <br /><br />
        <div class="row col-lg-10 offset-lg-1 col-12 tt">

        <table class="tbl">

<thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">first_name</th>
        <th scope="col">last_name</th>
        <th scope="col">password</th>
        <th scope="col">email</th>
        <th scope="col">contact_no</th>
        <th scope="col">Dilevery Address</th>
        <th scope="col">state</th>
        <th scope="col">city</th>
        <th scope="col">country</th>
        <th scope="col">postal</th>
    </tr>
</thead>

<tbody>

<?php

$dbms = new mysqli("localhost","root","Lishan#12345","srilal","3306");
$q ="SELECT * FROM user;";
$resultset = $dbms->query($q);
$n = $resultset->num_rows;

for($x = 0; $x < $n; $x++){
$data = $resultset->fetch_assoc();


?>
<tr>
    <td><?php echo $data["id"]; ?></td>
    <td><?php echo $data["first_name"]; ?></td>
    <td><?php echo $data["last_name"]; ?></td>
    <td><?php echo $data["password"]; ?></td>
    <td><?php echo $data["email"]; ?></td>
    <td><?php echo $data["contact"]; ?></td>
    <td><?php echo $data["address"]; ?></td>
    <td><?php echo $data["state"]; ?></td>
    <td><?php echo $data["city"]; ?></td>
    <td><?php echo $data["country"]; ?></td>
    <td><?php echo $data["postal"]; ?></td>

</tr>

<?php

}

?>

</tbody>

</table>

        </div>

    </div>

    <br /><br /><br />

    <footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span>Colomo District<br/>Western Province<br/>Sri Lanka</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Contact us</h4>
                                <span>srilal@gmail.com</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <span>srilal@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.html"><img src="image/logoo.png" class="img-fluid" alt="logo"></a>
                            </div>
                            <div class="footer-text">
                                <p>Welcome to our Srilal.com website.
                                    Our products are the best. We are always committed to providing you with the
                                    highest quality and most valuable products.
                                    We are committed to delivering the product you order quickly and safely to your
                                    home
                                    Thank you!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="#">about</a></li>
                                <li><a href="product.php">product</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">About us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Send your feedback</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>Show us all our good, bad and all the things we need to see improves</p>
                            </div>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="text" placeholder="type here">
                                    <button><i class="fab fa-telegram-plane"></i>send</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2021, All Right Reserved <a
                                    href="https://lishan1.000webhostapp.com/">SHAN Technolgy</a></p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul>
                                <li><span class="my">Develop By :- </span><a
                                        href="https://lishan1.000webhostapp.com/">B.A.Lishan Pasindu Wickrama /
                                        0779604128</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
    <script src="bootstrap.js"></script>


</body>

</html>

    <?php

}else{

    ?>

<script src="script.js"></script>
<script>window.location="login.php";</script>

    <?php

}

?>

