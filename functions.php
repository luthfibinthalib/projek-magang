<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "projekpupr";

$conn = mysqli_connect($servername, $username, $password, $db);



function query($query)
{
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;

    $nomorsurat = htmlspecialchars($data["nomor_surat"]);
    $tanggal = htmlspecialchars($data["tanggal"]);
    $asalsurat = htmlspecialchars($data["asal_surat"]);
    $disposisi = htmlspecialchars($data["disposisi"]);
    $namapenerima = htmlspecialchars($data["nama_penerima"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO `suratmasuk`
    VALUES
('', '$nomorsurat', ' $tanggal', '$asalsurat', '$disposisi', '$namapenerima', '$gambar')
    
        ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
function gambar($data)
{
    global $conn;

    $nama = $data["nama"];
    $ukuran = $data["ukuran"];
    $tipe = $data["tipe"];

    $query =  "INSERT INTO `gambar`
    VALUES 
    ('', '$nama', ' $ukuran', '$tipe') ";
}
function tambahkeluar($data)
{
    global $conn;

    $nomorsurat = htmlspecialchars($data["nomor_surat"]);
    $tanggal = htmlspecialchars($data["tanggal"]);
    $asalsurat = htmlspecialchars($data["asal_surat"]);
    $disposisi = htmlspecialchars($data["disposisi"]);

    $query = "INSERT INTO `suratkeluar`
    VALUES 
    ('', '$nomorsurat', ' $tanggal', '$asalsurat', '$disposisi',)
    
        ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM `suratmasuk` WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;

    $id = $data["id"];
    $nomorsurat = htmlspecialchars($data["nomor_surat"]);
    $tanggal = htmlspecialchars($data["tanggal"]);
    $asalsurat = htmlspecialchars($data["asal_surat"]);
    $disposisi = htmlspecialchars($data["disposisi"]);
    $namapenerima = htmlspecialchars($data["nama_penerima"]);
    $gambar = htmlspecialchars($data["gambar"]);


    $query = "UPDATE `suratmasuk` SET 
    `nomor surat`='$nomorsurat',
    `tanggal`='$tanggal',
    `asal surat`='$asalsurat',
    `disposisi`='$disposisi',
    `nama_penerima` = '$namapenerima',
     `gambar` = '$gambar' WHERE id = $id";

    mysqli_query($conn, $query);


    return mysqli_affected_rows($conn);
}

function registrasi($data)
{
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username sudah adakah
    $result =  mysqli_query($conn, "SELECT username FROM `users` WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script> 
       alert('username sudah ada!') 
       </script>";
        return false;
    }

    // cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
        alert('konfirmasi password tidak sesuai');
        </script>";
        return false;
    }
    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    // tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO `users`  VALUES ('', '$username',  '$password') ");
    return mysqli_affected_rows($conn);
}
