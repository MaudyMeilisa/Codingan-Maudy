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
   <center> <h2>PENGGAJIHAN PT.KELINCI AKUR</h2></center>
    <div class ="container">
  <div class="form-group">
    <label for="bendahara">Nama Bendahara</label>
    <input type="text" class="form-control" id="bendahara" name='bendahara'>
  </div>
  <div class="form-group">
    <label for="pekerja">Nama Pekerja</label>
    <input type="name" class="form-control"name='pekerja' id="pekerja">
  </div>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="jenis" id="exampleRadios1" value="laki laki" checked>
  <label class="form-check-label" >Laki-Laki
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="jenis" id="exampleRadios2" value="perempuan">
  <label class="form-check-label">
    Perempuan
  </label>
</div>
  <div class="form-group">
    <label for="tanggal">tanggal</label>
    <input type="date" class="form-control"name='tanggal' id="tanggal">
  </div>
  <div class="form-group">
  <label for="jabatan">Jabatan</label>
    <select class="form-control" name='jabatan' id="jabatan">
      <option>Direktur</option>
      <option>Manager</option>
      <option>Karyawan</option>
      <option>OB</option>
    </select>
  </div>
  <div class="form-group">
  <label for="pendidikan">Pendidikan</label>
    <select class="form-control" name='pendidikan' id= "pendidikan">
      <option>SD</option>
      <option>SMP</option>
      <option>SMK</option>
      <option>S1</option>
    </select>
  </div>
  
  <div class="form-group">
    <label for="lembur">Lembur</label>
    <input type="text" class="form-control" name='lembur' id="lembur">Hari/Rp.20.000
  </div>
  <div class="form-group">
    <label for="potongan">Potongan</label>
    <input type="text" class="form-control" name='potongan' id="potongan">
  </div>
  <button type="submit" class="btn btn-primary" name='kirim'>kirim</button>
</div>
</form>
  </body>
</html>

<?php

if(isset($_POST['kirim'])){
$bendahara = $_POST['bendahara'];
$pekerja = $_POST['pekerja'];
$lembur = $_POST['lembur'];
$tanggal =$_POST['tanggal'];
$jenis = $_POST['jenis'];
$potongan = $_POST['potongan'];
$pendidikan = $_POST['pendidikan'];
$jabatan =$_POST['jabatan'];
 echo "<center>";
 echo "<table>";
 echo "<tr>";
 echo "<td></td>";
 echo "<td></td>";
 echo "<td></td>";
 
    echo "<b>Struk Gaji Karyawan</b><br>";
    echo "-------------------------------------------------------<br>";
    echo "<td>Tanggal :<b><i>$tanggal</td></i></b><br><br>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><b>Gaji Pokok<br></b><br></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Nama Karyawan  :$pekerja<br></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Jenis Kelamin : $jenis<br></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Pendidikan Terakhir : $pendidikan<br></td>";
    echo "</tr>";
    
    if($jabatan == "Direktur"){
    $gaji = 10000000;
    echo "<tr>";
    echo "<td>jabatan : $jabatan<br></td>";echo "</tr>";
     echo "<tr>";
    echo "<td>gaji : Rp.$gaji<br></td>";
    echo "</tr>";
}

else if($jabatan == "Manager"){
    $gaji = 7500000;
  
    echo "<tr>";
    echo "<td>jabatan : $jabatan<br></td>";echo "</tr>";
     echo "<tr>";
    echo "<td>gaji : Rp.$gaji<br></td>";
    echo "</tr>";
    
    
}
else if($jabatan == "Karyawan"){
    $gaji = 5000000;
    
    echo "<tr>";
    echo "<td>jabatan : $jabatan<br></td>";echo "</tr>";
     echo "<tr>";
    echo "<td>gaji : Rp.$gaji<br></td>";
    echo "</tr>";
    
}
else if($jabatan == "OB"){
    $gaji = 2500000;
    
    echo "<tr>";
    echo "<td>jabatan : $jabatan<br></td>";echo "</tr>";
     echo "<tr>";
    echo "<td>gaji : Rp.$gaji<br></td>";
    echo "</tr>";
    
}else {
    
    echo "ERROR";
    
}
echo "<tr>";
    echo "<td><b><i>Tunjangan <br></b></i><br></td>";
    echo "</tr>";
    if($pendidikan == "SD"){
        $tunjangan = 250000;
        echo "<tr>";
        echo "<td>Tunjangan Pendidikan : Rp.$tunjangan</td><br>";
        echo "</tr>";
    }
    else if($pendidikan == "SMP"){
        $tunjangan = 500000;
        echo "<tr>";
        echo "<td>Tunjangan Pendidikan : Rp.$tunjangan</td><br>";
        echo "</tr>";
    }
    else if($pendidikan == "SMK"){
        $tunjangan = 1000000;
        echo "<tr>";
        echo "<td>Tunjangan Pendidikan : Rp.$tunjangan<br></td>";
        echo "</tr>";
    }
    else if($pendidikan == "S1"){
        $tunjangan = 1500000;
        echo "<tr>";
        echo "Tunjangan Pendidikan : Rp.$tunjangan<br>";
        echo "</tr>";
    } 
    
    $vakasi = $lembur * 20000;
    echo "<tr>";
    echo "<td>Vakasi Lembur : Rp.$vakasi<br><br></td>";echo "</tr>";
    echo "<td><b><i>Potongan</b></i><br><br></td>";
    echo "</tr>";

$potongan=1000000;
    echo "<tr>";
    echo "<td>Potongan: $potongan</td>";
    echo "</tr>";
    
    $total = $gaji+$tunjangan+$vakasi-$potongan;
    echo "<tr>";
    echo "<td><b>Total Gaji : Rp.$total</b><br><br></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
   echo "<td>Bendahara :<b>$bendahara</b><br></td>";echo "</tr>";
   
   echo "</table>";
   echo "</center>";
  
   
}
?>