<?php
if(empty($_POST['nama'or'email'])){ //jika nama atau email masih ada yang kosong
    header("Location:redirect.php"); //dialihkan ke redirect.php
} 
    else { //jika sudah terisi
    echo "<center>Nama :".$_POST['nama']."</center><br>"; //Print : Nama : (nama dari inputan), align tengah, ganti baris
    echo "<center>Email :".$_POST['email']."</center><br>"; //Print : Email : (email dari inputan), align tengah, ganti baris
    echo "<center>".date("d-M-Y g:i:s A")."</center>";  
    //Print tanggal : bulan dalam angka, nama bulan, tahun 4 digit, jam(1..12):menit:detik AM/PM, align tengah
}
?>