<?php
include('../../config.php');

$id = (int)$_GET['id'];

$delete = mysqli_query($koneksi, "DELETE FROM paket_spesial_liburan WHERE id = $id");

if ($delete == TRUE) {
    header("location: ../../data-manajemen-paket-spesial?success=Data berhasil dihapus.");
} else {
    echo "Gagal Menghapus: " . mysqli_error($koneksi);
}
?>
