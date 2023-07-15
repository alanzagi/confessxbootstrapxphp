<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "confessxbootstrap";

$connect = mysqli_connect($host, $user, $pass, $db);
if (!$connect) {
  die("Tidak dapat terkoneksi ke database");
}

$error = "";
$success = "";

if (isset($_POST['kirim'])) {
  $dari = $_POST['dari'];
  $untuk = $_POST['untuk'];
  $pesan = $_POST['pesan'];

  if ($dari && $untuk && $pesan) {
    $sql1 = "INSERT INTO confess(dari,untuk,pesan) VALUES ('$dari','$untuk','$pesan')";
    $q1 = mysqli_query($connect, $sql1);
    if ($q1) {
      $success = "Berhasil menambahkan pesan";
      $dari = "";
      $untuk = "";
      $pesan = "";
    } else {
      $error = "Gagal menambahkan pesan";
    }
  } else {
    $error = "Silakan isi semua dengan lengkap";
  }
}

$sql2 = "SELECT * FROM confess ORDER BY id DESC";
$q2 = mysqli_query($connect, $sql2);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Say anything you want!</title>
  <link rel="icon" href="https://i.pinimg.com/736x/e0/d4/23/e0d423f7e1f208be0ac824977e5a04bb.jpg" type="image/x-icon">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    .table-container {
      max-height: 300px;
      overflow-y: scroll;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg z-1 fixed-top bg-body-secondary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">AxC Inc.</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" href="index.php">Home</a>
          <a class="nav-link" href="https://alanzagi.github.io/">Tentang Kami</a>
        </div>
      </div>
    </div>
  </nav>

  <div class="container-fluid position-relative overflow-hidden bg-body-secondary">
    <div class="card mt-10">
      <div class="card-header bg-secondary">
        Kirim pesanmu!
      </div>
      <div class="card-body">
        <?php if ($error) : ?>
          <div class="alert alert-danger" role="alert">
            <?= $error; ?>
          </div>
        <?php endif; ?>
        <?php if ($success) : ?>
          <div class="alert alert-success" role="alert">
            <?= $success; ?>
          </div>
        <?php endif; ?>
        <form action="" method="post">
          <div class="mb-3">
            <label for="dari" class="form-label">Dari</label>
            <input type="text" class="form-control" id="dari" name="dari" placeholder="dari siapa?" value="<?= isset($dari) ? $dari : ''; ?>">
          </div>
          <div class="mb-3">
            <label for="untuk" class="form-label">Untuk</label>
            <input type="text" class="form-control" id="untuk" name="untuk" placeholder="untuk siapa?" value="<?= isset($untuk) ? $untuk : ''; ?>">
          </div>
          <div class="mb-3">
            <label for="pesan" class="form-label">Pesan</label>
            <textarea class="form-control" id="pesan" name="pesan" placeholder="pesan kamu buat dia"><?= isset($pesan) ? $pesan : ''; ?></textarea>
          </div>
          <div class="col-12">
            <input type="submit" name="kirim" value="Simpan pesan" class="btn btn-primary">
          </div>
        </form>
      </div>
    </div>

    <div class="card mt-3">
      <div class="card-header text-white bg-secondary">
        Pesan yang dikirim orang lain
      </div>
      <div class="card-body table-container">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Dari</th>
              <th scope="col">Untuk</th>
              <th scope="col">Pesan</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $urut = 1;
            while ($r2 = mysqli_fetch_array($q2)) {
              $dari = $r2['dari'];
              $untuk = $r2['untuk'];
              $pesan = $r2['pesan'];
            ?>
              <tr>
                <th scope="row"><?= $urut++; ?></th>
                <td><?= $dari; ?></td>
                <td><?= $untuk; ?></td>
                <td><?= $pesan; ?></td>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>