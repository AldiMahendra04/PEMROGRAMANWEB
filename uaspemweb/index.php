<?php
session_start();
if (!isset($_SESSION['nim'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Uas Program web 2 <br><br><?php echo $_SESSION['nim']; ?></h1>
    <button><a href="input.php">Input Data</button></a>
    <button><a href="report.php">Laporan</button></a>
    <button><a href="logout.php">Logout</button></a>
</body>
</html>