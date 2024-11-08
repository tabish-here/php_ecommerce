<?php

if (isset($_GET['id'])) {
    $Id = intval($_GET['id']);
} else {
    die('Invalid ID');
}
include 'config.php';
mysqli_query($con, "DELETE FROM product WHERE id = $Id");
header("Location: index.php");