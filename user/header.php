<!DOCTYPE html>
<html lang="en">
<>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    </head>

    <body>

        <?php
        session_start();
        $count = 0;
        if (isset($_SESSION['cart'])) {
            $count = count($_SESSION['cart']);
        }
        ?>

        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid font-monospace">
                <a class="navbar-brand pb-2"><img src="logo.png" alt="logo_img"></a>

                <div class="d-flex">
                    <a href="index.php" class="text-warning text-decoration-none pe-2">
                        <i class="fa-solid fa-house"></i> Home</a>
                    <a href="" class="text-warning text-decoration-none pe-2">
                        <i class="fa-solid fa-cart-shopping"></i> Cart (<?php echo $count ?>)|</a>

                    <span class="text-warning pe-2">
                        <i class="fa-solid fa-user-shield"></i> Hello,

                        <?php
                        if (isset($_SESSION['user'])) {
                            echo $_SESSION['user'];
                            echo '
                            | <a href="form/logout.php" class="text-warning text-decoration-none pe-2">
                            <i class="fa-solid fa-right-to-bracket"></i> Logout</a>|
                            ';
                        } else {
                            echo "
                            | <a href='form/login.php' class='text-warning text-decoration-none pe-2'>
                            <i class='fa-solid fa-right-to-bracket'></i> Login</a>|";
                        }
                        ?>


                        <a href="../admin/mystore.php" class="text-warning text-decoration-none pe-2">Admin</a>
                    </span>

        </nav>
        </div>

        <div class="bg-danger sticky-top font-monospace">
            <ul class="list-unstyled d-flex justify-content-center">
                <li><a href="Laptop.php" class="text-decoration-none text-white fw-bold fs-4 px-5">LAPTOPS</a></li>
                <li><a href="Mobile.php" class="text-decoration-none text-white fw-bold fs-4 px-5">MOBILES</a></li>
                <li><a href="Bag.php" class="text-decoration-none text-white fw-bold fs-4 px-5">BAGS</a></li>
            </ul>
        </div>

    </body>

</html>