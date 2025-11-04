<?php
// ==============================
// Koneksi ke Database
// ==============================

// Konfigurasi database
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "nama_database"; // ganti dengan nama database kamu

// Membuat koneksi
$koneksi = new mysqli($host, $user, $pass, $dbname);

// Cek koneksi
if ($koneksi->connect_error) {
    die("❌ Koneksi gagal: " . $koneksi->connect_error);
} else {
    echo "✅ Terhubung ke database";
}

// Tutup koneksi (opsional)
$koneksi->close();
?>
