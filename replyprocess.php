<?php

$rc = $_POST["rc"];
$id = $_POST["id"];

require "dbms.php";
X::iud("UPDATE chat SET `reply`='".$rc."' WHERE `id`='".$id."'; ");

echo "Reply massage sent!";

?>