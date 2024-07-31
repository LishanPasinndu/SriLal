<?php

$id = $_POST["id"];

require "dbms.php";
X::iud("DELETE FROM chat WHERE `id`='".$id."'; ");

echo "Massage Delete Eveyrone";

?>