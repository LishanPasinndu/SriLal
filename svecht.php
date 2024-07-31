<?php

$id = $_POST["id"];
$cht = $_POST["cht"];

require "dbms.php";
$r = X::s("SELECT * FROM user WHERE `id`='".$id."';");
$data = $r->fetch_assoc();


$uid = $data["id"];
$ufname = $data["first_name"];
$ulname = $data["last_name"];

$d = new DateTime();
$tz = new DateTimeZone("Asia/Colombo");
$d->setTimeZone($tz);
$date = $d->format("Y-m-d H:i:s");

X::iud("INSERT INTO chat(`msg`,`user_id`,`fname`,`lname`,`time`,`status`) VALUES('".$cht."','".$uid."','".$ufname."','".$ulname."','".$date."','show');");

echo $ufname ," ", $ulname ," :- ",$date;
echo "<br/>";
echo $cht;
echo "<br/>";



?>