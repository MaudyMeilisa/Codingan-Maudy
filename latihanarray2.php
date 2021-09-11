<?php

$nilai=[
        ["judul" =>"Belajar PHP & MySQL untuk pemula", "penulis" => "Petanikode"],
        ["judul" =>"Tutorial PHP dari nol hingga mahir", "penulis" => "dunia ilkom"],
        ["judul" =>"Membuat aplikasi web dengan PHP", "penulis" => "jago koding"],
        ["judul" =>"Belajar android", "penulis" => "Programer"],
        ["judul" =>"Tutorial belajar mikrotik", "penulis" => "dunia cyber"],
       ];

       echo "artikel<br>";
       echo "</br>";
       echo $nilai[0]['judul']." =".$nilai[2]['penulis']."<br>";
       echo $nilai[4]['judul']. "=".$nilai[3]['penulis'];


       ?>