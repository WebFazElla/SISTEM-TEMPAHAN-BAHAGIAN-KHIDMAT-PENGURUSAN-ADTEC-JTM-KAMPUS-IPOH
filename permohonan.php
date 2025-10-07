<?php
include("includes/config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $jenis = $_POST['jenis'];
    $tarikh = $_POST['tarikh'];

    $sql = "INSERT INTO permohonan (nama, jenis, tarikh) 
            VALUES ('$nama', '$jenis', '$tarikh')";

    if (mysqli_query($conn, $sql)) {
        $mesej = "Permohonan berjaya dihantar!";
    } else {
        $mesej = "Ralat: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Borang Permohonan</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <header>
    <h1>Borang Permohonan</h1>
    <nav>
      <a href="index.php">Utama</a>
      <a href="about.php">Pengenalan</a>
      <a href="permohonan.php">Permohonan</a>
      <a href="status.php">Semak Status</a>
      <a href="admin/login.php">Admin</a>
    </nav>
  </header>

  <main>
    <?php if (!empty($mesej)) echo "<p><b>$mesej</b></p>"; ?>

    <form method="post" action="">
      <label>Nama Pemohon:</label>
      <input type="text" name="nama" required>

      <label>Jenis Permohonan:</label>
      <select name="jenis">
        <option value="kenderaan">Kenderaan</option>
        <option value="makanan">Tempahan Makanan</option>
      </select>

      <label>Tarikh Permohonan:</label>
      <input type="date" name="tarikh" required>

      <button type="submit">Hantar Permohonan</button>
    </form>
  </main>

  <footer>
    <p>© 2025 Organisasi Anda</p>
  </footer>
</body>
</html>
