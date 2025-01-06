<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jejak Rasa - Modern Navbar</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

  <!-- Custom Styles -->
  <style>
  :root {
    --primary-color: #2C3E50;
    --secondary-color: #34495E;
    --accent-color: #3498DB;
    --text-color: #2C3E50;
    --background-color: #ECF0F1;
  }

  * {
    transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
  }

  body {
    font-family: 'Inter', sans-serif;
    background-color: var(--background-color);
    color: var(--text-color);
  }

  .navbar-container {
    max-width: 600px;
    margin: 30px auto;
    padding: 3px 20px;
    border-radius: 20px;
    background-color: white;
    box-shadow:
      0 10px 25px rgba(0, 0, 0, 0.08),
      0 5px 15px rgba(0, 0, 0, 0.05);
    backdrop-filter: blur(15px);
  }

  .navbar {
    padding: 10px 0;
  }

  .navbar-nav {
    align-items: center;
  }

  .nav-item {
    position: relative;
    margin: 0 10px;
  }

  .nav-link {
    color: var(--secondary-color);
    font-weight: 500;
    font-size: 0.95rem;
    letter-spacing: 0.5px;
    position: relative;
    overflow: hidden;
    padding: 8px 15px;
    border-radius: 10px;
  }

  .nav-link::before {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 2px;
    background-color: var(--accent-color);
    transform: scaleX(0);
    transform-origin: right;
    transition: transform 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
  }

  .nav-link:hover {
    color: var(--accent-color);
  }

  .nav-link:hover::before {
    transform: scaleX(1);
    transform-origin: left;
  }

  .navbar-toggler {
    border: none;
    outline: none;
    box-shadow: none;
  }

  .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30' width='30' height='30' focusable='false'%3E%3Cpath stroke='%233498DB' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
  }

  @media (max-width: 991px) {
    .navbar-container {
      max-width: 95%;
      margin: 15px auto;
    }

    .nav-link {
      text-align: center;
      padding: 10px 0;
    }

    .navbar-nav {
      align-items: stretch;
    }
  }
  </style>
</head>

<body>
  <div class="navbar-container">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="?page=home">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=makanan">Makanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=minuman">Minuman</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=about">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=contact">Kontak</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <!-- Bootstrap Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>