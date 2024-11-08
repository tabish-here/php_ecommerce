<!-- php update code  -->
<?php

if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $product_name = $_POST['Pname'];
    $product_price = $_POST['Pprice'];
    $product_image = $_FILES['Pimage'];
    $image_location = $_FILES['Pimage']['tmp_name'];
    $image_name = $_FILES['Pimage']['name'];
    $image_des = "uploadimage/" . $image_name;
    move_uploaded_file($image_location, "uploadimage/" . $image_name);
    $product_category = $_POST['pages'];

    include 'config.php';
    mysqli_query($con, "UPDATE product SET PName = '$product_name', PPrice = '$product_price',
    PImage = '$image_des', PCategory = '$product_category' WHERE id = $id");
    header("Location: index.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-Update-page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

    <?php
    // $Id = $_GET['id'];
    // var_dump($_GET);
    if (isset($_GET['id'])) {
        $Id = intval($_GET['id']); // Ensure the ID is treated as an integer
    } else {
        die("Invalid ID.");
    }
    include 'config.php';
    $record = mysqli_query($con, "SELECT * FROM product WHERE id = $Id");
    $data = mysqli_fetch_array($record);
    // var_dump($data);
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-3">

                <form action="update.php" method="POST" enctype="multipart/form-data">

                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-warning">Product Update:</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Product Name:</label>
                        <input type="text" value="<?php echo $data['PName']; ?>" name="Pname" class="form-control"
                            placeholder="Enter product name">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Product Price:</label>
                        <input type="text" value="<?php echo $data['PPrice']; ?>" name="Pprice" class="form-control"
                            placeholder="Enter product price">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Add Product Image:</label>
                        <input type="file" name="Pimage" class="form-control"><br>
                        <img src="<?php echo $data['PImage']; ?>" alt="">
                    </div>

                    <div class=" mb-3">
                        <label class="form-label">Select Page Category</label>
                        <select class="form-select" name="pages">
                            <option value="Home">Home</option>
                            <option value="Laptop">Laptop</option>
                            <option value="Bag">Bag</option>
                            <option value="Mobile">Mobile</option>
                        </select>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                    <button name="update" class="bg-danger fs-4 fw-bold my-3 form-control text-white">Update</button>

                </form>

            </div>
        </div>
    </div>