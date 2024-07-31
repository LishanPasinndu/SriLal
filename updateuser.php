<?php

$fn = $_POST["fn"];
$ln = $_POST["ln"];
$pa = $_POST["pa"];
$em = $_POST["em"];
$co = $_POST["co"];
$add = $_POST["add"];
$st = $_POST["st"];
$ci = $_POST["ci"];
$cu = $_POST["cu"];
$pc = $_POST["pc"];
$id = $_POST["id"];

require "dbms.php";
X::iud("UPDATE user SET `first_name`='".$fn."',`last_name`='".$ln."',`password`='".$pa."',`email`='".$em."',
`contact`='".$co."',`address`='".$add."',`state`='".$st."',`city`='".$ci."',
`country`='".$cu."',`postal`='".$pc."' WHERE `id`='".$id."'; ");

echo "1";

?>