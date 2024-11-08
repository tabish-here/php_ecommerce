<?php

$Name = $_POST['name'];
$Password = $_POST['password'];

$con = mysqli_connect('localhost', 'root', '', 'ecommerce');
$result = mysqli_query($con, "SELECT * FROM tbluser WHERE
 (Username = '$Name' OR Email = '$Name') AND Password = '$Password'");

session_start();

if (mysqli_num_rows($result)) {

    $_SESSION['user'] = $Name;

    echo "
        <script>
        alert('Login Successfully');
        window.location.href='../index.php';
        </script>
        ";
} else {
    echo "
        <script>
        alert('Incorrect email/username/password');
        window.location.href='login.php';
        </script>
        ";
}