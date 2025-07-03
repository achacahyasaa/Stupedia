<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Analisis - StuPedia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
                background-image: url('img/kids.jpg'); /* Ganti dengan nama file gambar atau URL */
                background-size: cover; /* agar gambar menutupi seluruh area */
                background-position: center; /* posisi gambar di tengah */
                background-repeat: no-repeat; /* mencegah gambar mengulang */
                min-height: 100vh;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .main-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            animation: slideUp 0.8s ease-out;
        }
        
        .card-header {
            background: #027c68; 
            color: white;
            border-radius: 20px 20px 0 0 !important;
            padding: 2rem;
            border: none;
        }
        
        .card-header h3 {
            margin: 0;
            font-weight: 600;
            font-size: 1.8rem;
        }
        
        .card-body {
            padding: 3rem 2rem;
        }
        
        .child-name {
            font-size: 1.5rem;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 2rem;
        }
        
        .child-name i {
            color: #3498db;
            margin-right: 10px;
        }
        
        .status-card {
            border-radius: 15px;
            border: none;
            padding: 2rem;
            margin: 2rem 0;
            position: relative;
            overflow: hidden;
        }
        
        .status-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, transparent, currentColor, transparent);
        }
        
        .status-normal {
            background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);
            color: #27ae60;
        }
        
        .status-warning {
            background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%);
            color:rgb(230, 166, 63);
        }
        
        .status-danger {
            background: linear-gradient(135deg, #ffedef 0%, #ffd3d3 100%);
            color:rgb(238, 49, 29);
        }
        
        .status-title {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .status-icon {
            font-size: 2rem;
            margin-right: 15px;
            animation: pulse 2s infinite;
        }
        
        .recommendation {
            font-size: 1.1rem;
            line-height: 1.6;
            margin: 0;
        }
        
        .action-buttons {
            margin-top: 3rem;
        }
        
        .btn-modern {
            padding: 12px 30px;
            border-radius: 25px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            border: none;
            margin: 0 10px;
            position: relative;
            overflow: hidden;
        }
        
        .btn-primary-modern {
            background: #027c68; 
            color: white;
        }
        
        .btn-primary-modern:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
            color: white;
        }
        
        .btn-secondary-modern {
            background: #027c68; 
            color: white;
        }
        
        .btn-secondary-modern:hover {
            transform: translateY(-2px);
            box-shadow: #027c68; 
            color: white;
        }
        
        .floating-shapes {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }
        
        .shape {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }
        
        .shape:nth-child(1) {
            width: 80px;
            height: 80px;
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }
        
        .shape:nth-child(2) {
            width: 120px;
            height: 120px;
            top: 20%;
            right: 10%;
            animation-delay: 2s;
        }
        
        .shape:nth-child(3) {
            width: 100px;
            height: 100px;
            bottom: 10%;
            left: 20%;
            animation-delay: 4s;
        }
        
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
        
        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
        }
        
        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
        }
        
        @keyframes shimmer {
            0% {
                transform: translateX(-100%);
            }
            100% {
                transform: translateX(100%);
            }
        }
        
        @media (max-width: 768px) {
            .card-body {
                padding: 2rem 1rem;
            }
            
            .btn-modern {
                display: block;
                width: 100%;
                margin: 10px 0;
            }
            
            .status-title {
                font-size: 1.5rem;
            }
            
            .child-name {
                font-size: 1.3rem;
            }
        }
    </style>
</head>
<body>
    <div class="floating-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card main-card">
                    <div class="card-header text-center">
                        <h3><i></i>Hasil Analisis Pertumbuhan</h3>
                    </div>
                    <div class="card-body text-center">
                        <?php
                        $status = $_GET['status'] ?? '';
                        $nama = $_GET['nama'] ?? '';
                        
                        $statusClass = 'status-normal';
                        $statusIcon = 'fa-check-circle';
                        $interpretasi = '';
                        $rekomendasi = '';
                        $tindakan = '';
                        $pantauan = '';
                        
                        switch($status) {
                            case 'Normal':
                                $statusClass = 'status-normal';
                                $statusIcon = 'fa-check-circle';
                                $interpretasi = 'Tinggi badan anak sesuai dengan standar WHO untuk usianya. Ini menunjukkan bahwa pertumbuhan linear anak berjalan dengan baik dan tidak ada indikasi stunting.';
                                $rekomendasi = 'Pertahankan pola makan sehat dengan gizi seimbang, pastikan asupan protein, vitamin, dan mineral tercukupi. Lanjutkan stimulasi tumbuh kembang yang optimal.';
                                $tindakan = '• Berikan makanan bergizi 4 sehat 5 sempurna<br>• Rutin imunisasi sesuai jadwal<br>• Stimulasi motorik dan kognitif<br>• Jaga kebersihan dan sanitasi';
                                $pantauan = 'Kontrol rutin setiap 3-6 bulan ke posyandu atau fasilitas kesehatan untuk memantau kurva pertumbuhan.';
                                break;
                            case 'Berisiko':
                                $statusClass = 'status-warning';
                                $statusIcon = 'fa-exclamation-triangle';
                                $interpretasi = 'Tinggi badan anak berada di bawah rata-rata normal tetapi belum termasuk kategori stunting. Kondisi ini memerlukan perhatian khusus untuk mencegah terjadinya stunting.';
                                $rekomendasi = 'Diperlukan intervensi gizi yang lebih intensif dan pemantauan ketat. Konsultasi dengan ahli gizi atau dokter anak untuk evaluasi lebih lanjut.';
                                $tindakan = '• Tingkatkan asupan protein hewani (telur, ikan, daging)<br>• Berikan makanan padat gizi dan kalori tinggi<br>• Suplemen vitamin sesuai anjuran dokter<br>• Perbaiki pola makan dan frekuensi makan';
                                $pantauan = 'Kontrol bulanan untuk memantau progres pertumbuhan dan evaluasi intervensi gizi yang diberikan.';
                                break;
                            case 'Stunting':
                                $statusClass = 'status-danger';
                                $statusIcon = 'fa-times-circle';
                                $interpretasi = 'Tinggi badan anak berada di bawah -2 SD dari standar WHO, menunjukkan kondisi stunting atau gagal tumbuh kronis. Ini dapat berdampak pada perkembangan kognitif dan fisik jangka panjang.';
                                $rekomendasi = 'SEGERA konsultasi dengan dokter anak untuk penanganan medis dan gizi intensif. Diperlukan evaluasi menyeluruh untuk menentukan penyebab dan rencana terapi.';
                                $tindakan = '• Terapi gizi medis intensif<br>• Pemberian makanan terapeutik khusus<br>• Evaluasi penyakit penyerta<br>• Suplementasi mikronutrien<br>• Stimulasi tumbuh kembang intensif';
                                $pantauan = 'Kontrol ketat setiap 2 minggu di fasilitas kesehatan untuk monitoring dan evaluasi terapi yang diberikan.';
                                break;
                        }
                        ?>
                        
                        <div class="child-name">
                            <i></i><?= htmlspecialchars($nama) ?>
                        </div>
                        
                        <div class="status-card <?= $statusClass ?>">
                            <div class="status-title">
                                <i class="fas <?= $statusIcon ?> status-icon"></i>
                                Status: <?= $status ?>
                            </div>
                            
                            <div class="interpretation-section mb-4">
                                <h6 class="section-title"><i class="fas fa-info-circle me-2"></i>Interpretasi</h6>
                                <p class="interpretation-text"><?= $interpretasi ?></p>
                            </div>
                            
                            <div class="recommendation-section mb-4">
                                <h6 class="section-title"><i class="fas fa-lightbulb me-2"></i>Rekomendasi</h6>
                                <p class="recommendation-text"><?= $rekomendasi ?></p>
                            </div>
                            
                            <div class="action-section mb-4">
                                <h6 class="section-title"><i class="fas fa-tasks me-2"></i>Tindakan yang Diperlukan</h6>
                                <div class="action-text"><?= $tindakan ?></div>
                            </div>
                            
                            <div class="monitoring-section">
                                <h6 class="section-title"><i class="fas fa-calendar-check me-2"></i>Pemantauan</h6>
                                <p class="monitoring-text"><?= $pantauan ?></p>
                            </div>
                        </div>
                        
                        <div class="action-buttons">
                            <a href="index.php" class="btn btn-primary-modern btn-modern">
                                <i class="fas fa-home me-2"></i>Kembali ke Beranda
                            </a>
                            <a href="index.php#kalkulator" class="btn btn-secondary-modern btn-modern">
                                <i class="fas fa-calculator me-2"></i>Cek Lagi
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>