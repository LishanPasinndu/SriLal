<?php

$id = $_POST["id"];

require "dbms.php";
X::iud("DELETE FROM chat WHERE `user_id`='".$id."' ; ");

echo "1";

?>