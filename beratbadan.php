<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>berat badan</title>
</head>
<body>
<h2><center>Penghitungan Berat Badan</center></h2>
	<br>
     <form method = "POST" action = " ">
		 <center>
        <table>

            <tr>
                <td>Nama Anda</td>
                <td>:</td>
                <td><input type = 'text' name = 'nama'> </td>
            </tr>   
			<tr>
                <td>Umur</td>
                <td>:</td>
                <td><input type = 'text' name = 'umur'> </td>
            </tr>   
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                    <td>
                        <label for="l">
                            <input type="radio" name="jenis" id="l" value="Laki-laki" >
                            Laki-laki
                        </label>
                        <label for="p">
                            <input type="radio" name="jenis" id="p" value="Perempuan" >
                            Perempuan
                        </label>
                    </td>
                </tr>
                        <tr>
                <td>Masukan Berat Badan</td>
                <td>:</td>
                <td><input type = 'number' name = 'berat'> </td>
            </tr>   
            <tr>
                <td>Masukan Tinggi Badan</td>
                <td>:</td>
                <td><input type = 'number' name = 'tinggi'> </td>
            </tr>   
                        
            <tr>
                <td></td>
                <td></td>
                <td><input type = "submit" name = "simpan" value = 'KIRIM'>
            </tr>   
            <tr>
                <td></td>
                <td></td>
                <td><input type = "reset" name = "reset" value = 'reset'>
            </tr>   

</table>
<table>
<td>
</body>
</html>
<?php
if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'] ;
        $umur = $_POST['umur'] ;
        $jenis = $_POST['jenis'] ;
        $berat = $_POST['berat'] ;
        $tinggi = $_POST['tinggi'] ;

        echo "<br>";
            echo " Nama Anda  :  $nama <br>";
            echo " Umur : $umur <br>";
            echo "Jenis Kelamin : $jenis<br>";
            echo "Berat Badan : $berat<br>";
            echo "Tinggi Badan : $tinggi<br>";

            $total=$berat + $tinggi;
            echo "hasil : $total<br>";

            
}
?>
