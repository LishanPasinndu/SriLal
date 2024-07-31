<?php

$id = $_POST["id"];

require "dbms.php";
X::iud("UPDATE chat SET `status`='noshow' WHERE `id`='".$id."';");

echo "Massage Delete For Me";

?>