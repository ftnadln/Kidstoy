<!DOCTYPE html>
<html>
<head>
	<title>KIDS TOYS</title>
</head>
<body>
	<center>
		<h2>SENARAI BARANG MAINAN</h2>
<body style = "background-color:#DD73F4;">
   
		
		<table border="1" cellspacing="0" cellpadding="6">
		  <tr bgcolor="#73F49D">	

			<th>KOD PRODUK</th>
			<th>NAMA PRODUK</th>
        	<th>HARGA</th>
        	<th>KUANTITI</th> <!---salah ejaan--->
        	<th>HAPUS</th> <!---tambah hapus--->
		  </tr>

		  <?php
		  	include 'config.php'; //---> salah panggil

	$papar = mysqli_query($connect,"SELECT *from jadualmainan");
		  	while ($row=mysqli_fetch_array($papar)) {
		  		$totalRecord=mysqli_num_rows($papar);
		  		
		  echo "
		  <tr>	
			<td>".$row['kod_produk']."</td>
			<td>".$row['nama_produk']."</td>
        		<td>".$row['harga']."</td>
        		<td>".$row['kuantiti']."</td>
<td><a href='delete.php?kod_produk=".$row['kod_produk']."' onclick='myHapus()'> Hapus </a></td>
		  </tr>";
		}
		  ?>
		</table>
<p><a href="add.php">Tambah Rekod</a></p> <!---salah declare--->
<p><a href="11.php">HALAMAN UTAMA</a></p>		
	</center>

	
</body>
</html>


