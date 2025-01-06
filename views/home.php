<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jejak Rasa Nusantara - Kuliner Modern</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Custom Styles -->
  <style>
  :root {
    --primary-color: #34495E;
    --secondary-color: #2ECC71;
    --accent-color: #E74C3C;
    --light-color: #F7F9F9;
    --text-color: #2C3E50;
    --h1-color: #2C3E50;
  }

  body {
    font-family: 'Poppins', sans-serif;
    color: var(--text-color);
    background-color: var(--light-color);
    line-height: 1.8;
  }

  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    font-weight: 600;
    color: var(--h1-color);
  }

  /* Hero Section */
  .hero-section {
    background-image: url('assets/image/bg_body.jpg');
    background-size: cover;
    background-position: center;
    padding: 135px 0;
    position: relative;
    text-align: center;
    color: white;
  }

  .hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5);
    z-index: 1;
  }

  .hero-section .container {
    position: relative;
    z-index: 2;
  }

  .btn-primary-custom {
    background-color: var(--secondary-color);
    border: none;
    color: white;
    padding: 12px 30px;
    border-radius: 50px;
    font-weight: 600;
    text-transform: uppercase;
    transition: transform 0.3s, box-shadow 0.3s;
  }

  .btn-primary-custom:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
  }

  /* Culinary Cards */
  .culinary-card {
    border: none;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, box-shadow 0.3s;
  }

  .culinary-card:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
  }

  .culinary-card img {
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
    height: 200px;
    object-fit: cover;
  }

  .culinary-card .card-body {
    text-align: center;
  }

  /* Footer */
  footer {
    background-color: var(--primary-color);
    color: white;
    padding: 50px 0;
    text-align: center;
  }
  </style>
</head>

<body>
  <!-- Hero Section -->
  <header class="hero-section">
    <div class="container">
      <h1 class="display-4 fw-bold">Petualangan Rasa Nusantara</h1>
      <p class="lead">Menjelajahi Kelezatan Tradisional dengan Sentuhan Modern</p>
      <div class="d-flex justify-content-center gap-3">
        <a href="?page=makanan" class="btn btn-primary-custom">Jelajahi Makanan</a>
        <a href="?page=minuman" class="btn btn-light">Temukan Minuman</a>
      </div>
    </div>
  </header>

  <!-- Culinary Showcase -->
  <section class="py-5">
    <div class="container">
      <h2 class="text-center mb-5">Hidangan Pilihan Kami</h2>
      <div class="row">
        <!-- Makanan Section -->
        <div class="col-md-6 mb-4">
          <h3 class="mb-4 text-center">Makanan Tradisional</h3>
          <div class="row">
            <!-- PHP Dynamic Content Here -->
            <?php 
            $makananData = [
              ['name' => 'Rendang', 'description' => 'Daging sapi yang dimasak dengan rempah-rempah', 'image' => 'assets/image/rendang.jpeg'],
              ['name' => 'Nasi Goreng', 'description' => 'Nasi goreng klasik khas Indonesia yang sangat lezat', 'image' => 'assets/image/nasgor.jpg']
            ];
            foreach ($makananData as $food): ?>
            <div class="col-md-6 mb-3">
              <div class="card culinary-card">
                <img src="<?= $food['image'] ?>" alt="<?= $food['name'] ?>">
                <div class="card-body">
                  <h5 class="card-title"><?= $food['name'] ?></h5>
                  <p class="card-text"><?= $food['description'] ?></p>
                  <a href="#" class="btn btn-primary-custom btn-sm">Lihat Detail</a>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Minuman Section -->
        <div class="col-md-6 mb-4">
          <h3 class="mb-4 text-center">Minuman Segar</h3>
          <div class="row">
            <!-- PHP Dynamic Content Here -->
            <?php 
            $minumanData = [
              ['name' => 'Es Teh', 'description' => 'Minuman tradisional yang menyegarkan', 'image' => 'assets/image/esteh.jpg'],
              ['name' => 'Jamu', 'description' => 'Minuman herbal warisan nenek moyang', 'image' => 'assets/image/jamu.jpg']
            ];
            foreach ($minumanData as $drink): ?>
            <div class="col-md-6 mb-3">
              <div class="card culinary-card">
                <img src="<?= $drink['image'] ?>" alt="<?= $drink['name'] ?>">
                <div class="card-body">
                  <h5 class="card-title"><?= $drink['name'] ?></h5>
                  <p class="card-text"><?= $drink['description'] ?></p>
                  <a href="#" class="btn btn-primary-custom btn-sm">Lihat Detail</a>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <h4 class="mb-3">Jejak Rasa Nusantara</h4>
      <p class="mb-3">Melestarikan Kelezatan Kuliner Indonesia</p>
      <p>&copy; <?= date('Y') ?> Pemrograman Web 1. Hak Cipta Dilindungi.</p>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>