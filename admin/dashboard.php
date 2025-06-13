<?php include '../inc/header.php'; ?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Admin</title>

  <!-- Bootstrap CSS (CDN) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons (opsional) -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

  <style>
    html, body {
      height: 100%;
      margin: 0;
    }

    body {
      display: flex;
      flex-direction: column;
    }

    .container-flex {
      display: flex;
      flex: 1;
    }

    .sidebar {
      width: 200px;
      background-color: #007bff;
      color: white;
      padding-top: 20px;
      flex-shrink: 0;
      min-height: 100vh;
    }

    .sidebar h5 {
      text-align: center;
      margin-bottom: 20px;
    }

    .sidebar a {
      color: white;
      display: block;
      padding: 10px 20px;
      text-decoration: none;
    }

    .sidebar a:hover {
      background-color: #0056b3;
    }

    .main-content {
      flex: 1;
      padding: 20px;
    }
  </style>
</head>
<body>

  <div class="container-flex">
    <!-- Sidebar -->
    <div class="sidebar">
      <h5>Admin</h5>
      <a href="dashboard.php">Dashboard</a>
      <a href="add_kategori.php">Tambah Kategori</a>
      <a href="add_berita.php">Tambah Berita</a>
    </div>

    <!-- Konten Utama -->
    <div class="main-content">
      <h4>Dashboard Admin</h4>
      <p>Selamat datang di panel admin.</p>
    </div>
  </div>

  <!-- Footer -->
  <?php include '../inc/footer.php'; ?>

  <!-- Bootstrap JS (optional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>