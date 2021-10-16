<html> 
    <head> 
        <title>tugas 3 back end</title> 
    </head> 
    <body> <h2>DATA NILAI</h2> 


<?php

//Nabila Nur Azizah, Sistem Informasi 2021 Back End

$nilai = array(70,81,69,77,73,86,82,72,90,80,67,92,75,87,96);
foreach ($nilai as $nil){
  if ($nil >= 80){
    echo "Nilai : ".$nil."<br> Predikat : (A) <br> Keterangan : Lulus <br><br>";
  }elseif ($nil >= 70){
    echo "Nilai : ".$nil."<br>Predikat : (B) <br> Keterangan : Lulus <br><br>";
  }elseif ($nil >= 60){
    echo "Nilai : ".$nil."<br>Predikat : (C) <br> Keterangan :  Lulus <br><br>";
  }elseif ($nil >= 50){
    echo "Nilai : ".$nil."<br> Predikat : (D) <br> Keterangan : Tidak Lulus <br><br>";
  }else {
    echo "Nilai : ".$nil."<br> Predikat : (E) <br> Keterangan : Tidak Lulus <br><br>";
  }
}

$total = array_sum($nilai);
$total = $total/count($nilai);
echo "Nilai Akhir : ".round($total,2)."<br>";

$ip = $total/25;
echo "Indeks Prestasi : ".round($ip,2)."<br>";

if ($total >= 80){
    echo "A, Excellent Performance";
  }elseif ($total >= 70){
    echo "B, Good Performance";
  }elseif ($total >= 60){
    echo "C, Satisfactory Performance";
  }elseif ($total >= 50){
    echo "D, Less Than Satisfactory Performance";
  }else {
    echo "E, Unsatisfactory Performance";
  }
?>
</body> 
</html>