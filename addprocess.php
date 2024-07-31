<?php

$name = $_POST["n"];
$detail = $_POST["d"];
$weight = $_POST["w"];
$deli = $_POST["de"];
$price = $_POST["p"];
$status = $_POST["s"];

if(empty($name)){
    echo "! please enter product Name";
}else if(empty($detail)){
    echo "! please enter product detailes";
}else if(empty($weight)){
    echo "! please enter product weight";
}else if(empty($price)){
    echo "! please enter product price";
}else if(empty($deli)){
    echo "! please enter product delivery fee";
}else if(empty($status)){
    echo "! please enter product status";
}else if(isset($_FILES["i"])){

    $file = $_FILES["i"];
    
    $filename = "upload//".uniqid().".png";
    move_uploaded_file($file["tmp_name"],$filename);

    require "dbms.php";
    X::iud("INSERT INTO product(`name`,`detailes`,`weight`,`price`,`image_path`,`status`,`delivery`) 
    VALUES('".$name."','".$detail."','".$weight."','".$price."','".$filename."','".$status."','".$deli."');");

echo "1";

}else{
    echo "add imge";
}

?>
