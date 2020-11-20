<!DOCTYPE html>
<html>
<head>
	<title>Tugas2</title>
</head>
<body>

	<form action="" method="get">
		
		<label for="nama">Masukan Nama: </label>
		<input type="text" id="nama" name="nama" required>
		<br><br>
		<label for="warna">Masukan warna font: </label>
		<input type="text" id="warna" name="warna" placeholder="Hitam, Kuning dan Biru">
		<br><br>
		<button type="submit" name="input">Input</button>

	</form>

	<br>

    <?php 
    require_once("hargabet.php");
		if (isset($_GET["input"])) {
			hargabet($_GET["nama"],$_GET["warna"]);
		}
 ?>
</body>
</html>