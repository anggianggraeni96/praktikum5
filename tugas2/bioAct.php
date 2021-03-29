<html>
    <head>
        <title>Biodata Anda</title> <!--Menampilkan Judul Tab Biodata Anda-->
    </head>
    <body>
        <h1 align="center">Biodata Anda</h1> <!--Print : Biodata Anda-->
        <?php
        if (empty($_POST['biodata'])){
        echo "<center>Nama : ".$_POST['nama']."</center><br>"; //Print : Nama : (nama dari inputan), align tengah, ganti baris
        echo "<center>NIM : ".$_POST['nim']."</center><br>"; //Print : NIM : (nim dari inputan), align tengah, ganti baris
        echo "<center>Tanggal Lahir : ".$_POST['tanggal']."</center><br>"; //Print : Tanggal Lahir : (ttl dari inputan), align tengah, ganti baris
        echo "<center>Jenis Kelamin : ".$_POST['gender']."</center><br>"; //Print : Jenis Kelamin : (dari inputan), align tengah, ganti baris
        echo "<center>Alamat : ".$_POST['alamat']."</center><br>"; //Print : Alamat : (dari inputan), align tengah, ganti baris
        echo "<center>Negara : ".$_POST['negara']."</center><br>"; //Print : Negara : (dari inputan), align tengah, ganti baris
        echo "<center>Email : ".$_POST['email']."</center><br>"; //Print : Email : (dari inputan), align tengah, ganti baris
        }
        ?>
    </body>
</html>

