<!DOCTYPE html>
<html>
    <head>
        <title>Input</title> <!--Menampilkan Judul Tab Input-->
    </head>
    <body>
        <form method="POST" action="hasilkirim.php"> <!--form dengan method post-->
            <table width="200" align="center" cellpadding="2" cellspacing="2"> <!--table dengan lebar 400, align tengah,-->
                <tr>
                    <td width="120">Nama</td> <!--Print : Nama-->
                    <td><input type="text" name="nama"></td> <!--Textbox input nama-->
                </tr>
                <tr>
                    <td colspan="2" align="center"> 
                        <input type="submit" name="btnlogin" value="Kirim"> <!--Button Submit bernilai Kirim-->
                        <input type="reset" name="reset" value="Reset"> <!--Button Reset-->
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>