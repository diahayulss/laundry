<?php
include '../koneksi.php';

$id = $_GET['id'];
    
mysqli_query($koneksi, "DELETE FROM pakaian WHERE pakaian_transaksi = '$id'");


mysqli_query($koneksi, "DELETE FROM transaksi WHERE transaksi_id = '$id'");

echo "<script> alert('Data akan dihapus?'); window.location.href = 'transaksi.php' </script>"
?>
