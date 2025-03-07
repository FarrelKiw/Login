<?php
session_start();

// Cek jika user belum login, redirect ke login.php
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

// Ambil data dari session, cek apakah sudah ada atau belum
$nama = $_SESSION['nama'] ?? 'Tidak tersedia';
$email = $_SESSION['email'] ?? 'Tidak tersedia';
$ttl = $_SESSION['ttl'] ?? 'Tidak tersedia';
$riwpen = $_SESSION['riwpen'] ?? 'Tidak tersedia';
$pres = $_SESSION['pres'] ?? 'Tidak tersedia';
$ahli = $_SESSION['ahli'] ?? 'Tidak tersedia';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Vc.css">
    <title>CV - <?php echo htmlspecialchars($nama); ?></title>
</head>
<body>
    <div class="container">
        <div class="left">
        <img src="Picture/orang.jpg" alt="Ketut Susilo">
            <h2><?php echo htmlspecialchars($nama); ?></h2>
            <p>Lulusan Baru</p>
            
            <div class="section-title">KEAHLIAN</div>
            <p><?php echo htmlspecialchars($ahli); ?></p>
            
            <div class="section-title">KONTAK</div>
            <p>📧 <?php echo htmlspecialchars($email); ?></p>
        </div>
        <div class="right">
            <div class="section">
                <h3>DATA PRIBADI</h3>
                <p><strong>Tempat, Tanggal Lahir:</strong> <?php echo htmlspecialchars($ttl); ?></p>
                <br>
                <h3>PENDIDIKAN </h3>
                <p><?php echo htmlspecialchars($riwpen); ?></p>
                <br>
                <h3>PENGALAMAN </h3>
                <p><strong>Prestasi:</strong> <?php echo htmlspecialchars($pres); ?></p>
            </div>

            
        </div>
    </div>
</body>
</html>
