<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas PHP Lanjut</title>
</head>
<body>
    <form method="POST">
    <label>Masukkan angka</label> <br>
    <input type="text" name="n">
    <button type="submit" name="isi">CARI</button>
    </form>
<?php
    if(isset($_POST['isi'])){
        require_once("faktorial.php");
        $data = $_POST['n'];
        $hasil = faktorial($data);
        echo "Hasil dari $data! adalah $hasil";
    }
?>
</body>
</html>