    <?php
    session_start();
    if (!isset($_SESSION["login"])) {
        header("Location: login.php");
        exit;
    }
    require 'functions.php';

    if (isset($_POST["submit"])) {


        if (tambahkeluar($_POST) > 0) {
            echo "
            <script> 
            alert('Data Berhasil Ditambahkan');
            document.location.href = 'index.php';
            </script>
            ";
        } else {
            echo " <script> 
            alert('Data Gagal Ditambahkan');
            document.location.href = 'index.php';
            </script>
            ";
        }
    }

    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Tambah Surat Keluar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>

    <body style="background: #d5f0f3;">
        <center>
            <br><br>
            <h1>Tambah Surat Keluar</h1> <br> <br>
        </center>
        <div class="container">
            <form action="" method="POST">
                <div class="row">
                    <div class="input-group mb-3">
                        <span class="input-group-text" for="tanggal">Tanggal</span>
                        <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="tanggal" id="tanggal" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" for="nomor_surat">Nomor Surat</span>
                        <input type="int" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="nomor_surat" id="nomor_surat">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" for="asal_surat">Tujuan</span>
                        <input type="int" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" type="text" name="asal_surat" id="asal_surat" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" for="disposisi">Disposisi</span>
                        <input type="int" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="disposisi" id="disposisi" required>
                    </div>
                    <div class="submit">
                        <button type="submit" name="submit" class="btn btn-success">Tambah Surat</button>
                    </div>
                </div>
        </div>
        </form>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrapminjs" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
        </script>
    </body>

    </html>