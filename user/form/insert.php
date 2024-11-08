<?php

$con = mysqli_connect("localhost", "root", "", "ecommerce");

if (isset($_POST['submit'])) {

    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Number = $_POST['number'];
    $Password = $_POST['password'];

    $dup_email = mysqli_query($con, "SELECT * FROM tbluser WHERE Email = '$Email'");
    $dup_username = mysqli_query($con, "SELECT * FROM tbluser WHERE UserName = '$Name'");

    if (mysqli_num_rows($dup_email)) {
        echo "
        <script>
        alert('This Email is already taken');
        window.location.href='register.php';
        </script>
        ";
    }

    if (mysqli_num_rows($dup_username)) {
        echo "
        <script>
        alert('This username is already taken');
        window.location.href='register.php';
        </script>
        ";
    } else {
        mysqli_query($con, "INSERT INTO tbluser (Username, Email, Number, Password)
                VALUES ('$Name', '$Email', '$Number', '$Password')");
        echo "
                <script>
                alert('Register Successfully');
                window.location.href='login.php';
                </script>
                ";
    }
}