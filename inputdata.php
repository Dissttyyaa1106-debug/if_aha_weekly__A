<?php
   require 'fungsi.php'; 
   /// variable super global $_POST
    if(isset($_POST["kirim"]))
    {
        if(inputdata($_POST, $_FILES["foto"]) > 0) //// query ok
        {
            echo "<script>
                    alert('data berhasil ditambahkan!!');
                    window.location.href = 'mahasiswa.php';
                </script>
        }
        else
        {
            echo "<script>
                    alert('data gagal ditambahkan!!');
                    window.location.href = 'mahasiswa.php';
                </script>";
        }
    }


    ?>
            
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data mahasiswa</title>
</head>
<body>
    <h2>Tambah data mahasiswa</h2>
    <form action="mahasiswa.php" methods="post" enctype="multipart/form-data">
        <table cellpadding="5px">
            <tr>
                <td><label for="nama">Nama</label></td>
                <td>:</td>
                <td><input type="text" name="nama" id=nama></td>
            </tr>

            <tr>
                <td><label for="nim">nim</label></td>
                <td>:</td>
                <td><input type="text" name="nim" id="nim"></td>
            </tr>

            <tr>
                <td><label for="foto">foto</label></td>
                <td>:</td>
                <td><input type="file" name="foto" id="foto"></td>
            </tr>

            <tr>
                <td><label for="uts">uts</label></td>
                <td>:</td>
                <td><input type="number" name="uts" id="uts"></td>
            </tr>

            <tr>
                <td><label for="uas">uas</label></td>
                <td>:</td>
                <td><input type="number" name="uas" id="uas"></td>
            </tr>

             <tr>
                <td><label for="tugas">tugas</label></td>
                <td>:</td>
                <td><input type="number" name="tugas" id="tugas"></td>
            </tr>
            
          </table>
          <button type="submit" name="submit id=submit">Submit</button>
</body>
</html>