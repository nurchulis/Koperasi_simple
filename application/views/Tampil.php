<!DOCTYPE html>
<html>
<head>
	<title>Data Koperasi</title>
</head>
<body>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Noinduk</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Jumlah Pinjaman</th>
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
			<td><?php echo $u->ini ?></td>
			
		</tr>
		<?php } ?>
	</table>
</body>
</html>