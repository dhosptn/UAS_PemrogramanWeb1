<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Makanan Nusantara</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <style>
  .card {
    border-radius: 15px;
    border: none;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
  }

  .card-header {
    background: linear-gradient(45deg, #0d6efd, #0dcaf0);
    color: white;
    border-radius: 15px 15px 0 0 !important;
    padding: 1.5rem;
  }

  .table {
    margin-bottom: 0;
  }

  .btn-add {
    border-radius: 10px;
    padding: 0.5rem 1.5rem;
    font-weight: 500;
  }

  .action-buttons .btn {
    margin: 0 2px;
    padding: 0.4rem 1rem;
    border-radius: 8px;
  }

  .total-section {
    background-color: #f8f9fa;
    padding: 1rem;
    border-radius: 0 0 15px 15px;
  }
  </style>
</head>

<body class="bg-light">
  <div class="container py-5">
    <div class="card">
      <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
          <h3 class="mb-0"><i class="fas fa-utensils me-2"></i>Data Makanan Nusantara</h3>
          <a href="?page=makananAdd" class="btn btn-light btn-add">
            <i class="fas fa-plus me-2"></i>Tambah Data
          </a>
        </div>
      </div>

      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-hover align-middle">
            <thead class="table-light">
              <tr>
                <th class="text-center" style="width: 10%">No</th>
                <th style="width: 30%">Nama Makanan</th>
                <th style="width: 40%">Daerah Asal</th>
                <th class="text-center" style="width: 20%">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
                            include "includes/config.php";
                            $query = "SELECT * FROM tbl_makanan ORDER BY id_makanan ASC";
                            $sql = mysqli_query($conn, $query);
                            $nomor = 1;

                            if (mysqli_num_rows($sql) == 0) { ?>
              <tr>
                <td colspan="4" class="text-center py-4">
                  <i class="fas fa-inbox me-2"></i>Tidak ada data tersedia
                </td>
              </tr>
              <?php } else {
                                while ($data = mysqli_fetch_array($sql)) { ?>
              <tr>
                <td class="text-center"><?= $nomor++; ?></td>
                <td><?= htmlspecialchars($data["nama_makanan"]); ?></td>
                <td><?= htmlspecialchars($data["daerah_makanan"]); ?></td>
                <td class="text-center action-buttons">
                  <a href="?page=makananUpdate&id=<?= $data['id_makanan']; ?>" class="btn btn-warning btn-sm">
                    <i class="fas fa-edit me-1"></i>Edit
                  </a>
                  <a href="?page=makananDelete&id=<?= $data['id_makanan']; ?>"
                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');"
                    class="btn btn-danger btn-sm">
                    <i class="fas fa-trash me-1"></i>Hapus
                  </a>
                </td>
              </tr>
              <?php }
                            } ?>
            </tbody>
          </table>
        </div>
      </div>

      <div class="total-section">
        <div class="d-flex justify-content-between align-items-center px-3">
          <span class="text-muted">
            <i class="fas fa-chart-bar me-2"></i>Total Data
          </span>
          <span class="badge bg-primary rounded-pill px-3 py-2">
            <?= mysqli_num_rows($sql); ?> Data
          </span>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>