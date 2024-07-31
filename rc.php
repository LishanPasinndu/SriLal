<?php

$id = $_POST["id"];

require "dbms.php";
X::iud("DELETE FROM cart WHERE `id`='".$id."'; ");

echo "1";

?>