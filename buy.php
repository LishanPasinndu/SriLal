<?php

session_start();

if(isset($_SESSION["a"])){

    ?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sri Lal Products</title>
    <link rel="icon" href="image/head.png" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="image.css" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="footer.css" />

</head>

<body class="bo" onload="viewc();">


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
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="product.php">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Distribution</a>
                    </li>
                    <?php
                        $e = $_SESSION["a"];
                        $p = $_SESSION["b"];

                        require "dbms.php";
                        $r = X::s("SELECT * FROM user WHERE `email`='".$e."';");
                        $data = $r->fetch_assoc();
                        ?>
                    <li class="nav-item sh">
                        <a class="shh" href="#popup1">Hi,<?php echo $data["first_name"]; ?></a>
                    </li>
                </ul>
                <button class="btn btn-danger b" onclick="cso();">Sign Out</button>
                <div id="popup1" class="overlay">
                    <div class="popup">
                        <h2>Hi, <?php echo $data["first_name"];?> <?php echo $data["last_name"];?></h2>
                        <a class="close" href="#">&times;</a>
                        <div class="content">
                            <span><?php echo $data["email"]; ?></span>
                            <br />
                            <span><?php echo $data["contact"]; ?></span>
                            <br />
                            <span><?php echo $data["address"]; ?></span>
                            <br />
                            <span><?php echo $data["state"]; ?></span>
                            <br />
                            <span><?php echo $data["city"]; ?></span>
                            <br />
                            <span><?php echo $data["country"]; ?></span>
                            <br />
                            <span><?php echo $data["postal"]; ?></span>
                            <br />
                            <a href="upuser.php?id=<?php echo $data["id"]?>"><button
                                    class="btn btn-outline-success">Update</button></a>
                            <button class="btn btn-outline-danger" onclick="cso();">Signout</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </nav>

    <div class="container-fluid">

        <div class="titles col-lg-6 offset-lg-3 col-12">
            <p>
                Welcome to our Srilal.com website.
                Our products are the best. We are always committed to providing you with the highest quality and most
                valuable products.
                We are committed to delivering the product you order quickly and safely to your home
                Thank you!
            </p>
        </div>


        <br />
        <div class="titles col-lg-6 offset-lg-3 col-12 ">
            <div class="ld">
                <h2 class="th">Buy Product</h2>
            </div>
        </div>

        <br /><br /><br/><br/>

        <div class="row col-12 bbbd">
            <div class="col-lg-8 offset-lg-2 col-10 offset-1 vvv">

                <?php
    
$id = $_GET["id"];

$r = X::s("SELECT * FROM product WHERE `id`='".$id."';");
$n = $r->num_rows;
$data = $r->fetch_assoc();

    ?>

<br/>
    <h2  style="font-weight:bolder;"><?php echo $data["name"]; ?></h2>
    <br/>
    <img class="img-fluid" style="width:100px;" src="<?php echo $data["image_path"]; ?>" alt="">
    <br/><br/>
    <h4><?php echo $data["detailes"]; ?></h4>
    <br/>
    <h4>Weight :- <?php echo $data["weight"]; ?></h4>
    <br/>
    <span>(Your Product will be delivered to the <br/> curior service within three to four days) </span>
    <br/><br/>
    <h4>Delivery fee:- $<?php echo $data["delivery"]; ?></h4>
    <br/>
    <h4 style="display: inline-block;">Product Price :- $<?php echo $data["price"]; ?><h4>
    <?php
     $df = $data["delivery"];
     $pp = $data["price"];
     $amount = $df + $pp ;
    ?>
    <h4 class="amount">Total Amount:- $<?php echo $amount; ?></h4>
    <br/><br/>
    <button class="bn">Pay</button>
    <br/><br/>

            </div>
        </div>




    </div>
    <br /><br />
    <footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span>Colomo District<br />Western Province<br />Sri Lanka</span>
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

    <script src="bootstrap.js"></script>
    <script src="script.js"></script>
    <script src="alert.js"></script>
    <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>
</body>

</html>

<?php

}else{

    ?>
<script>
window.location = "login.php";
</script>


<?php

}

?>