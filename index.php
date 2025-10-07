<!DOCTYPE html>
<html>
<head>
  <title>Sistem Permohonan Organisasi</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <header>
    <h1>Selamat Datang ke Sistem Permohonan Organisasi</h1>
    <nav>
      <a href="index.php">Utama</a>
      <a href="about.php">Pengenalan</a>
      <a href="permohonan.php">Permohonan</a>
      <a href="status.php">Semak Status</a>
      <a href="admin/login.php">Admin</a>
    </nav>
  </header>

  <main>
    <h2>Selamat Datang</h2>
    <p>Gunakan sistem ini untuk membuat permohonan kenderaan atau tempahan makan rasmi.</p>
  </main>

  <footer>
    <p>© 2025 Organisasi Anda</p>
  </footer>
</body>
</html>
🔹 about.php
<!DOCTYPE html>
<html>
<head>
  <title>Pengenalan Sistem</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <header>
    <h1>Pengenalan Sistem</h1>
    <nav>
      <a href="index.php">Utama</a>
      <a href="about.php">Pengenalan</a>
      <a href="permohonan.php">Permohonan</a>
      <a href="status.php">Semak Status</a>
      <a href="admin/login.php">Admin</a>
    </nav>
  </header>

  <main>
    <h2>Mengenai Sistem</h2>
    <p>Sistem ini dibangunkan untuk memudahkan urusan permohonan kenderaan dan tempahan keraian secara atas talian.</p>
  </main>

  <footer>
    <p>© 2025 Organisasi Anda</p>
  </footer>
</body>
</html>
🔹 permohonan.php
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
    <form method="post" action="#">
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
🔹 assets/style.css (gaya ringkas)
body {
  font-family: Arial, sans-serif;
  margin: 0;
  background: #f9f9f9;
}

header {
  background: #0044cc;
  color: white;
  padding: 10px 0;
  text-align: center;
}

nav a {
  color: white;
  text-decoration: none;
  margin: 0 10px;
}

main {
  padding: 20px;
  text-align: center;
}

form {
  background: white;
  display: inline-block;
  padding: 20px;
  border-radius: 8px;
}

label {
  display: block;
  margin-top: 10px;
}

input, select {
  width: 100%;
  padding: 5px;
  margin-top: 5px;
}

button {
  margin-top: 15px;
  padding: 8px 20px;
  background: #0044cc;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

footer {
  background: #222;
  color: white;
  text-align: center;
  padding: 10px 0;
  position: fixed;
  width: 100%;
  bottom: 0;
}
