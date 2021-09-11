<?php

//file json yang yang akan dibaca
$file = "latihan.json";

//mendapatkan file json
$anggota= file_get_contents($file);

//mendecode anggota json
$data =json_decode($anggota,true);

//membaca/menampilkan data array menggunakan  foreach
foreach ($data as $d){
    echo "Nama : ".$d['nama'] . "<br>";
    echo "Domisili :".$d['alamat'] . "<br>";
    echo "Hobi:";
    echo "<ul>";
    echo "<li>";
    echo implode("<li>",$d ['hobi'])."</li><br>" ;
    echo "</li>";
    echo "</ul>";
    
}
?>