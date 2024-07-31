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
                        <a class="nav-link" href="product.php">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="qop.php">Quality</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="ded.php">Delivery</a>
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

        <div class="titles col-lg-6 offset-lg-3 col-12">
            <div class="ld">
                <h2 class="th">Delivery Detailes</h2>
            </div>
        </div>

        <br /><br /><br />

        <div class="row col-lg-8 offset-lg-2 col-12 dedd">
            <img src="image/ded.jpg" class="img-fluid hde" alt="...">
        </div>

        <br /><br />

        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2 deedd">
                <p>
                    <br /><br />
                    ආයුබෝවන් ඔබ සැම සාදරයෙන් පිළිගනිමු.
                    <br />
                    මෙම පිටුව අපගේ වෙබ් අඩවියේ වැදගත්ම පිටුවකි.මෙහි ඔබට අපගේ වෙබ් අඩවියේ නව්ගතකිරිම් පිලිබද සියලු විස්තර
                    සදහන් වේ.යම් කිසි ගැටලුවක් ඇතිනම් අපගේ පරිභෝගික සේවා පිළිසඳරට ඔබගේ ගැටලුව යොමු කරන්න.
                    <br /><br />

                    අප මෙහි නව්ගත කරන්නේ පහත රටවල් වලට පමණි.<br />
                    .France<br />
                    .Germany<br />
                    .Italy<br />
                    .United Kingdom<br />
                    .United State<br />
                    .Australia<br />
                    .New Zealand<br />
                    .Canada<br /><br />

                    ඉහත රටවල් වලට අප නැව්ගත කිරිම් වලට අය කරන්නේ ඔබ ලබාගන්න භාණ්ඩයේ බර අනුවය.
                    එය ඔබ ලබාගන්නා ප්‍රමාණය අනුව මිල වෙනස් වේ.රට අනුව කිසිවිටක මිල වෙනස් නොවේ.
                    අපගේ නැව් ගාස්තු මුල් පිටුවේ දැක ගත හැකිය.<br /><br />

                    ඔබ අපට ඇණවුම ලබාදි ව්යාපාරික දිනය 3ක් ඇතුළත ඔබගේ ඇණවුඅම අප අපනයන සේවා අයතනයට ලබා දෙන අතර එම ආයතනයෙන්
                    ඔබගේ ඇණවුම ඉතා ඉක්මනින් සහ සුරක්ෂිතව ඔබගේ අතට ලබාදිමට ඇප කැප වි සිටි.
                    අප අපගේ භාණ්ඩ නැවත ආපසු ගැනුම් බාර නොගන්නා බව සැලකල සිටිමු.ඔබගේ භාණ්ඩය සුරක්ෂිතව ඔබට ලබා දිමට කටයුතු
                    කරමි. ඔබ මිලදී ගත් භාණ්ඩයට අප සෙවුම් අංකය ඔබගේ gmail ගිණුමට එවමි.අප ඔබ ලබාගත් භාණ්ඩය අපනයන් සේවා
                    ආයතයට භාර් දුන් විගස ඔබගේ gmail ගිණුමට සෙවුම් අංකය ලබා දෙමි.එමනිසා නිවරදිව gmail ගිණුම අපට ලබා දිම
                    ඔබගේ වගකිමකි.<br /><br />

                    අප අපනයන සේවා ලෙස තොරගෙන තිබෙන්නේ ඉතාමත් වගකිමක් සහිත ඉතා ඉක්මන් ආයතනයන්‍ය .එම ආයතන ඔබට ඉතා ඉක්මනින්
                    සහ සුරක්ෂිතව ඔබගේ ඇනවුම ඔබගේ අතට ලබාදිමට ඇප කැප වි සිටි.<br /><br />

                    Srilanka Post<br />
                    Colombo Mail<br />
                    Swyft<br />
                    DHL<br /><br />

                    සහ තවත් සුප්‍රකට ආයතනයන්‍ය .එම සියලුම ආයතන ඔබගේ ඇණවුම ඉතා ඉක්මනින් සහ සුරක්ෂිතව ඔබගේ අතට ලබාදිමට ඇප
                    කැප වි සිටි<br /><br />

                    ඔබට් සැමට ස්තුතියි!<br />

                    <hr>

                    <br />

                    Welcome to all of you.<br />
                    This page is one of the most important pages on our website. Here you will find all the details
                    about the updates on our website.<br /><br />

                    We ship here only to the following countries.<br />
                    .France<br />
                    .Germany<br />
                    .Italy<br />
                    .United Kingdom<br />
                    .United State<br />
                    .Australia<br />
                    .New Zealand<br />
                    .Canada<br /><br />

                    Shipping to the above countries will be charged according to the weight of the goods you receive.
                    The price varies according to the quantity you get. The price never changes depending on the
                    country.
                    Our shipping costs can be found on the home page.<br /><br />

                    We will deliver your order to you at Export Services within 3 business days of you placing your
                    order and we are committed to delivering your order to you expeditiously and securely.
                    We do not accept repurchases of our goods. We will deliver your goods safely. We will send the
                    search number for the item you purchased to your gmail account. As soon as we deliver the item you
                    received to the export service provider, we will give the search number to your gmail account.
                    Therefore, it is your responsibility to give us the correct gmail account.<br /><br />

                    We have selected Export Services as our fastest responsible companies .These companies are committed
                    to delivering your order to you quickly and securely.<br /><br />

                    Srilanka Post<br />
                    Colombo Mail<br />
                    Swyft<br />
                    DHL<br /><br />

                    And other well-known companies. All those companies are committed to delivering your order to you
                    quickly and securely.<br /><br />

                    Thank you all!<br /><br />
                </p>
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