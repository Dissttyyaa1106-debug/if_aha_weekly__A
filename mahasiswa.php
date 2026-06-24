<?php
    require 'fungsi.php'; 
    $query = "SELECT * FROM mahasiswa";
    mysqli_query($koneksi, $query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>WEB INFORMATIKA A</h1>
    <hr>
    <table border="1" cellspacing="0" cellpadding="10px">
        <tr>
            <td> <a href="index.php">Home</a>
            </td>

            <td> <a href="profile.php">Profile</a>
            </td>

            <td> <a href="contact.php">Contact</a>
            </td>

            <td> <a href="mahasiswa.php">data mahasiswa</a>
            </td>
         <tr>
    <table>
        <h2>Data Mahasiswa</h2>
        <a href="inputdata.php">
            <button>Tambah data</button>
        </a>
        <table border="1" cellpadding="5px">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>No. HP</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
        <tr>
            <td align="center">1</td>
            <td>patrick plenger</td>
            <td align="center">1318242001</td>
            <td align="center">Informatika</td>
            <td align="center">patrick@gmail.com</td>
            <td align="center">08123456789</td>
            <td align="center"><img src="asset/images/patrick.jpg" width="70 px" ></td>   
            <td><a href="editdata.php"><button>EDIT</button></a> | <a href="deletedata.php"><button>DELETE</button></a></td>  
        </tr>
    <table>
</body>
</html>

    $koneksi = mysqli_connect("localhost", "root", "", "ifahaweekly");

    if($koneksi)
    {
        echo "Berhasil Konek";
    }


    $query = "SELECT * FROM mahasiswa";

    $result = mysqli_query($koneksi, $query);

    //// ambil data (fetch) mahasiswa dari lemari (result)


    // ada 4 cara 
    //-----------------------

    //// mysqli_fetch_row
    //// mysqli_fetch_assoc
    //// mysqli_fetch_object
    //// mysqli_fetch_array

    $mhs = mysqli_fetch_row($result);

    var_dump ($mhs)

?>




















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>WEB INFORMATIKA A</h1>
    <hr>
    <table border="1" cellspacing="0" cellpadding="15px">
        <tr>
            <td> <a href="index.php">Home</a>
            </td>

            <td> <a href="profile.php">Profile</a>
            </td>

            <td> <a href="contact.php">Contact</a>
            </td>

            <td> <a href="mahasiswa.php">data mahasiswa</a>
            </td>
         <tr>
    <table>
        <h2>Data Mahasiswa</h2>
        <a href="inputdata.php">
            <button>Tambah data</button>
        
        <table border="1" cellpadding="spx">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>No. HP</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
        <tr>
            <td align="center">1</td>
            <td>patrick plenger</td>
            <td align="center">1318242001</td>
            <td align="center">Informatika</td>
            <td align="center">patrick@gmail.com</td>
            <td align="center">08123456789</td>
            <td align="center"><img src="asset/images/patrick.jpg" width="70 px" ></td>   
            <td><a href="editdata.php"><button>EDIT</button></a> | <a href="deletedata.php"><button>DELETE</button></a></td>  
        </tr>

    