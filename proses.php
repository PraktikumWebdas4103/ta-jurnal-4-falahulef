<?php  if (isset($_POST['login'])){ $name = $_POST['username']; echo "<marquee >Selamat Datang $name </marquee><br>"; }  ?>
<form action="#" method="POST" enctype="multipart/form-data">
<table>
<tr><td><br>Pilih Hobbi Kamu :</td></tr>

<tr><td><input type="checkbox" name="hobby[]" value="Fustal">Futsal</td>

<td><input type="checkbox" name="hobby[]" value="Volley Ball">Volley Bay</td></tr>

<tr><td><input type="checkbox" name="hobby[]" value="Shopping">Shopping</td>

<td><input type="checkbox" name="hobby[]" value="Game">Game</td></tr>

<tr><td>Other : <input type="text" name="hobby[]"></td></tr>

<tr><td><br>Pilih Genre Film Kesukaan Kamu :</td></tr>

<tr><td><input type="checkbox" name="film[]" value="Horror">Horror</td>

<td><input type="checkbox" name="film[]" value="Action">Action</td></tr>

<tr><td><input type="checkbox" name="film[]" value="Anime">Anime</td>

<td><input type="checkbox" name="film[]" value="Thriller">Thriller</td></tr>

<tr><td><input type="checkbox" name="film[]" value="Animasi">Animasi</td></tr>

<tr><td><br>Pilih Tempat Wisata Tujuan Kamu :</td></tr>

<tr><td><input type="checkbox" name="wisata[]" value="Bali">Bali</td>

<td><input type="checkbox" name="wisata[]" value="Raja Ampat">Raja Ampat</td></tr>

<tr><td><input type="checkbox" name="wisata[]" value="Pulau Derawan">Pulau Derawan</td>

<td><input type="checkbox" name="wisata[]" value="Bangka Belitung">Bangka Belitung</td></tr>

<tr><td><input type="checkbox" name="wisata[]" value="Labuan Lajo">Labuan Lajo</td></tr>

<tr><td><br>Upload Foto :</td></tr>

<tr><td><input type="file" name="gambar"></td></tr>

<tr></tr><tr><td></td><td align="right"><input type="submit" name="submit" value="submit"></td></tr>

</table>
</form>
<?php  
if(isset($_POST['submit'])) {
	$gambar = $_FILES['gambar']['name'];

	echo "Hasil  -------------------------------------------------------------
	<br><br>Hobi : <br>";
	foreach ($_POST['hobby'] as $hobbie) {
		echo "- $hobbie <br>";
	}
	echo "<br>Genre Film : <br>";
	foreach ($_POST['film'] as $film) {
		echo "- $film <br>";
	}
	echo "<br>Wisata : <br>";
	foreach ($_POST['wisata'] as $wisata) {
		echo "- $wisata <br>";
	}
	if($gambar != false) {
	echo "<br>Foto Upload : <br> <img src='$gambar' alt='Your Picture' height='130' width='150'>";
	} else {
		echo "<br> Foto Upload : <br> Tidak ada Foto yang di Upload";
	}
}
?>