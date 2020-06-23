<?php

// $buku= [
//     [
//     "judul" => "Palagan Ambarawa",
//     "pengarang" => "Rizky Setiawan",
//     "penerbit" => "Gramedia"
//     ],
//     [
//         "judul" => "Pertempuran 5 Hari di Semarang",
//         "pengarang" => "Setiawan Rizky",
//         "penerbit" => "Erlangga"
//         ]
// ];

$dbh = new PDO('mysql:host=localhost;dbname=phpmvc', 'root', '');
$db = $dbh->prepare('SELECT * FROM koleksi');
$db->execute();
$buku = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($buku);
echo $data;

?>