<?php
if(isset($_POST['simpan'])){
    $nis=$_POST['nis'];
    $nama=$_POST['nama'];
    $kelas=$_POST['kelas'];
    $indo=$_POST['indo'];
    $inggris=$_POST['inggris'];
    $mtk=$_POST['mtk'];
    $produktif=$_POST['produktif'];
    
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan</title>
</head>
<body>
    <center>
        <h2>Data Siswa Kelas XII RPL</h2>
        <table border="1">
            <tr>
                <th>Negara</th>
                <th>Positif</th>
                <th>Sembuh</th>
                <th>Meninggal</th>
                
</tr>
<?php
for($i=0;$i<count($nama); $i++){   

?>
<tr>
    <td><?php echo $negara[$i]; ?></td>
    <td><?php echo $positif[$i]; ?></td>
    <td><?php echo $kelas[$i]; ?></td>
    <td><?php echo $indo[$i]; ?></td>
    
    <?php $total =$indo[$i] +$inggris[$i] + $mtk[$i] +$produktif[$i];
    ?>
    <?php $rata=$total/4;
    if ($rata >= 90 && $rata <= 100){
    $grade = "A";
    }
    else if($rata >= 80 && $rata <= 89 ){
       $grade= " B";
        } else if($rata >= 75 && $rata <= 79){
           $grade= "C";
            } else if($rata >= 50 && $rata <= 74){
              $grade=  "D";
                } else if($rata >= 0 && $rata <= 49){
                  $grade=  "E";  
                }
    if($rata >= 75){
    $status = "Lulus";
    }  
    else{
    $status = "Tidak lulus";
    }                     
    ?>
    <td><?php echo $total;?></td>
    <td><?php echo $rata; ?></td>
    <td><?php echo $grade; ?></td>
    <td><?php echo $status;} ?></td>
</tr>
</table>
</center>
</body>
</html>