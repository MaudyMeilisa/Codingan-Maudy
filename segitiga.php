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
$star=10;
for($a=$star; $a>0; $a--){ 
    for($i=1; $i<=$a; $i++){
        echo "&nbsp";
    }
    for($a1=$star; $a1>=$a; $a1--){
    echo"*";
    }echo"<br>";
}
}
?>

