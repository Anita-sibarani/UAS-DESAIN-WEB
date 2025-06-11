<?php include '../inc/header.php'; ?>
<style>
  .sidebar {
    width: 200px;
    height: 100vh;
    position: fixed;
    top: 0;
    left: 0;
    background-color: #007bff;
    padding-top: 60px;
    color: white;
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
    margin-left: 200px;
    padding: 20px;
  }
</style>
<div class="sidebar">
  <h5 class="text-center">Admin</h5>
  <a href="dashboard.php">Dashboard</a>
  <a href="add_kategori.php">Tambah Kategori</a>
  <a href="add_berita.php">Tambah Berita</a>
</div>
<div class="main-content">
  <h4>Dashboard Admin</h4>
  <p>Selamat datang di panel admin.</p>
</div>
<footer class="text-white py-3" style="background-color: #007bff; position: fixed; bottom: 0; width: 100%;">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h5>About Us</h5>
        <p style="font-size: 0.9rem;">Kami menyajikan berita dan informasi terkini dari berbagai sektor, didedikasikan untuk memberikan liputan yang akurat, relevan, dan terpercaya bagi pembaca setia kami.</p>
      </div>
      <div class="col-md-4">
        <h5>Quick Links</h5>
        <ul class="list-unstyled" style="column-count: 2;">
          <li><a href="#" class="text-white" style="text-decoration: none; font-size: 0.9rem;">Politik</a></li>
          <li><a href="#" class="text-white" style="text-decoration: none; font-size: 0.9rem;">Ekonomi</a></li>
          <li><a href="#" class="text-white" style="text-decoration: none; font-size: 0.9rem;">Olahraga</a></li>
          <li><a href="#" class="text-white" style="text-decoration: none; font-size: 0.9rem;">Teknologi</a></li>
          <li><a href="#" class="text-white" style="text-decoration: none; font-size: 0.9rem;">Hiburan</a></li>
          <li><a href="#" class="text-white" style="text-decoration: none; font-size: 0.9rem;">Pendidikan</a></li>
          <li><a href="#" class="text-white" style="text-decoration: none; font-size: 0.9rem;">Selebritis</a></li>
          <li><a href="#" class="text-white" style="text-decoration: none; font-size: 0.9rem;">Kuliner</a></li>
          <li><a href="#" class="text-white" style="text-decoration: none; font-size: 0.9rem;">Seni&Budaya</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h5>Contact Us</h5>
        <p style="font-size: 0.9rem;">
          <i class="bi bi-envelope"></i> support@angelsibarani123456<br>
          <i class="bi bi-telephone"></i> +858 4721 991
        </p>
      </div>
    </div>
    <hr style="background-color: rgba(255,255,255,0.1);">
    <div class="row">
      <div class="col-md-6 text-center text-md-start">
        <p style="font-size: 0.8rem; margin: 0;">&copy; 2025 Angelzz. All rights reserved.</p>
      </div>
      <div class="col-md-6 text-center text-md-end">
        <a href="#" class="text-white me-2"><i class="bi bi-facebook"></i></a>
        <a href="#" class="text-white me-2"><i class="bi bi-twitter"></i></a>
        <a href="#" class="text-white me-2"><i class="bi bi-linkedin"></i></a>
        <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
      </div>
    </div>
  </div>
</footer>