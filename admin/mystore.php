<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin home-page</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Fontawesome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<?php
session_start();
if (!$_SESSION['admin']) {
  header('Location: form/login.php');
}

?>

<body>

  <nav class="navbar navbar-light bg-dark">
    <div class="container-fluid text-white">
      <a class="navbar-brand text-white">
        <h1>Mystore</h1>
      </a>

      <span>
        <i class="fa-solid fa-user-shield"></i>
        Hello, <?php echo $_SESSION['admin']; ?>
        <i class="fa-solid fa-arrow-right-from-bracket"></i>
        <a href="form/logout.php" class="text-decoration-none text-white">Logout</a> |
        <a href="../user/index.php" class="text-decoration-none text-white">Userpanel</a>
      </span>
      </form>
    </div>
  </nav>

  <div class="text-center">
    <h2>Dashboard</h2>
  </div>

  <div class="col-md-6 bg-danger text-center m-auto">
    <a href="product/index.php" class="text-white text-decoration-none fs-4 fw-bold px-5">Add Post</a>
    <a href="user.php" class="text-white text-decoration-none fs-4 fw-bold px-5">Users</a>
  </div>

</body>

</html>