<?php
include "koneksi.php"
$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "INSERT INTO user (username, password) VALUES ('$ussername', '$password')";

if ($mysqli->query($query) === TRUE){
    echo "Registrasi Berhasil";
}else{
    echo "Registrasi Gagal: " .$mysqli->error;
}

$mysqli->close();
?>
