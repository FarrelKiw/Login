<?php
session_start();

// Cek jika user belum login, redirect ke login.php
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['nama'] = $_POST['nama'] ?? '';
    $_SESSION['ttl'] = $_POST['ttl'] ?? '';
    $_SESSION['riwpen'] = $_POST['riwpen'] ?? '';
    $_SESSION['pres'] = $_POST['pres'] ?? '';
    $_SESSION['ahli'] = $_POST['ahli'] ?? '';

    // Debugging: Cek apakah data masuk ke session
    header("Location: cv.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8"/> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel = "stylesheet" href = css/cugski.css >
    <title>Form</title>
</head>
<body>
    <div class="container"> 
      <div class="title">Data diri</div>
      <div class="content">

        <form action="" method="POST">
          <div class="user-details">
          
            <div class="input-box">
              <span class="details">Nama</span>
              <input type="text" id = "nama" name = "nama" placeholder="Jawaban anda" >
              <i class="uis uis-user-circle"></i>
            </div>
            
            <div class="input-box">
              <span class="details">Tempat, Tanggal Lahir</span>
              <input type="text" id = "ttl" name = "ttl" placeholder="Jawaban anda" >
            </div>

            <div class="input-box">
              <span class="details">Riwayat Pendidikan</span>
              <input type="text" id = "Riwpen" name = "riwpen"  placeholder="Jawaban anda" >
            </div>

            <div class="input-box">
              <span class="details">Prestasi</span>
              <input type="text" id = "pres" name = "pres" placeholder="Jawaban anda" >
            </div>

            <div class="input-box">
              <span class="details">Keahlian</span>
              <input type="text" id = "ahli" name = "ahli" placeholder="Jawaban anda" >
            </div>
          </div>
          <div class="button">
            <input type="submit" value="Register">
          </div> 
        </form>
      </div> 
    </div>
  </body>
  </html>