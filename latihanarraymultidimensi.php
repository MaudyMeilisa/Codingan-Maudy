<?php
$data = [
    ['jenis' => "olahraga", 
    'cabang' => [
        ['macam' => "sepak bola",
        'artikel' =>[
            ['judul' => "sepak bola nasional"],
            ['judul' => "sepak bola internasional"]
        ]],
        ['macam' => "bulu tangkis",
        'artikel' =>[
            ['judul' => "bulu tangkis nasional"],
            ['judul' => "bulu tangkis internasional"]
        ]],
        ['macam' => "Atletik",
        'artikel' =>[
            ['judul' => "Atletik Bola nasional"],
            ['judul' => "Atletik Bola internasional"]
        ]],
    ]

   
        ],
        ['jenis' => "ekonomi", 
    'cabang' => [
        ['macam' => "Diantaranya",
        'artikel' =>[
            ['judul' => "bank"],
            ['judul' => "saham"]
        ]],
    ]
        ],

        ['jenis' => "Politik", 
    'cabang' => [
        ['macam' => "Diantaranya",
        'artikel' =>[
            ['judul' => "Hukum"],
            ['judul' => "Pemerintahan"]
        ]],
    ]
        ],
    ];
echo "Artikel : Detik.com <br>";
echo "Jenis Berita :";
 foreach($data as $data1){
     echo "<ul>";
     echo "<li>" .$data1['jenis'] ."</li>";
     

     foreach($data1['cabang'] as $data2){
        echo "<ul>";
        echo "<li>" .$data2['macam'] ."</li>";
       
   
        foreach($data2['artikel'] as $data3){
            echo "<ul>";
            echo "<li>" .$data3['judul'] ."</li>";
            echo "</ul>";
            
       
            
        }
        echo "</ul>";
    }
    echo "</ul>";
 }
?>