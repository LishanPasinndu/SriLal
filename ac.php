<?php

session_start();

$id = $_POST["id"];

if(isset($_SESSION["a"])){

    $e = $_SESSION["a"];
    $p = $_SESSION["b"];

require "dbms.php";
$r = X::s("SELECT * FROM user WHERE `email`='".$e."' ;");
$n = $r->num_rows;
$u = $r->fetch_assoc();

$uid = $u["id"];

$resultset = X::s("SELECT * FROM product WHERE `id`='".$id."' ;");
$n = $resultset->num_rows;
$data = $resultset->fetch_assoc();

$pid = $data["id"];
$name = $data["name"];
$detailes = $data["detailes"];
$weight = $data["weight"];
$price = $data["price"];
$status = $data["status"];
$image_path = $data["image_path"];

X::iud("INSERT INTO cart(`id`,`name`,`detailes`,`weight`,`price`,`status`,`image_path`,`user`) 
VALUES('".$pid."','".$name."','".$detailes."','".$weight."','".$price."','".$status."','".$image_path."','".$uid."');");

 echo "Added Your Cart";

}else{
  echo "1";
}

?>