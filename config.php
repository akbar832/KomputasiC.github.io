<?php
// Konfigurasi database
$host = 'localhost';       // Nama host (default: localhost)
$dbname = 'dbPaaS';        // Nama database
$username = 'root';        // Username database
$password = '';            // Password database (kosong jika tidak ada)

try {
    // Membuat koneksi menggunakan PDO
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Atur mode error menjadi Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>
