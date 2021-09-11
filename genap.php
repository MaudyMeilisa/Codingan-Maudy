<html>
<head>
        <title>Form input</title>
</head>
<body>
    <h2>Form input<h2>

    <form method = "POST" action="">
        <table>
            <tr>
                <td>Masukan angka</td>
                <td>:</td>
                <td><input type='text' name='angka'></td>
</tr>
<tr>
                <td></td>
                <td></td>
                <td> <input type="submit" name="simpan" value ='kirim'></td>
</tr>
</table>
</form>
</body>
</html>

<?php
if(isset($_POST['simpan'])){
    $angka= $_POST['angka'];
for ($x = 0; $x <= 20; $x++){
    $x %2==0;
    echo "$x <br>";
    $x++;
}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gaji</title>
</head>

<body>
    <form action="" method="post">
        <fieldset>
        <center>
            <legend>
                <h2>Program Penggajihan</h2>
                <h1>PT. GARUDA KELINCI AKUR</h1>
            </legend>

            <table>
                <tr>
                    <td>
                        <label for="bendahara">
                            Nama Bendahara
                        </label>
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <input type="text" name="bendahara" id="bendahara" required>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="pekerja">
                            Nama Pekerja
                        </label>
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <input type="text" name="pekerja" id="pekerja" required>
                    </td>
                </tr>

                <tr>
                    <td>
                         Jenis Kelamin
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <label for="l">
                            <input type="radio" name="jenis" id="l" value="Laki-laki" >
                            Laki-laki
                        </label>

                        <label for="p">
                            <input type="radio" name="jenis" id="p" value="Perempuan" >
                            Perempuan
                        </label>
                    </td>
                </tr>

                <tr>
                    <td>
                        Tanggal Gaji
                    </td>
                    <td>
                        :
                    </td>
                    <td><input type ='date' name='tanggal'></td>
                </tr>

                <tr>
                    <td>
                        Jabatan
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <select name="jabatan" required>
                            <option value="">---Pilih Jabatan---</option>
                            <option value="Direktur">Direktur</option>
                            <option value="Manager">Manager</option>
                            <option value="Karyawan">Karyawan</option>
                            <option value="OB">OB</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        Pendidikan Terakhir
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <select name="pendidikan" required>
                            <option value="">---Pendidikan Terakhir---</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="S1">S1</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="lembur">
                            Lembur
                        </label>
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <input type="text" name="lembur" id="lembur" required> Hari / Rp.20.000
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <label for="potongan">
                            Potongan
                        </label>
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <input type="text" name="potongan" id="potongan" required> 
                    </td>
                </tr>

            </table>

            <button type="submit" name="simpan">
                KIRIM
            </button>

        </fieldset>

    </form>

</center>
</body>

</html>