<?php 

// array dimensi

// $nama = array("joni","tejo","budi","siti",100, 2.5);

// var_dump($nama);

// echo "<br>";

// echo $nama[5];

// echo "<br>";

// for ($i=0; $i < 6; $i++) { 
//     echo $i;
//     echo $nama[$i].'<br>';
// }

// foreach ($nama as $k) {
//     echo $k.'<br>';
// }

// array assosiatif

$nama = array(
    "joni" => "surabaya",
    "budi" => "malang raya",
    "tejo" => "jakarta",
    "siti" => "sidoarjo",
);

var_dump($nama);

echo "<br>";

// echo $nama['joni'];

foreach ($nama as $key => $value) {
    echo $key. " => ".$value;

    echo "<br>";
}




?>