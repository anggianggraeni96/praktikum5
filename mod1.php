<html>
    <head>
        <title>Variable</title> <!--Menampilkan Judul Tab Variable-->
    </head>
    <body>
        <?php
            $nilai_1 = 10; //inisialisasi nilai1 = 10
            $nilai_2 = 3; //inisialisasi nilai2 = 3
            $nilai_3 = 2 * $nilai_1 + 8 * $nilai_2; //inisialisasi nilai3 = 2*nilai1 + 8*nilai2
            echo "nilai = ", $nilai_3; //print : nilai = (nilai3)
            echo "<br>"; //Ganti baris
            $jumlah =$nilai_1 + $nilai_2; //inisialisasi jumlah = nila1+nilai2
            echo "hasil dari $nilai_1 + $nilai_2 : $jumlah"; echo "<br><br>"; //print : hasil dari (nila1) + (nilai2) : (jumlah)
            echo "\"Nama : Anggi Anggraeni Nugraha\" <br>"; //Print : "Nama : Anggi Anggraeni Nugraha" ganti baris
            echo "NPM : 19082010028"; //Print : NPM : 19082010028
        ?>
    </body>
</html>