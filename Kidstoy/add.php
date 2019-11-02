<html>
<body>
<?php
include('config.php');


if(isset($_POST['submit']))
{

$kod_produk=($_POST['kod_produk']);
$nama_produk=($_POST['nama_produk']);
$harga=($_POST['harga']);
$kuantiti=($_POST['kuantiti']);


$insert = mysqli_query($connect, "INSERT INTO jadualmainan VALUES 
	('$kod_produk','$nama_produk','$harga','$kuantiti')");

	header("location:index.php");
}
?>


<center>
<fieldset style="width:500px;">
<h4>TAMBAH REKOD MAINAN</h4>

<form method="post" action="">
KOD PRODUK: <input type="text" name="kod_produk"><br>
NAMA PRODUK: <input type="text" name="nama_produk"><br>
HARGA : <input type="text" name="harga"><br>
KUANTITI : <input type="text" name="kuantiti"><br>
<br>
<input type="submit" name="submit">
</form>

</fieldset>
</center>
</body>
</html>