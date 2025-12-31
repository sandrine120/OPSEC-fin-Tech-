<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: ../index.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <h2>Welcome, <?php echo $_SESSION["email"]; ?></h2>
  <a href="logout.php" class="btn btn-danger mt-3">Logout</a>
</div>

</body>
</html>
