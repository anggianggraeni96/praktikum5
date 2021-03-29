<html>
    <head>
        <title>Konversi Tipe</title> <!--Menampilkan Judul Tab Konversi Tipe-->
    </head>
    <body>
        <?php
            $a = 300.4; //inisialisasi variable a = 300.4
            echo $a; //Print nilai a
            echo "<br>"; //ganti baris
            echo "tipe double : ", doubleval($a), "<br>"; //print : type double : (a) ganti baris
            echo "tipe integer : ", intval($a), "<br>"; //print : type integer : (a) ganti baris
            echo "tipe string : ", strval($a), "<br>"; //print : type string : (a) ganti baris
        ?>
    </body>
</html>