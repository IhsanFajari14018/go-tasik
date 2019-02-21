<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//TUTORIAL 5
?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Data Mahasiswa</title>
  </head>

  <body>
    <table border="6" style="width: 50%;">
      <tr>
          <th>No Induk</th>
          <th>Nama</th>
          <th>Alamat</th>
      </tr>
      <?php foreach($data as $d){
        $nim = $d['nim'];
        $nama = $d['nama'];
        $alamat = $d['alamat'];
      ?>
        <tr>
            <td> <?php echo $nim; ?> </td>
            <td> <?php echo $nama; ?> </td>
            <td> <?php echo $alamat; ?> </td>
        </tr>
      <?php
      }
      ?>

    </table>
  </body>
</html>
