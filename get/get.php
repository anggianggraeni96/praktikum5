<!DOCTYPE html>
<html>
    <head>
        <title>Get</title> <!--Menampilkan Judul Tab Get-->
    </head>
    <body>
        <form method="GET" action="getAct.php"> <!--form dengan method get-->
            <table width="400" align="center" cellpadding="2" cellspacing="2"> <!--table dengan lebar 400, align tengah,-->
                <tr>
                    <td width="130">Nama</td> <!--Print : Nama-->
                    <td><input type="text" name="nama"></td> <!--Textbox input nama-->
                </tr>
                <tr>
                    <td width="130">Email</td> <!--Print : Email-->
                    <td><input type="text" name="email"></td> <!--Textbox input email-->
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="btnlogin" value="Login"> <!--Button Submit bernilai Login-->
                        <input type="reset" name="reset" value="Reset"> <!--Button Reset-->
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>