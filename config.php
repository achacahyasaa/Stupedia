<?php
// Konfigurasi database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'stupedia_simple';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Koneksi database gagal: " . $e->getMessage());
}

// Fungsi upload gambar yang diperbaiki dengan error handling lengkap
function uploadGambar($file, $folder = 'uploads/') {
    // Log untuk debugging
    error_log("=== UPLOAD DEBUG START ===");
    error_log("File info: " . print_r($file, true));
    
    // Validasi input file
    if (!isset($file) || !is_array($file)) {
        throw new Exception("File input tidak valid");
    }
    
    // Cek error upload
    if ($file['error'] !== UPLOAD_ERR_OK) {
        $errors = [
            UPLOAD_ERR_INI_SIZE => 'File terlalu besar (melebihi upload_max_filesize)',
            UPLOAD_ERR_FORM_SIZE => 'File terlalu besar (melebihi MAX_FILE_SIZE)',
            UPLOAD_ERR_PARTIAL => 'File hanya terupload sebagian',
            UPLOAD_ERR_NO_FILE => 'Tidak ada file yang diupload',
            UPLOAD_ERR_NO_TMP_DIR => 'Folder temporary tidak ada',
            UPLOAD_ERR_CANT_WRITE => 'Gagal menulis file ke disk',
            UPLOAD_ERR_EXTENSION => 'Upload dihentikan oleh ekstensi PHP'
        ];
        
        $errorMsg = isset($errors[$file['error']]) ? $errors[$file['error']] : 'Error upload tidak dikenal: ' . $file['error'];
        error_log("Upload error: " . $errorMsg);
        throw new Exception($errorMsg);
    }
    
    // Validasi file kosong
    if ($file['size'] == 0) {
        throw new Exception("File kosong atau tidak valid");
    }
    
    // Buat folder jika belum ada
    if (!is_dir($folder)) {
        if (!mkdir($folder, 0755, true)) {
            throw new Exception("Gagal membuat folder: " . $folder);
        }
        error_log("Folder created: " . $folder);
    }
    
    // Cek permission folder
    if (!is_writable($folder)) {
        throw new Exception("Folder tidak bisa ditulis: " . $folder . " (Permission: " . substr(sprintf('%o', fileperms($folder)), -4) . ")");
    }
    
    // Validasi ekstensi file
    $allowed = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
    $filename = $file['name'];
    $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    
    if (!in_array($ext, $allowed)) {
        throw new Exception("Format file tidak diizinkan. Hanya: " . implode(', ', $allowed) . ". File Anda: ." . $ext);
    }
    
    // Validasi ukuran file (5MB)
    $maxSize = 5 * 1024 * 1024; // 5MB
    if ($file['size'] > $maxSize) {
        throw new Exception("File terlalu besar. Maksimal: " . ($maxSize/1024/1024) . "MB. File Anda: " . round($file['size']/1024/1024, 2) . "MB");
    }
    
    // Validasi apakah benar-benar gambar
    $imageInfo = @getimagesize($file['tmp_name']);
    if ($imageInfo === false) {
        throw new Exception("File bukan gambar yang valid atau file rusak");
    }
    
    // Validasi MIME type
    $allowedMimes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif', 'image/webp'];
    if (!in_array($imageInfo['mime'], $allowedMimes)) {
        throw new Exception("MIME type tidak diizinkan: " . $imageInfo['mime']);
    }
    
    // Generate nama file unik
    $newname = time() . '_' . uniqid() . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $filename);
    $destination = $folder . $newname;
    
    error_log("Destination: " . $destination);
    error_log("Temp file: " . $file['tmp_name']);
    error_log("Temp file exists: " . (file_exists($file['tmp_name']) ? 'YES' : 'NO'));
    
    // Upload file
    if (move_uploaded_file($file['tmp_name'], $destination)) {
        // Verifikasi file berhasil diupload
        if (file_exists($destination)) {
            $uploadedSize = filesize($destination);
            error_log("Upload SUCCESS: " . $destination . " (Size: " . $uploadedSize . " bytes)");
            
            // Set permission file
            chmod($destination, 0644);
            
            error_log("=== UPLOAD DEBUG END ===");
            return $newname;
        } else {
            throw new Exception("File berhasil dipindahkan tapi tidak ditemukan di tujuan");
        }
    } else {
        $error = error_get_last();
        error_log("Move upload file FAILED. Last error: " . print_r($error, true));
        throw new Exception("Gagal memindahkan file. Cek permission folder dan disk space.");
    }
}

// Fungsi untuk menghitung status stunting sederhana
function hitungStunting($tinggi, $usia, $jenis_kelamin) {
    // Standar WHO sederhana (contoh)
    $standar = [
        'laki-laki' => [
            12 => 75.7, 18 => 82.3, 24 => 87.1, 36 => 95.1
        ],
        'perempuan' => [
            12 => 74.0, 18 => 80.7, 24 => 85.7, 36 => 94.1
        ]
    ];
    
    $standar_tinggi = 0;
    foreach ($standar[$jenis_kelamin] as $bulan => $tinggi_standar) {
        if ($usia <= $bulan) {
            $standar_tinggi = $tinggi_standar;
            break;
        }
    }
    
    if ($standar_tinggi == 0) $standar_tinggi = end($standar[$jenis_kelamin]);
    
    $persentase = ($tinggi / $standar_tinggi) * 100;
    
    if ($persentase >= 95) return 'Normal';
    elseif ($persentase >= 90) return 'Berisiko';
    else return 'Stunting';
}

session_start();
?>
