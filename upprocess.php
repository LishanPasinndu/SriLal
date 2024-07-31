<?php

$name = $_POST["n"];
$detail = $_POST["d"];
$weight = $_POST["w"];
$price = $_POST["p"];
$deli = $_POST["de"];
$status = $_POST["s"];
$id = $_POST["id"];

require "dbms.php";
X::iud("UPDATE product SET `name`='".$name."',`detailes`='".$detail."',`weight`='".$weight."',`price`='".$price."',`status`='".$status."',`delivery`='".$deli."' WHERE `id`='".$id."'; ");

echo "1";

?>