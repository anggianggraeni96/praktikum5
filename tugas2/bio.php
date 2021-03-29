<!DOCTYPE html>
<html>
    <head>
        <title>Biodata</title> <!--Menampilkan Judul Tab Biodata-->
    </head>
    <body>
        <form method="POST" action="bioAct.php" name="biodata"> <!--form dengan method post-->
            <table width="400" align="center" cellpadding="2" cellspacing="2"> <!--table dengan lebar 400, align tengah,-->
                <tr>
                    <td align="center" colspan="2">  
                        Masukan Biodata Diri Anda 
                    </td> <!--Print : Masukan Biodata Diri Anda-->
                </tr>
                <tr>
                    <td width="130">Nama</td> <!--Print : Nama-->
                    <td><input type="text" name="nama"></td> <!--Textbox input nama-->
                </tr>
                <tr>
                    <td width="130">NIM</td> <!--Print : NIM-->
                    <td><input type="text" name="nim"></td> <!--Textbox input NIM-->
                </tr>
                <tr>
                    <td width="130">Tanggal Lahir</td> <!--Print : Tanggal Lahir-->
                    <td><input type="date" name="tanggal"></td> <!--input tanggal-->
                </tr>
                <tr>
                    <td width="130">Jenis Kelamin</td> <!--Print : Jenis Kelamin-->
                    <td colspan="2"><input type="radio" name="gender" value="Laki-laki"> Laki-laki
                    <input type="radio" name="gender" value="Perempuan"> Woman</td> <!--Radio button input Jenis kelamin-->
                </tr> 
                <tr>
                    <td width="130">Alamat</td> <!--Print : Alamat-->
                    <td><textarea name="alamat" cols="30" rows="5"></textarea></td> <!--Textarea input alamat-->
                </tr>
                <tr>
                    <td width="130">Negara</td> <!--Print : Negara-->
                    <td>
                    <select name="negara">
                    <option value="Indonesia"> Indonesia </option>
                    <option value="Singapura"> Singapura </option>
                    <option value="Malaysia"> Malaysia </option>
                    <option value="Timor Leste"> Timor Leste </option>
                    </select>
                    </td> <!--Dropdown list input negara-->
                </tr>
                <tr>
                    <td width="130">Email</td> <!--Print : Email-->
                    <td><input type="text" name="email"></td> <!--Textbox input email-->
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="btnlogin" value="Submit"> <!--Button Submit bernilai Submit-->
                        <input type="reset" name="reset" value="Reset"> <!--Button Reset-->
                    </td>
                </tr>
            </table>
        </form> 
    </body>
</html> 