<?php
if (empty($_POST['nama'])){ //jika nama belum terisi
    header("Location:kosong.php"); //dialihkan ke kosong.php
} else { //jika sudah terisi
    echo "<center>Nama :".$_POST['nama']."</center><br>"; //Print : Nama : (nama dari inputan), align tengah, ganti baris
}
?>