<?php

session_start();

$e = $_POST["email"];
$p = $_POST["password"];

$ch = $_POST["c"];

if(empty($e)){
    echo "Please enter email !";
}else if(empty($p)){
    echo "Please enter password !";
}else if($e == "pereraajith296@srilal.com" && $p == "aQdt&%3R5vm,yQ"){

    $_SESSION["ae"]="pereraajith296@srilal.com";
    $_SESSION["ap"]="aQdt&%3R5vm,yQ";

     echo "1";
}else{


    require "dbms.php";
    $r = X::s("SELECT * FROM user WHERE `email`='".$e."' AND `password`='".$p."'; ");
    $n = $r->num_rows;

if($n==1){
 
    $data = $r->fetch_assoc();

    $_SESSION["u"] = $data;

    $_SESSION["a"]=$e;
    $_SESSION["b"]=$p;

    if($ch=="1"){
        $t=time();
        $t1=$t+(60);
        setcookie("e",$e,$t1);
        setcookie("p",$p,$t1);

    }
    echo"ok";
}else{
    echo "Invalid User!";
} 

}

?>