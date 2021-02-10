<?php 

include('../config/koneksi.php');

$id = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$harga_barang = $_POST['harga_barang'];
$deskripsi_barang = $_POST['deskripsi_barang'];
 
$target_upload_foto = "../media/foto/";
$filename = $_POST['foto_lama'];
if($_FILES['foto_barang'] && $_FILES['foto_barang']['name'] != "") {
    unlink("../media/foto/".$filename);
    $tmp_name = $_FILES["foto_barang"]["tmp_name"];
    $filename = $_FILES['foto_barang']["name"];
    move_uploaded_file($tmp_name, $target_upload_foto . $filename);
}

$update = $conn->query("UPDATE barang SET nama_barang = '".$nama_barang."', harga_barang = '".$harga_barang."', deskripsi_barang = '".$deskripsi_barang."', foto_barang = '".$filename."' WHERE id_barang = $id ");

if ($update) {
    header('location:../');
}else{
    echo "Terjadi kesalahan";
}
?>