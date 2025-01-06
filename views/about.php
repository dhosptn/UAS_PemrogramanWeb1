<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - Culinary Journey</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <style>
  .hero-section {
    background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
      url('https://source.unsplash.com/1600x900/?restaurant,food') no-repeat center center;
    background-size: cover;
    height: 60vh;
    display: flex;
    align-items: center;
    color: white;
  }

  .feature-icon {
    font-size: 2.5rem;
    color: #ff6b6b;
    margin-bottom: 1rem;
  }

  .team-member img {
    width: 150px;
    height: 150px;
    object-fit: cover;
    border-radius: 50%;
    margin-bottom: 1rem;
  }

  .stats-section {
    background-color: #ff6b6b;
    color: white;
  }

  .testimonial-card {
    background-color: #f8f9fa;
    border-radius: 15px;
    padding: 2rem;
  }
  </style>
</head>

<body>
  <!-- Hero Section -->
  <section class="hero-section text-center">
    <div class="container">
      <h1 class="display-3 fw-bold mb-4">Temukan Jejak Rasa Nusantara</h1>
      <p class="lead mb-4">Menghadirkan pengalaman kuliner autentik dengan sentuhan modern</p>
    </div>
  </section>

  <!-- About Section -->
  <section class="py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <h2 class="fw-bold mb-4">Tentang Kami</h2>
          <p class="lead">Kami adalah platform kuliner yang menghubungkan pencinta makanan dengan berbagai hidangan
            autentik dari seluruh Indonesia.</p>
          <p>Didirikan pada tahun 2024, kami berkomitmen untuk:</p>
          <ul class="list-unstyled">
            <li><i class="fas fa-check text-success me-2"></i>Melestarikan warisan kuliner Indonesia</li>
            <li><i class="fas fa-check text-success me-2"></i>Mendukung UMKM kuliner lokal</li>
            <li><i class="fas fa-check text-success me-2"></i>Menghadirkan inovasi dalam penyajian</li>
          </ul>
        </div>
        <div class="col-lg-6">
          <img src="assets/image/restoran.jpg" alt="Kuliner Indonesia" class="img-fluid rounded-3 shadow">
        </div>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section class="bg-light py-5">
    <div class="container">
      <h2 class="text-center fw-bold mb-5">Keunggulan Kami</h2>
      <div class="row g-4">
        <div class="col-md-4 text-center">
          <i class="fas fa-utensils feature-icon"></i>
          <h4 class="mb-3">Kualitas Premium</h4>
          <p>Menghadirkan bahan-bahan berkualitas tinggi untuk setiap hidangan</p>
        </div>
        <div class="col-md-4 text-center">
          <i class="fas fa-medal feature-icon"></i>
          <h4 class="mb-3">Chef Berpengalaman</h4>
          <p>Dipandu oleh chef profesional dengan pengalaman internasional</p>
        </div>
        <div class="col-md-4 text-center">
          <i class="fas fa-heart feature-icon"></i>
          <h4 class="mb-3">Pelayanan Terbaik</h4>
          <p>Mengutamakan kepuasan pelanggan dalam setiap layanan</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Stats Section -->
  <section class="stats-section py-5">
    <div class="container">
      <div class="row text-center g-4">
        <div class="col-md-3">
          <h2 class="fw-bold">1000+</h2>
          <p>Resep Makanan</p>
        </div>
        <div class="col-md-3">
          <h2 class="fw-bold">50+</h2>
          <p>Chef Profesional</p>
        </div>
        <div class="col-md-3">
          <h2 class="fw-bold">100+</h2>
          <p>Cabang Restoran</p>
        </div>
        <div class="col-md-3">
          <h2 class="fw-bold">10K+</h2>
          <p>Pelanggan Puas</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Bootstrap 5 JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>