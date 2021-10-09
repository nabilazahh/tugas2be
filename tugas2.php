<?php

//Nabila Nur Azizah, Sistem Informasi 2021 Back End

//nomor 1
$days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
var_dump($days);

echo "<br>";

$months = ["January","February","March","April","May","June","July","August","September","Oktober","November","December"];
var_dump($months);

//nomor 2
$jumlah = (count($months));
var_dump($jumlah);

echo "<br>";

//nomor 3
$hasil = $jumlah*18;
echo $hasil;

if ($hasil % 2 == 0){
    echo "merupakan angka genap" ;}

else {
    echo "merupakan angka ganjil" ;}