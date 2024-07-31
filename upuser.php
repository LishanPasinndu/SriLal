<?php

session_start();
if(isset($_SESSION["a"])){

    $id = $_GET["id"];

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sri Lal Products</title>
    <link rel="icon" href="image/head.png"/>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="footer.css" />

</head>

<body class="bg">
    <br /><br /><br />
<?php

require "dbms.php";
$r = X::s("SELECT * FROM user WHERE `id`='".$id."' ;");
$n = $r->num_rows;

for($x = 0; $x < $n; $x++){

    $data = $r->fetch_assoc();

    ?>

    <div class="boxx">

        <h1>Update User Detailes</h1>
        <input class="inp" type="text" placeholder="first name*" id="fn" value="<?php echo $data["first_name"]; ?>" >
        <input class="inp" type="text" placeholder="last name*" id="ln" value="<?php echo $data["last_name"]; ?>">
        <input class="inp" type="password" placeholder="Password*" id="pa" value="<?php echo $data["password"]; ?>">
        <input class="inp" type="text" placeholder="Email*" id="em" value="<?php echo $data["email"]; ?>">
        <input class="inp" type="text" placeholder="Contact no*" id="co" value="<?php echo $data["contact"]; ?>">
        <input class="inp" type="text" placeholder="Address*" id="an" value="<?php echo $data["address"]; ?>">
        <input class="inp" type="text" placeholder="State*" id="st" value="<?php echo $data["state"]; ?>">
        <input class="inp" type="text" placeholder="City*" id="ci" value="<?php echo $data["city"]; ?>">
        <select id="cu" class="inp" value="<?php echo $data["country"]; ?>">
            <option value="France">France</option>
            <option value="Germany">Germany</option>
            <option value="Italy">Italy</option>
            <option value="United Kingdom">United Kingdom</option>
            <option value="United State">United State</option>
            <option value="Australia">Australia</option>
            <option value="New Zealand">New Zealand</option>
            <option value="Canada">Canada</option>
            <option value="Japan">Japan</option>
            <option value="South Korea">South Korea</option>
        </select>
        <input class="inp" type="text" placeholder="Postal Code*" id="pc" value="<?php echo $data["postal"]; ?>"><br/><br/>
        <span class="war">* * Please note that it is only delivered to these countries * *</span>
        


        <hr style="border-color: rgba(0,0,0, 0)">
        <button class="btn"  onclick="upu(<?php echo $data['id']; ?>);">update</button>
        <button class="btnn" onclick="gotoindex();">Home</button>

    </div>

<?php

}

?>

    <script src="script.js"></script>
    <script src="alert.js"></script>


</body>

</html>

<?php

}else{

    ?>

<script src="script.js"></script>
<script>window.location="index.php";</script>

    <?php

}

?>