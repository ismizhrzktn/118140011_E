<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>
<?php 
    echo "NAMA SEBELUM DIURUTKAN :<br>lanring, aduh, difuat, toda, anevi, samid, kifuat, noob, lee, rank <br>"; 
    $nama=array("lanring", "aduh","difuat","toda","anevi","samid","kifuat","noob","lee","rank");
    sort($nama);
    echo "NAMA SETELAH DIURUTKAN : <br>";
    for($i=0;$i<10;$i++){
        echo $nama[$i]."<br>";
    }
?>
</body>
</html>
