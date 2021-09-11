<?php

if ($_POST['jam']<=48)
{
$nama=$_POST['nama'];
$jam=$_POST['jam'];
$gaji=$jam*2000;
echo "Nama Karyawan : ".$nama."<br>";
echo "Gaji Karyawan : ".$gaji."<br>";
echo "Upah Lembur : <br>";
echo "Total Gaji : ".$gaji."<br>";
}
else if ($_POST['jam']>48)
{
$nama=$_POST['nama'];
$jam=$_POST['jam'];
$jamsisa=$jam-48;
$gaji=48*2000;
$lembur=$jamsisa*3000;
$total=$gaji+$lembur;
echo "Nama Karyawan : ".$nama."<br>";
echo "Gaji Karyawan : ".$gaji."<br>";
echo "Upah Lembur : ".$lembur."<br>";
echo "Total Gaji : ".$total."<br>";
}
?>