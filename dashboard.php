<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location: index.php");
}else{

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <h1>Selamat Datang</h1>
    <a href="logout.php">Logout</a>
</body>

</html>
<?php
}
?>