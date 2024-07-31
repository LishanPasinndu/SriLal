<?php

$name = $_POST["n"];

require "dbms.php";
$r = X::s("SELECT * FROM product WHERE `name` LIKE '".$name."%' ;");
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
    <span>Price:-<h3 class="hhhv"><?php echo $data["price"]; ?></h3></span>
    <br />
    <span><?php echo $data["status"]; ?></span>
    <br /><br />
    <button class="atc">Add To Cart</button>
    <br /><br />
    <button class="bn">Buy Now</button>
    <br /><br />
</div>

<?php

}

?>