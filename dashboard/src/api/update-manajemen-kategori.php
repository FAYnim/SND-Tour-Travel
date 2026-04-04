<?php
include '../../config.php';

// Cek login
if($_SESSION['login'] != true) {
    header("Location: ../../login");
    exit;
}

// Ambil data dari form
$id = mysqli_real_escape_string($koneksi, $_POST['id']);
$nama_kategori = mysqli_real_escape_string($koneksi, $_POST['nama_kategori']);
$deskripsi = mysqli_real_escape_string($koneksi, $_POST['deskripsi']);
$status = mysqli_real_escape_string($koneksi, $_POST['status']);

// Ambil data lama untuk cek gambar
$query_lama = mysqli_query($koneksi, "SELECT gambar FROM kategori WHERE id='$id'");
$data_lama = mysqli_fetch_array($query_lama);
$gambar = $data_lama['gambar'] ?? "";
if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] == 0) {
    $target_dir = "../../uploads/";
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    $file_extension = strtolower(pathinfo($_FILES['gambar']['name'], PATHINFO_EXTENSION));
    $new_filename = uniqid() . '.' . $file_extension;
    $target_file = $target_dir . $new_filename;
    
    if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target_file)) {
        // Hapus gambar lama jika ada
        if (!empty($data_lama['gambar']) && file_exists("../../" . $data_lama['gambar'])) {
            unlink("../../" . $data_lama['gambar']);
        }
        $gambar = "uploads/" . $new_filename;
    }
}

// Query update
$query = "UPDATE kategori SET nama_kategori = '$nama_kategori', deskripsi = '$deskripsi', status = '$status', gambar = '$gambar' WHERE id = '$id'";
$submit = mysqli_query($koneksi, $query);

if($submit) {
    // Redirect ke halaman data dengan pesan sukses
    header("Location: ../../data-manajemen-kategori?status=success&message=Kategori berhasil diupdate");
} else {
    // Redirect dengan pesan error
    header("Location: ../../edit-manajemen-kategori?id=$id&status=error&message=Gagal mengupdate kategori");
}
exit;
?>
