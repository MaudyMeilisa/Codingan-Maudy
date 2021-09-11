<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <form method = "POST" action="">
      <!-- navbar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Maudy</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="penggajihan.php">Penggajihan <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="vaksin.php">Vaksin<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="pengulangan.php">Pengulangan <span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
  </div>
</nav>
<!--form input-->
<form>
    <br>
    <h2><center>Syarat Masuk Ke MIKO MALL</center></h2>
    <div class ="container">
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" name='nama'>
    
  </div>
  <div class="form-group">
    <label for="umur">umur</label>
    <input type="text" class="form-control" id="umur" name='umur'>
  </div>
  <div class="form-group">
  <label for="status">status</label>
    <select class="form-control" name='status' id= "status">
      
      <option>Sudah Vaksin</option>
      <option>Belum Vaksin</option>
      
    </select>
  </div>
  <button type="submit" class="btn btn-primary" name='simpan'>simpan</button>
</div>
</form>
    <h1></h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>


<?php 
if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'] ;
        $umur = $_POST['umur'] ;
        $status = $_POST['status'] ;

        {
			echo "<br>";
            echo " Nama Anda  :  $nama <br>";
            echo " Umur : $umur <br>";
        }

        if ($umur >= 12 && $umur <=50) {
            echo "Status Vaksin : $status <br>" ;
            echo "<br>";
        if ($status == "Sudah Vaksin") {
            echo "SILAHKAN MEMASUKI MALL";
        }else if ($status == "Belum Vaksin") {
            echo "ANDA DILARANG MEMASUKI MALL!<br>";
            echo "Lakukan Vaksinasi Terlebih Dahulu";
            echo "<br>";
            ?>
            <a href = "https://pedulilindungi.id">klik pedulilindungi.id</a>
            <?php
        }else {
            echo "Isi Data!";
        }
    } else {
            echo "Status Vaksin : $status <br>" ;
            echo "<br>";
        if ($status == "Sudah Vaksin") {
            echo "ANDA DILARANG MEMASUKI MALL";
        }else if ($status == "Belum Vaksin") {
            echo "ANDA DILARANG MEMASUKI MALL!<br>";
            echo "Lakukan Vaksinasi Terlebih Dahulu";
            echo "<br>";
            ?>
            <a href = "https://pedulilindungi.id">klik pedulilindungi.id </a>
            <?php
        }else {
            echo "Isi Data!";
        }
    }
}
?>
</td>
</form>
</center>
</table>
</body>
</html>