<?php 
$query = $conn->query("SELECT * FROM barang");
$data_barang = array();

if ($query) {
    if ($query->num_rows > 0) {
        while ($row = $query->fetch_assoc()) {
            $data_barang[] = $row;
        }
    }
}
?>

