<?php
include "inc.php"; //eksekusi file inc.php
echo $angka; //Print nilai angka
echo "<br>"; //ganti baris
if ($angka==100){ //jika nilai angka = 100
    echo "Memuaskan"; //print : Memuaskan
} elseif ($angka<100&&$angka>=85){ //jika nilai 85<=angka<100
    echo "Sangat Baik"; //print : Sangat Baik
} elseif ($angka<85&&$angka>=70){ //jika nilai 70<=angka<85
    echo "Baik"; //print : Baik
} elseif ($angka<70&&$angka>=55){ //jika nilai 55<=angka<70
    echo "Cukup"; //print : Cukup
} elseif ($angka<55&&$angka>=0){ //jika nilai 0<=angka<55
    echo "Kurang"; //print : Kurang
}
?>