<?php
	$koneksi = new mysqli("localhost", "root", "", "mahasiswa");

  			if (isset($_POST['submit'])) {
				$koneksi = new mysqli("localhost", "root", "", "mahasiswa");

				if ($koneksi) {
					$nim = $_POST['nim'];
					$nama = $_POST['nama'];
					$email = $_POST['email'];

					if (strlen($nim)==10 && is_numeric($nim)==TRUE) {
						if (strlen($nama)<=25 && is_string($nama)==TRUE) {
							if (strpos($email, '@gmail.com')==TRUE || strpos($email, '@yahoo.com')==TRUE) {
								$sql = $koneksi->query("
								INSERT INTO `mahasiswabaru` (`nim`, `nama`, `email`)
								VALUES ('$nim', '$nama', '$email')
										   ");
								echo "REGISTRASI BERHASIL<br>";
							}else{
								echo "Email Tidak Valid";
							}
						}else{
							echo "Nama tidak boleh melebihi 25 karakter dan tidak boleh bertipe angka!";
						}
					}else{
						echo "NIM harus 10 karakter dan bertipe angka!";

					}
					
				}
				else{
					echo "REGISTRASI GAGAL";
				}

  			}
  		
 ?>
