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

<body class="bo" onload="viewp();">


    <nav class="navbar navbar-expand-lg navbar-light   c">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <img src="image/head.png" class="img-fluid" alt="">
                <a class="navbar-brand" href="index.php">Sri Lal Products</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cart.php">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="product.php">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="qop.php">Quality</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ded.php">Delivery</a>
                    </li>
                    <?php
                        session_start();
                        if(isset($_SESSION["a"])){

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
                <?php
                    }else{
                        ?>
                </ul>
                <button class="btn btn-success b" onclick="gotologinc();">Login</button>
                <?php
                    }

                ?>

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
        <div class="titles col-lg-6 offset-lg-3 col-12">
            <div class="ld">
                <h2 class="th">Our Products</h2>
            </div>
        </div>

        <div class="slider">
            <div class="slider-container">
                <div class="slide active" style="background-image: url(image/ss1.jpg);">
                    <div class="info">
                        <h1>Cinoman</h1>
                        <p>Cinnamon is a spice obtained from the inner bark of several tree species from the genus
                            Cinnamomum. Cinnamon is used mainly as an aromatic condiment and flavouring additive
                            in a wide variety of cuisines, sweet and savoury dishes, breakfast cereals, snackfoods,
                            tea and traditional foods.s
                        </p>
                    </div>
                </div>
                <div class="slide" style="background-image: url(image/s5.jpg);">
                    <div class="info">
                        <h1>Black & White Pepper</h1>
                        <p>The difference between white and black pepper comes down to how they're picked and
                            processed.
                            While black pepper gives off more of a spicy heat (due to the piperine), white pepper's
                            flavor
                            is described as more earthy and musty.
                        </p>
                    </div>
                </div>
                <div class="slide" style="background-image: url(image/ss3.jpg);">
                    <div class="info">
                        <h1>Lemon grass</h1>
                        <p>Cymbopogon, also known as lemongrass, barbed wire grass, silky heads, Cochin grass,
                            Malabar
                            grass, oily heads, citronella grass or fever grass, is a genus of Asian,
                            African, Australian, and tropical island plants in the grass family.</p>
                    </div>
                </div>
                <div class="slide" style="background-image: url(image/s4.jpg);">
                    <div class="info">
                        <h1>Cardamom</h1>
                        <p>Cardamom is a spice that people have used for centuries both in cooking and as a
                            medicine.
                            Originally a common ingredient in Middle Eastern and Arabic foods, cardamom has also
                            gained
                            popularity in the west. Cardamom comes from the seeds of several different plants that
                            belong to
                            the same family as ginger.</p>
                    </div>
                </div>
                <div class="slide" style="background-image: url(image/ss5.jpg);">
                    <div class="info">
                        <h1>Clove</h1>
                        <p>Cloves are the flower buds of the clove tree, an evergreen also known as Syzygium
                            aromaticum
                            ( 1
                            ). Found in both whole and ground forms, this versatile spice can be used to season pot
                            roasts,
                            add flavor to hot beverages, and bring spicy warmth to cookies and cakes</p>
                    </div>
                </div>
                <div class="slide" style="background-image: url(image/s6.jpg);">
                <div class="info">
                        <h1>Coconut husks</h1>
                        <p>It is used to make coco husk chips, coco peat, coir fiber, and coco crush. It is the
                            best natural organic growing medium in the world. For potting to grow plants and flowers
                            the husk is used. It is a raw material of soil for greenhouse production.</p>
                    </div>
                </div>
            </div>
            <div class="eraser"></div>
            <div class="buttons-container">
                <button id="previous"><i class="fas fa-chevron-left"></i></i>&lt;</button>
                <button id="next"><i class="fas fa-chevron-right"></i>&gt;</button>
            </div>
        </div>

        <br /><br />

        

        <div class="row col-10 offset-1 sr">
            <div class="col-12 sd">
                <span class="sh">Search Products :-</span>
                <input class="si form-control " type="text" placeholder="Search Here**" id="se" onkeyup="getsearch();">
            </div>
        </div>
        <br /><br /><br /><br /><br />
        <div class="row col-12 vr" id="pv">
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