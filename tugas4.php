<?php

function sum($angkatan, $semester){

    $hasil = $angkatan * $semester;

if ($hasil % 3 == 0){
    echo "habis dibagi 3" ;}

else {
    echo "tidak habis dibagi 3" ;}
}

$angkatan = 2021;
$semester = 1;

sum($semester, $angkatan);
?>