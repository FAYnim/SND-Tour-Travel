<?php
include '../../config.php';

// Cek login
if($_SESSION['login'] != true) {
    header("Location: ../../login");
    exit;
}

// Ambil data dari form
$nama_kategori = mysqli_real_escape_string($koneksi, $_POST['nama_kategori']);
$deskripsi = mysqli_real_escape_string($koneksi, $_POST['deskripsi']);
$status = mysqli_real_escape_string($koneksi, $_POST['status']);

// Handle upload gambar
$gambar = "";
if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] == 0) {
    $target_dir = "../../uploads/";
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    $file_extension = strtolower(pathinfo($_FILES['gambar']['name'], PATHINFO_EXTENSION));
    $new_filename = uniqid() . '.' . $file_extension;
    $target_file = $target_dir . $new_filename;
    
    if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target_file)) {
        $gambar = "uploads/" . $new_filename;
    }
}

// Query insert
$query = "INSERT INTO kategori (nama_kategori, deskripsi, status, gambar) VALUES ('$nama_kategori', '$deskripsi', '$status', '$gambar')";
$submit = mysqli_query($koneksi, $query);

if($submit) {
    // Redirect ke halaman data dengan pesan sukses
    header("Location: ../../data-manajemen-kategori?status=success&message=Kategori berhasil ditambahkan");
} else {
    // Redirect dengan pesan error
    header("Location: ../../manajemen-kategori?status=error&message=Gagal menambahkan kategori");
}
exit;
?>
