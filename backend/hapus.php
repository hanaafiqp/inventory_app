<?php 
include('../config/koneksi.php');

$id_barang = $_GET['id']; 
$hapus = $conn->query("DELETE FROM barang WHERE id_barang = ".$id_barang);

if ($hapus) {
    header('location:../');
}else{
    echo "Terjadi kesalahan";
}
?>