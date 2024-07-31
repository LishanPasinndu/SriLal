<?php

$id = $_POST["id"];

require "dbms.php";
X::iud("DELETE FROM feedback WHERE `id`='".$id."'; ");

echo "Deleted This FeedBack";

?>