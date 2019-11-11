<h2>Data Pembelian</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>No Meja</th>
			<th>Tanggal Pembelian</th>
			<th>Total</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil = $koneksi->query("SELECT * FROM pembelian JOIN meja ON pembelian.id_meja=meja.id_meja"); ?>
		<?php while ($pecah=$ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php  echo $nomor; ?></td>
			<td><?php echo $pecah['no_meja']; ?></td>
			<td><?php echo $pecah['tgl_pembelian'];?></td>
			<td><?php echo $pecah['total_pembelian']; ?></td>
			<td>
				<a href="index.php?halaman=detail&id=<?php echo $pecah['id_pembelian']; ?>" class="btn btn-primary">Detail</a>
			</td>
		</tr>
		<?php $nomor++ ?>
	<?php } ?>
	</tbody>
</table>