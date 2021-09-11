<?php
$data = [
    [
        'nama' => "palah",
        'buah' => [
            ['jenis' => "mangga"],
            ['jenis' => "apel"],
            ['jenis' => "pear"]
        ]
    ],
// [
//     'nama'=> "meylani",
//     'buah'=> "anggur"
// ]
];

foreach($data as $data2){
    echo "Nama Pemilik: " .$data2['nama']. "<br>";
    echo "Buah Kesukaan : ";
    echo "<ul>";
    foreach ($data2['buah'] as $data3){
        echo "<li> " .$data3 ['jenis']. "</li>";
    }
    echo "</ul>";
}
?>

$data = [
    [
        'judul' => "Detik.com",
        'berita' => [
            ['jenis' => 
            
            
                ['cabang' => "sepak bola"],
                ['cabang' => "bulu tangkis"],
                ['cabang' => "atletik"]
            
            
        ]
    ],
];