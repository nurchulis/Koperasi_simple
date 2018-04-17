<!DOCTYPE html>
<html>
<head>
	<title>Data Koperasi</title>
</head>
<body>
	<center>
	<h1>Tampil Anggota</h1></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Noinduk</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
		</tr>
		<?php 
		$no = 1;
		foreach($hasil as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->Noinduk ?></td>
			<td><?php echo $u->Nama ?></td>
			<td><?php echo $u->JK ?></td>
			
		</tr>
		<?php } ?>
	</table>
<center>
		<a href="./Anggota">Daftar Anggota</a>||
		<a href="./Tampil">Tampil Pinjaman</a>||
		<a href="./Angsuran">Tampil Angsuran</a>||
		<a href="./Simpanan">Tampil Simpanan</a>||
		<a href="./Neraca">Tampil Neraca</a>
	</center>
	
</body>
</html>