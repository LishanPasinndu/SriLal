<?php

require "dbms.php";
$r = X::s("SELECT * FROM product;");
$n = $r->num_rows;

for($x = 0; $x < $n; $x++){
$data = $r->fetch_assoc();


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
    <span>Price:-$<h3 class="hhhv"><?php echo $data["price"]; ?></h3></span>


    <?php

if($data["status"] == "Available"){

    ?>
    <br />
    <h3 style="color:green;"> <?php echo $data["status"]; ?></h3>
    <br />
    <button class="atc" onclick="ac(<?php echo $data['id']; ?>);">Add To Cart</button>
    <br /><br />
    <a href="buy.php?id=<?php echo $data["id"]?>"><button class="bn">Buy Now</button></a>
    <br /><br />
    <?php

}else{
?>
    <h2 style="color:red;">* <?php echo $data["status"]; ?> *</h2>
    <?php
}

    ?>

</div>

<?php

}

?>

<script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>

