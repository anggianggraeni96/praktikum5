<html>
    <head>
        <title>Pemrograman PHP dengan Array</title> <!--Menampilkan Judul Tab Pemrograman PHP dengan Array-->
    </head>
    <body>
        <?php
        //penulisan array dapat dibuat seperti berikut
        $nama[] = "Agung Teguh"; //inisialisasi array indeks 0 = Agung Teguh
        $nama[] = "Wibowo"; //inisialisasi array indeks 1 = Wibowo
        $nama[] = "Almais"; //inisialisasi array indeks 2 = Almais
        echo $nama[1] . $nama[2] . $nama[0]; //Print nilai array sesuai indeks 1,2,0
        echo "<br>"; //Ganti baris
        //menghitung jumlah elemen array
        $jum_array = count($nama); //inisialisasi jum_array = banyaknya nilai pada array nama
        echo "Jumlah elemen array = ".$jum_array; //Print : Jumlah elemen array = (jum_array)
        ?>
    </body>
</html>