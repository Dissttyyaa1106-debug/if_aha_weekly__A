<?php
   $koneksi = mysqli_connect("localhost", "root", "", "ifahaweekly");
   function tampildata($query)
   {
       global $koneksi;
       $result = mysqli_query($koneksi, $query);
       $rows = [];
       while ($row = mysqli_fetch_assoc($result)) // selama lemari masih ada isinya sesuai perintah
       {
           $rows[] = $row; //ambil datanya masukkan ke wadah
       }
       return $rows; // bawa kedepan rumah
   }

   function deletedata($id)
   {
       global $koneksi;
       mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id = $id");
       return mysqli_affected_rows($koneksi);
   }
?> 
