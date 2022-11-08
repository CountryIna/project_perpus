<?php
include "navbar.php";
include "css.php";
?>

<html>
<body>
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th>NO</th>
				<th>NAMA</th>
				<th>ALAMAT</th>
				<th>TELEPON</th>
				<th>AKSI</th>
			</tr>
		</thead>

		<tbody>
			<h2><center>DATA DOSEN</center></h2>
		
			<a href="tambah_dosen.php" class="btn btn-primary mb-1">Tambah</a>

			<?php
			include "koneksi.php";

			$qry_dosen=mysqli_query($koneksi, "select * from dosen");
			$no=0;
			while ($data_dosen=mysqli_fetch_array($qry_dosen)) {
			$no++;?>
			<tr>
				<td><?=$no?></td>
				<td><?=$data_dosen['nama_dosen']?></td>
				<td><?=$data_dosen['alamat']?></td>
				<td><?=$data_dosen['telepon']?></td>

				<td><a href="edit_dosen.php?id_dosen=<?=$data_dosen['id_dosen']?>"class="btn btn-success">Edit</a> |	
				<a href="hapus_dosen.php?id_dosen=<?=$data_dosen['id_dosen']?>"onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Delete</a></td>

			</tr>
			<?php	
			}
			?>
		</tbody>
	</table>

</body>
</html>

