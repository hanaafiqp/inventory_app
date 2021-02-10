<?php 
$id_barang = $_GET['id']; 
$query = $conn->query("SELECT * FROM barang WHERE id_barang = ".$id_barang);
$data_barang = array();

if ($query) {
    if ($query->num_rows > 0) {
        $data_barang = $query->fetch_assoc();
    }
}
?>