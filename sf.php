<?php


$id = $_POST["id"];
$fb = $_POST["fb"];

require "dbms.php";
$r = X::s("SELECT * FROM user WHERE `id`='".$id."' ;");
$n = $r->num_rows;
$u = $r->fetch_assoc();

$ufname = $u["first_name"];
$ulname = $u["last_name"];

X::iud("INSERT INTO feedback(`fname`,`lname`,`msg`) VALUES('".$ufname."','".$ulname."','".$fb."');");

echo "Sent Your FeedBack";

?>