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
for ($a = 10; $a >= 0; $a--){
    echo " $a <br>";
}
}
?>