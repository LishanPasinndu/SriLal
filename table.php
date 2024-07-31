
        <table class="tbl">

<thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">detailes</th>
        <th scope="col">weight</th>
        <th scope="col">delivery fee</th>
        <th scope="col">price</th>
        <th scope="col">status</th>
        <th scope="col">image</th>
    </tr>
</thead>

<tbody>

    <?php

require "dbms.php";
$r = X::s("SELECT * FROM product;");
$n = $r->num_rows;

for($x = 0; $x < $n; $x++){
$data = $r->fetch_assoc();


?>
    <tr>
        <td><?php echo $data["id"]; ?></td>
        <td><?php echo $data["name"]; ?></td>
        <td><?php echo $data["detailes"]; ?></td>
        <td><?php echo $data["weight"]; ?></td>
        <td>$<?php echo $data["delivery"]; ?></td>
        <td>$<?php echo $data["price"]; ?></td>
        <td><?php echo $data["status"]; ?></td>
        <td><img style="width:100px" src="<?php echo $data["image_path"]; ?>" alt=""></td>
    </tr>
    <?php

}

?>

</tbody>

</table>