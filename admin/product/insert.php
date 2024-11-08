<?php

if (isset($_POST["submit"])) {

    include 'config.php';

    $product_name = $_POST['Pname'];
    $product_price = $_POST['Pprice'];
    $product_image = $_FILES['Pimage'];
    $image_location = $_FILES['Pimage']['tmp_name'];
    $image_name = $_FILES['Pimage']['name'];
    $image_des = "uploadimage/" . $image_name;
    move_uploaded_file($image_location, "uploadimage/" . $image_name);
    $product_category = $_POST['pages'];


    // Insert product 

    mysqli_query($con, "INSERT INTO `product`(`PName`, `PPrice`, `PImage`, `PCategory`)
    VALUES ('$product_name', '$product_price', '$image_des', '$product_category')");
    header("Location: index.php");

}