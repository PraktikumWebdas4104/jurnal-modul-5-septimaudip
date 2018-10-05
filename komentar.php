<h1>APLIKASI MENGHITUNG JUMLAH KATA</h1>
<form method="POST">
	KOMENTAR : <br> <textarea name="komentar"></textarea><br><br>
	<input type="submit" name="submit" value="submit">
</form>

<?php 
	if (isset($_POST['submit'])) {
		$komentar=$_POST['komentar'];
		if (str_word_count($komentar)>=5) {
			echo "$komentar";
		}else{
			echo "Komentar harus lebih dari 5 kata!";
		}
		
	}



 ?>
