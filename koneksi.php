<?php
$mysqli = new mysqli("localhost", "root", "", "login");

if($mysqli->connect_errno){
    echo "koneksi database gagal : " . $mysqli->connect_error;
}
?>