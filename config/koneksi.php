<?php
$servername = "localhost";
$database = "inventory_apps";
$username = "root";
$password = "";

// membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);
// mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>