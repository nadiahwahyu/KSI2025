<?php
// Include file koneksi
include 'koneksi.php';

// Data contoh untuk ditambahkan
$nama = "Nadiah";
$umur = 21;

// Query INSERT
$sql = "INSERT INTO users (nama, umur) VALUES ('$nama', $umur)";

if ($koneksi->query($sql) === TRUE) {
    echo "✅ Data berhasil ditambahkan: Nama = $nama, Umur = $umur";
} else {
    echo "❌ Gagal menambahkan data: " . $koneksi->error;
}

// Tutup koneksi
$koneksi->close();
?>
