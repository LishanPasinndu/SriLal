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
    <link rel="icon" href="image/head.png" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="footer.css" />

</head>

<body class="bo" onload="view();">

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
                        <a class="nav-link active" href="add.php">product add</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="viewuser.php">users</a>
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
                <br />
                <h2 style="color: rgb(0, 78, 30);">Update Your Product</h2>
            </div>
        </div>


        <br /><br />

        <?php

    
$id = $_GET["id"];


require "dbms.php";
$r = X::s("SELECT * FROM product WHERE `id`='".$id."' ;");
$n = $r->num_rows;

for($x = 0; $x < $n; $x++){
    $data = $r->fetch_assoc();
    ?>

        <section class="panel panel-default ad col-lg-8 offset-lg-2 col-12">
            <div class="panel-heading">
                <h3 class="panel-title ph">Enter Product Detailes</h3>
            </div>
            <br />
            <img style="width:100px;" src="<?php echo $data["image_path"]; ?>" alt="">
            <br/><br/>
            <div class="panel-body">

                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label pp">Product name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control in" id="n" value="<?php echo $data["name"]; ?>"
                            placeholder="*enter your product name*">
                        <br />
                    </div>
                </div>
                <div class="form-group">
                    <label for="about" class="col-sm-3 control-label pp">detailes</label>
                    <div class="col-sm-9">
                        <input class="form-control in" id="d" value="<?php echo $data["detailes"]; ?>"
                            placeholder="*enter your product detailes*"/>
                            <br/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label pp">Product Weight(kg)</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control in" value="<?php echo $data["weight"]; ?>" id="w"
                            placeholder="*enter your product weight*">
                        <br />
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label pp">Product price</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control in" id="p" value="<?php echo $data["price"]; ?>"
                            placeholder="*enter your product price*">
                        <br />
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label pp">Delivery Fee</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control in" id="de" value="<?php echo $data["delivery"]; ?>"
                            placeholder="*enter your delivery fee*">
                        <br />
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label pp">Product staus(Available/Out of stock)</label>
                    <div class="col-sm-9">
                        <select id="s" class="form-control in" value="<?php echo $data["status"]; ?>">
                            <option value="Available">Available</option>
                            <option value="Out of stocks">Out of stock</option>
                        </select>
                        <br />
                    </div>
                </div>
                <button class="btn btn-success" onclick="up(<?php echo $data['id']; ?>);">update</button>
            </div>
            <br />
        </section>

        <?php
}

?>


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

    <script src="script.js"></script>
    <script src="bootstrap.js"></script>
    <script src="alert.js"></script>


</body>

</html>

<?php

}else{

    ?>

<script src="script.js"></script>
<script>
window.location = "login.php";
</script>

<?php

}

?>