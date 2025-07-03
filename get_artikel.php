<?php
include 'config.php';

// Set header untuk JSON
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');

// Enable error reporting untuk debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    if (isset($_GET['id'])) {
        // Get specific article for modal detail
        $stmt = $pdo->prepare("SELECT * FROM artikel WHERE id = ?");
        $stmt->execute([$_GET['id']]);
        $artikel = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($artikel) {
            echo json_encode($artikel, JSON_UNESCAPED_UNICODE);
        } else {
            echo json_encode(['error' => 'Artikel tidak ditemukan'], JSON_UNESCAPED_UNICODE);
        }
    } else {
        // Get all articles for pagination
        $stmt = $pdo->query("SELECT * FROM artikel ORDER BY tanggal_dibuat DESC");
        $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        // Jika tidak ada artikel, buat artikel default
        if (empty($articles)) {
            $default_articles = [
                [
                    'judul' => 'Pentingnya 1000 Hari Pertama Kehidupan',
                    'konten' => 'Periode 1000 hari pertama kehidupan (HPK) dimulai sejak terbentuknya janin dalam kandungan hingga anak berusia 2 tahun. Periode ini merupakan masa emas (golden period) yang sangat menentukan kualitas kehidupan anak di masa depan.\n\nPada masa ini, pertumbuhan dan perkembangan anak berlangsung sangat pesat. Otak anak berkembang hingga 80% dari ukuran otak dewasa.',
                    'kategori' => 'gizi',
                    'sumber' => 'WHO - World Health Organization',
                    'sumber_url' => 'https://www.who.int'
                ],
                [
                    'judul' => 'Mengenal Tanda-Tanda Stunting pada Anak',
                    'konten' => 'Stunting adalah kondisi gagal tumbuh pada anak akibat kekurangan gizi kronis yang terjadi sejak 1000 hari pertama kehidupan. Kondisi ini ditandai dengan tinggi badan anak yang berada di bawah standar WHO untuk usianya.\n\nTanda-tanda stunting yang dapat diamati meliputi tinggi badan lebih pendek dari anak seusianya.',
                    'kategori' => 'kesehatan',
                    'sumber' => 'UNICEF Indonesia',
                    'sumber_url' => 'https://www.unicef.org'
                ],
                [
                    'judul' => 'Panduan Lengkap MPASI untuk Bayi 6 Bulan',
                    'konten' => 'MPASI (Makanan Pendamping ASI) mulai diberikan saat bayi berusia 6 bulan. Pada usia ini, sistem pencernaan bayi sudah siap menerima makanan selain ASI.\n\nTekstür MPASI dimulai dari yang halus seperti puree, kemudian bertahap menjadi lebih kasar sesuai perkembangan kemampuan mengunyah bayi.',
                    'kategori' => 'mpasi',
                    'sumber' => 'Kementerian Kesehatan RI',
                    'sumber_url' => 'https://www.kemkes.go.id'
                ],
                [
                    'judul' => 'Tips Memilih Bahan MPASI yang Aman dan Bergizi',
                    'konten' => 'Pemilihan bahan MPASI yang tepat sangat penting untuk kesehatan dan pertumbuhan bayi. Pilih bahan makanan segar, hindari pengawet dan pemanis buatan.\n\nBahan MPASI yang baik meliputi buah-buahan segar, sayuran, protein hewani seperti daging, ikan, dan telur.',
                    'kategori' => 'mpasi',
                    'sumber' => 'IDAI - Ikatan Dokter Anak Indonesia',
                    'sumber_url' => 'https://www.idai.or.id'
                ],
                [
                    'judul' => 'Memantau Perkembangan Anak Usia Dini',
                    'konten' => 'Pemantauan perkembangan anak secara rutin sangat penting untuk mendeteksi dini adanya gangguan pertumbuhan. Orang tua perlu memahami milestone perkembangan anak sesuai usianya.\n\nPemantauan dapat dilakukan melalui posyandu, puskesmas, atau fasilitas kesehatan lainnya.',
                    'kategori' => 'perkembangan',
                    'sumber' => 'IDAI - Ikatan Dokter Anak Indonesia',
                    'sumber_url' => 'https://www.idai.or.id'
                ]
            ];

            foreach ($default_articles as $article) {
                $stmt = $pdo->prepare("INSERT INTO artikel (judul, konten, kategori, sumber, sumber_url) VALUES (?, ?, ?, ?, ?)");
                $stmt->execute([$article['judul'], $article['konten'], $article['kategori'], $article['sumber'], $article['sumber_url']]);
            }
            
            // Get articles again after inserting
            $stmt = $pdo->query("SELECT * FROM artikel ORDER BY tanggal_dibuat DESC");
            $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        
        echo json_encode($articles, JSON_UNESCAPED_UNICODE);
    }
} catch(PDOException $e) {
    echo json_encode(['error' => 'Database error: ' . $e->getMessage()], JSON_UNESCAPED_UNICODE);
} catch(Exception $e) {
    echo json_encode(['error' => 'Error: ' . $e->getMessage()], JSON_UNESCAPED_UNICODE);
}
?>
