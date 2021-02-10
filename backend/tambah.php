<?php 

include('../config/koneksi.php');

$nama_barang = $_POST['nama_barang'];
$harga_barang = $_POST['harga_barang'];
$deskripsi_barang = $_POST['deskripsi_barang'];
 
$target_upload_foto = "../media/foto/";
$filename = "";
if($_FILES['foto_barang']) {

    $tmp_name = $_FILES["foto_barang"]["tmp_name"];
    $filename = $_FILES['foto_barang']["name"];
    move_uploaded_file($tmp_name, $target_upload_foto . $filename);
}

$insert = $conn->query(" INSERT INTO barang (nama_barang,harga_barang,deskripsi_barang,foto_barang) VALUES ('".$nama_barang."','".$harga_barang."','".$deskripsi_barang."','".$filename."') ");
if ($insert) {
    header('location:../');
}else{
    echo "Terjadi kesalahan";
}
?>