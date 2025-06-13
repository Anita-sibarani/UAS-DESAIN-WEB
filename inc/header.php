<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WartaNet</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="d-flex flex-column min-vh-100">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="index.php">
        <i class="bi bi-envelope-paper-fill"></i> Flash News
      </a>

      <!-- Menu HOME dengan ikon -->
      <ul class="navbar-nav ms-3">
        <li class="nav-item">
          <a class="nav-link active d-flex align-items-center" href="index.php">
            <i class="bi bi-house-door-fill me-1"></i> Home
          </a>
        </li>
      </ul>

      <form class="d-flex ms-auto" action="search.php" method="GET">
        <input class="form-control me-2" type="search" placeholder="Cari berita..." name="q">
        <button class="btn btn-light" type="submit">🔍</button>
      </form>
    </div>
  </nav>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
