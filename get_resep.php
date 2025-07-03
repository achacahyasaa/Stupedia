<?php
include 'config.php';

try {
    $id = $_GET['id'] ?? 0;
    
    if (!$id) {
        throw new Exception('ID resep tidak ditemukan');
    }
    
    $stmt = $pdo->prepare("SELECT * FROM resep WHERE id = ?");
    $stmt->execute([$id]);
    $resep = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if (!$resep) {
        throw new Exception('Resep tidak ditemukan');
    }
    
    // Pastikan semua field ada dan tidak null
    $resep['nama_resep'] = $resep['nama_resep'] ?? 'Nama Resep Tidak Tersedia';
    $resep['usia_anak'] = $resep['usia_anak'] ?? 'Tidak Ditentukan';
    $resep['bahan'] = $resep['bahan'] ?? 'Bahan tidak tersedia';
    $resep['cara_membuat'] = $resep['cara_membuat'] ?? 'Cara membuat tidak tersedia';
    $resep['energi_kkal'] = $resep['energi_kkal'] ?? $resep['waktu_masak'] ?? 0;
    $resep['protein_gr'] = $resep['protein_gr'] ?? 0;
    $resep['lemak_gr'] = $resep['lemak_gr'] ?? 0;
    $resep['gambar'] = $resep['gambar'] ?? '';
    
    header('Content-Type: application/json');
    echo json_encode($resep);
    
} catch(Exception $e) {
    header('Content-Type: application/json');
    http_response_code(500);
    echo json_encode([
        'error' => true,
        'message' => $e->getMessage()
    ]);
}
?>
