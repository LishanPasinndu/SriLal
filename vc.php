<?php

session_start();

$e = $_SESSION["a"];
$p = $_SESSION["b"];

require "dbms.php";
$r = X::s("SELECT * FROM user WHERE `email`='".$e."' ;");
$n = $r->num_rows;
$u = $r->fetch_assoc();

$uid = $u["id"];

$resultset = X::s("SELECT * FROM cart WHERE `user`='".$uid."' ;");
$n = $resultset->num_rows;

for($x = 0; $x < $n; $x++){
$data = $resultset->fetch_assoc();


?>

<div class="col-lg-3 offset-lg-1 m-lg-5 m-3 col-12 vv">
    <br />
    <h3><?php echo $data["name"]; ?></h3>
    <br />
    <img class="img-fluid" style="width:100px;" src="<?php echo $data["image_path"]; ?>" alt="">
    <br /><br />
    <span><?php echo $data["detailes"]; ?></span>
    <br /><br />
    <span>Weight:-<h3 class="hhhv"><?php echo $data["weight"]; ?></h3></span>
    <br />
    <span>Price:- <h3 class="hhhv">$<?php echo $data["price"]; ?></h3></span>
    <br />
    <span style="color:red;"><?php echo $data["status"]; ?></span>
    <br /><br />
    <a href="buy.php?id=<?php echo $data["id"]?>"><button class="bn">Buy Now</button></a>
    <br/><br/>
    <button class="bnnn" onclick="rc(<?php echo $data['id']; ?>);">Remove from cart</button>
    <br /><br />
</div>

<?php

}

?>
<script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>