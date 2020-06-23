<?php

$data = file_get_contents('coba.json');
$buku =json_decode($data, true);

var_dump($buku);
echo $buku[0]["pembimbing"]["pembimbing1"];
?>
