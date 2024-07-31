<?php

$fn = $_POST["fn"];
$ln = $_POST["ln"];
$pa = $_POST["pa"];
$em = $_POST["em"];
$co = $_POST["co"];
$add = $_POST["add"];
$st = $_POST["st"];
$ci = $_POST["ci"];
$cu = $_POST["cu"];
$pc = $_POST["pc"];

if(empty($fn)){
   echo "Please enter your first  name!";
}else if(empty($ln)){
    echo "Please enter your last  name!";
}else if(empty($pa)){
    echo "Please enter your password!";
}else if(empty($em)){
    echo "Please enter your email!";
}else if(!filter_var($em, FILTER_VALIDATE_EMAIL)){
    echo "Please enter valid Email";
}else if(empty($co)){
    echo "Please enter your contact no!";
}else if(empty($add)){
    echo "Please enter your Dilevery Address!";
}else if(empty($st)){
    echo "Please enter your state!";
}else if(empty($ci)){
    echo "Please enter your city!";
}else if(empty($cu)){
    echo "Please enter your country!";
}else if(empty($pc)){
    echo "Please enter your postal code!";
}else{

    require "dbms.php";
    $r = X::s("SELECT * FROM user WHERE `email` = '".$em."' OR `password`='".$pa."' ");
    $n = $r->num_rows;
    if($n > 0){
       echo "User with the same email address already exists";
    }else{
    X::iud("INSERT INTO user(`first_name`,`last_name`,`password`,`email`,`contact`,`address`,`state`,`city`,`country`,`postal`) 
    VALUES('".$fn."','".$ln."','".$pa."','".$em."','".$co."','".$add."','".$st."','".$ci."','".$cu."','".$pc."');");

     echo "Registation Success";
    }
}

?>