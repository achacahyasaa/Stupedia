<?php
include 'config.php';

if ($_POST) {
    $nama_anak = $_POST['nama_anak'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $usia_bulan = $_POST['usia_bulan'];
    $tinggi_badan = $_POST['tinggi_badan'];
    $berat_badan = $_POST['berat_badan'];
    
    // Hitung status stunting
    $status_stunting = hitungStunting($tinggi_badan, $usia_bulan, $jenis_kelamin);
    
    // Simpan ke database
    $stmt = $pdo->prepare("INSERT INTO data_stunting (nama_anak, jenis_kelamin, usia_bulan, tinggi_badan, berat_badan, status_stunting) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([$nama_anak, $jenis_kelamin, $usia_bulan, $tinggi_badan, $berat_badan, $status_stunting]);
    
    // Redirect dengan hasil
    header("Location: hasil_kalkulator.php?status=" . urlencode($status_stunting) . "&nama=" . urlencode($nama_anak));
    exit;
}
?>
