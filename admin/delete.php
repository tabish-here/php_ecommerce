<?php

if (isset($_GET['ID'])) {
    $id = intval($_GET['ID']);
}

$con = mysqli_connect("localhost", "root", "", "ecommerce");
mysqli_query($con, "DELETE FROM tbluser WHERE id = $id");
header("Location: user.php");