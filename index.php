  <?php
  session_start();
  if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
  }
  require 'functions.php';
  $suratmasuk = query("SELECT * FROM `suratmasuk`")
  ?>

  <!doctype html>
  <html>

  <head>
    <title>Disposisi Surat</title>
    <link rel="stylesheet" type="text/css" href="cssindex.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="./fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.css">
  </head>

  <body>
    <div class=" nav">
      <input type="checkbox" id="nav-check">
      <div class="nav-header">
        <div class="nav-title">
          POLDA KALSEL
        </div>
      </div>
      <div class="nav-btn">
        <label for="nav-check">
          <span></span>
          <span></span>
          <span></span>
        </label>
      </div>
      <div class="nav-links">
        <ul>
          <li><i a href="#" target="_blank" class="fas fa-home"> Home</i></li>
          <li><i a href="#" target="_blank" class="fas fa-address-card"> About</i></li>
          <li><i a href="#" target="_blank" class="fas fa-cog"> Services</i></li>
          <i button onclick="myFunction()" class="fas fa-moon"></i>
          <a href="logout.php" class="btn btn-light">Logout</a>
          <a href="registrasi.php" class="btn btn-success">Tambah user </a>
        </ul>
      </div>
    </div>

    <center>
      <h2 class="display-3" id="judul-h1">Sistem Perekapan Disposisi Surat Masuk</h2>
    </center> <br>
    <a href="suratkeluar.php" class="btn btn-warning">Surat keluar</a>
    <a href="tambah_surat.php" class="btn btn-info">Tambah surat</a> <br> <br>

    <div class="container">
      <table class="table" cellpadding="20px">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Aksi</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Nomor Surat</th>
            <th scope="col">Asal Surat</th>
            <th scope="col">Disposisi</th>
          </tr>

          <?php $i = 1; ?>
          <?php foreach ($suratmasuk as $row) : ?>
            <tr>
              <td><?= $i; ?> </td>
              <td>
                <a href="ubah.php?id=<?= $row["id"]; ?>" class="btn btn-primary">Edit</a>
                <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin?');" class="btn btn-danger">Hapus</a>
              </td>
              <td><?= $row["tanggal"]; ?></td>
              <td><?= $row["nomor surat"]; ?></td>
              <td><?= $row["asal surat"]; ?></td>
              <td><?= $row["disposisi"]; ?></td>
            </tr>
            <?php $i++ ?>
          <?php endforeach; ?>
        </thead>
      </table>
    </div>
    <script src="js/script.js"></script>
  </body>