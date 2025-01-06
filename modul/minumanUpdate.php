<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Data minuman</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <style>
  .card {
    border-radius: 15px;
    border: none;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
  }

  .card-header {
    background: linear-gradient(45deg, #fd7e14, #ffc107);
    color: white;
    border-radius: 15px 15px 0 0 !important;
    padding: 1.5rem;
  }

  .form-control {
    border-radius: 8px;
    padding: 0.75rem 1rem;
    border: 1px solid #dee2e6;
  }

  .form-control:focus {
    border-color: #fd7e14;
    box-shadow: 0 0 0 0.25rem rgba(253, 126, 20, 0.25);
  }

  .btn {
    padding: 0.5rem 1.5rem;
    border-radius: 8px;
    font-weight: 500;
  }

  .form-label {
    font-weight: 500;
    color: #495057;
  }
  </style>
</head>

<body class="bg-light">
  <?php
    require "includes/config.php";
    $id = $_GET['id'];
    $query = "SELECT * FROM tbl_minuman WHERE id_minuman=$id";
    $sql = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($sql);
    
    if (mysqli_num_rows($sql) < 1) {
        echo '<div class="container py-5">
                <div class="alert alert-danger" role="alert">
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    Data tidak ditemukan!
                </div>
              </div>';
        exit;
    }
    ?>

  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h4 class="mb-0">
              <i class="fas fa-edit me-2"></i>
              Update Data Minuman
            </h4>
          </div>

          <div class="card-body p-4">
            <form method="post" action="?page=minumanUpdateProses" class="needs-validation" novalidate>
              <input type="hidden" name="id" value="<?= htmlspecialchars($data['id_minuman']) ?>">

              <div class="mb-4">
                <label for="nama_minuman" class="form-label">
                  <i class="fas fa-coffee me-2"></i>Nama Minuman
                </label>
                <input type="text" class="form-control" id="nama_minuman" name="nama_minuman"
                  value="<?= htmlspecialchars($data['nama_minuman']) ?>" required>
                <div class="invalid-feedback">
                  Mohon isi nama Minuman
                </div>
              </div>

              <div class="mb-4">
                <label for="daerah_minuman" class="form-label">
                  <i class="fas fa-map-marker-alt me-2"></i>Daerah Asal
                </label>
                <input type="text" class="form-control" id="daerah_minuman" name="daerah_minuman"
                  value="<?= htmlspecialchars($data['daerah_minuman']) ?>" required>
                <div class="invalid-feedback">
                  Mohon isi daerah asal Minuman
                </div>
              </div>

              <div class="d-flex gap-2 mt-5">
                <button type="submit" name="update" class="btn btn-warning">
                  <i class="fas fa-save me-2"></i>Update
                </button>
                <a href="?page=minuman" class="btn btn-light">
                  <i class="fas fa-times me-2"></i>Batal
                </a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
  // Form validation
  (function() {
    'use strict'
    var forms = document.querySelectorAll('.needs-validation')
    Array.prototype.slice.call(forms).forEach(function(form) {
      form.addEventListener('submit', function(event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
        form.classList.add('was-validated')
      }, false)
    })
  })()
  </script>
</body>

</html>