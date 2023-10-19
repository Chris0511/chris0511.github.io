<?php
include 'koneksi.php';

// Mengambil data dari formulir
$id = $_POST['id'];
$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];

// Proses upload file resep
$target_dir = "resep/";
$resep_file = $target_dir . basename($_FILES["resep"]["name"]);
$uploadOk = 1;
$fileType = strtolower(pathinfo($resep_file, PATHINFO_EXTENSION));

if ($fileType != "txt") {
    echo "Maaf, hanya file teks (.txt) yang diperbolehkan.";
    $uploadOk = 0;
}

if ($uploadOk == 1) {
    if (move_uploaded_file($_FILES["resep"]["tmp_name"], $resep_file)) {
        echo "File resep ". basename( $_FILES["resep"]["name"]). " telah terunggah.";
    } else {
        echo "Maaf, terjadi kesalahan saat mengunggah file resep.";
    }
}

// Proses upload file gambar
$target_dir = "images/";
$gambar_file = $target_dir . basename($_FILES["gambar"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($gambar_file, PATHINFO_EXTENSION));

if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "webp" ) {
    echo "Maaf, hanya file JPG, JPEG, PNG, GIF & WEBP yang diperbolehkan.";
    $uploadOk = 0;
}

if ($uploadOk == 1) {
    if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $gambar_file)) {
        echo "File gambar ". basename( $_FILES["gambar"]["name"]). " telah terunggah.";
    } else {
        echo "Maaf, terjadi kesalahan saat mengunggah file gambar.";
    }
}

// Simpan data ke database
$sql = "INSERT INTO tbminuman (id, nama, deskripsi, resep, gambar)
VALUES ('$id', '$nama', '$deskripsi', '".basename($_FILES["resep"]["name"])."', '".basename($_FILES["gambar"]["name"])."')";

if ($koneksi->query($sql) === TRUE) {
    echo '<script>alert("Data berhasil ditambahkan."); window.location.href = "form.php";</script>';
} else {
    echo "Terjadi kesalahan: " . $koneksi->error;
}

$koneksi->close();
?>
