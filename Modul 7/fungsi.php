<?php 

	$conn = mysqli_connect("localhost","root","","mahasiswa") or die ("koneksi ke database gagal");

	function tambah($data){

		global $conn;

		$nrp = $data["nrp"];
		$nama = $data["nama"];
		$foto = $data["foto"];
		$jurusan = $data["jurusan"];

		if ($data["jurusan"] == "Teknik Informatika") {

			$id_jur = "1";

			$query = "INSERT INTO mahasiswa VALUES ('$nrp','$nama','$foto','$id_jur')";

			mysqli_query($conn, $query);

			return mysqli_affected_rows($conn);
			
		}

		else if ($data["jurusan"] == "Teknik Sipil") {

			$id_jur = "2";

			$query = "INSERT INTO mahasiswa VALUES ('$nrp','$nama','$foto','$id_jur')";

			mysqli_query($conn, $query);

			return mysqli_affected_rows($conn);
			
		}

		else if ($data["jurusan"] == "Teknik Mesin") {

			$id_jur = "3";

			$query = "INSERT INTO mahasiswa VALUES ('$nrp','$nama','$foto','$id_jur')";

			mysqli_query($conn, $query);

			return mysqli_affected_rows($conn);
			
		}

		else if ($data["jurusan"] == "Arsitektur") {

			$id_jur = "4";

			$query = "INSERT INTO mahasiswa VALUES ('$nrp','$nama','$foto','$id_jur')";

			mysqli_query($conn, $query);

			return mysqli_affected_rows($conn);
			
        }
        
		else if ($data["jurusan"] == "Farmasi") {

			$id_jur = "5";

			$query = "INSERT INTO mahasiswa VALUES ('$nrp','$nama','$foto','$id_jur')";

			mysqli_query($conn, $query);

			return mysqli_affected_rows($conn);
			
		}
	}
    function hapus($data){

        global $conn;
        
        $nrp = $data["nrpdel"];
        
        mysqli_query($conn, "DELETE FROM mahasiswa WHERE NRP = $nrp");
        
        return mysqli_affected_rows($conn);
        
        }
 ?>
