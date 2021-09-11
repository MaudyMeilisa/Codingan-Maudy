 <?php
//   $mahasiswa = [
//   'nama' => 'Nurul Huda',
//   'domisili' => 'Surabaya'
// ];

// echo json_encode($mahasiswa);


// $nilaiUjian = [70, 80, 50, 90];

// echo json_encode($nilaiUjian);
// 

$listMahasiswaJSON = '[
  { "nama": "Nurul Huda" },
  { "nama": "Renza Ilhami Risqi" },
  { "nama": "Taufan Aji" },
  { "nama": "Rahmad Dwi Oktanto" }
]';

$list = json_decode($listMahasiswaJSON);

foreach($list as $key =>$mahasiswa){
echo "Nama ke- ($key): {$mahasiswa -> nama} <br>";
}
?>