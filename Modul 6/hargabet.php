
<?php
function hargabet($nama,$warna){
$countname=strlen($nama);
$sum=0;


if ($countname<=10 && $countname>=1 ) {
    for($i=1;$i<=$countname;$i++){
        $sum=$sum+300;
    }

    if ($warna=="hitam" || $warna=="Hitam") {
        echo "<font style='color: black;'> Nama: $nama <br> Harga total: $sum <br></font>";
    }

    else if ($warna=="kuning" || $warna=="Kuning") {
        echo "<font style='color: Yellow;'> Nama: $nama <br> Harga total: $sum <br></font>";
    }

    else if ($warna=="biru" || $warna=="Biru") {
        echo "<font style='color: blue;'> Nama: $nama <br> Harga total: $sum <br></font>";
    }

    else if ($warna=="") {
        echo "<font style='color: red;'> Nama: $nama <br> Harga total: $sum <br></font>";
    }

    else {
        echo "Maaf, pilihan warna yang tersedia hanya Hitam, Hijau dan Biru";
    }

}

else if ($countname>=11 && $countname<=20 ) {
    for($i=1;$i<=$countname;$i++){
        $sum=$sum+500;
    }

    if ($warna=="hitam" || $warna=="Hitam") {
        echo "<font style='color: Black;'> Nama: $nama <br> Harga total: $sum <br></font>";
    }

    else if ($warna=="kuning" || $warna=="Kuning") {
        echo "<font style='color: Yellow;'> Nama: $nama <br> Harga total: $sum <br></font>";
    }

    else if ($warna=="biru" || $warna=="Biru") {
        echo "<font style='color: Blue;'> Nama: $nama <br> Harga total: $sum <br></font>";
    }

    else if ($warna==""){
        echo "<font style='color: red;'> Nama: $nama <br> Harga total: $sum <br></font>";
    }

    else {
        echo "Maaf, pilihan warna yang tersedia hanya Yellow, Hijau dan Biru";
    }

}

else if ($countname>20) {
    for($i=1;$i<=$countname;$i++){
        $sum=$sum+700;
    }

    if ($warna=="hitam" || $warna=="Hitam") {
        echo "<font style='color: black;'> Nama: $nama <br> Harga total: $sum <br></font>";
    }

    else if ($warna=="kuning" || $warna=="Kuning") {
        echo "<font style='color: yellow;'> Nama: $nama <br> Harga total: $sum <br></font>";
    }

    else if ($warna=="biru" || $warna=="Biru") {
        echo "<font style='color: blue;'> Nama: $nama <br> Harga total: $sum <br></font>";
    }

    else if ($warna=="") {
        echo "<font style='color: red;'> Nama: $nama <br> Harga total: $sum <br></font>";
    }

    else {
        echo "Maaf, pilihan warna yang tersedia hanya Hitam, Kuning dan Biru";
    }

}
}
?>