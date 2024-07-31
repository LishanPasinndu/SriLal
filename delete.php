<?php

$id = $_POST["id"];

require "dbms.php";
X::iud("DELETE FROM product WHERE `id`='".$id."'; ");

echo "1";

?>