        <?php
        session_start();
        if (!isset($_SESSION["login"])) {
            header("Location: login.php");
            exit;
        }
        require 'functions.php';
        $id = $_GET["id"];
        $suratmsk = query("SELECT * FROM `suratmasuk` WHERE id= $id")[0];

        if (isset($_POST["submit"])) {

            if (ubah($_POST) > 0) {
                echo "
                <script> 
                alert('Data Berhasil Diubah');
                document.location.href = 'index.php';
                </script>
                ";
            } else {
                echo " <script> 
                alert('Data Gagal Diubah');
                document.location.href = 'index.php';
                </script>";
            }
        }
        ?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <title>Edit Surat Masuk</title>
            <link rel="stylesheet" href="cssindex.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        </head>

        <body style="background: #BDC2C6">
            <div class="container">
                <center>
                    <br> <br>
                    <h1>Edit Surat Masuk</h1> <br> <br>
                </center>
                <form action="" method="POST">
                    <input type="hidden" name="id" value="<?= $suratmsk["id"] ?>">
                    <ul>
                        <div class="input-group mb-3">
                            <span class="input-group-text" for="tanggal">Tanggal</span>
                            <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="tanggal" id="tanggal" value="<?= $suratmsk["tanggal"] ?>">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" for="nomor_surat">Nomor Surat</span>
                            <input type="int" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="nomor_surat" id="nomor_surat" value="<?= $suratmsk["nomor surat"] ?>">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" for="asal_surat">Asal Surat</span>
                            <input type="int" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" type="text" name="asal_surat" id="asal_surat" value="<?= $suratmsk["asal surat"] ?>">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" for="disposisi">Disposisi</span>
                            <input type="int" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="disposisi" id="disposisi" value="<?= $suratmsk["disposisi"] ?>">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" for="nama_penerima">Nama Penerima</span>
                            <input type="int" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="nama_penerima" id="nama_penerima" value="<?= $suratmsk["nama_penerima"] ?>">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" for="gambar">Gambar</span>
                            <input type="file" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="gambar" id="gambar" value="<?= $suratmsk["gambar"] ?>">
                        </div>
                        <div class="submit">
                            <button type="submit" name="submit" class="btn btn-success">Edit Surat</button>
                        </div>
            </div>
            </form>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
        </body>

        </html>