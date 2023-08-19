<?php
	include 'layout/header.php';
	$data_elektronik = select("SELECT * FROM elektronik");
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	<div
		class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Data Elektronik</h1>
	</div>
	<div class="table-responsive small">
		<a href="form-tambah.php" class="btn btn-primary">Tambah Data</a>
		<table class="table table-bordered table-striped table-hover mt-3">
			<thead class="text-center">
				<tr>
					<th>No</th>
					<th>Kode</th>
					<th>Nama Barang</th>
					<th>PIC INV</th>
					<th>Tanggal Diperoleh</th>
					<th>Status</th>
					<th>harga</th>
					<th>fitur</th>
				</tr>
			</thead>
			<tbody class="text-center">
				<?php $no = 1; ?>
				<?php foreach($data_elektronik as $elektronik):?>
				<tr>
					<td><?= $no++; ?></td>
					<td><?= $elektronik['kode_elektronik']; ?></td>
					<td><?= $elektronik['nama_elektronik']; ?></td>
					<td><?= $elektronik['pic_elektronik']; ?></td>
					<td><?= date('d/m/Y	' ,strtotime($elektronik['tanggal_diperoleh']));?></td>
					<td><?= $elektronik['keadaan_elektronik'];?></td>
					<td>Rp. <?= number_format($elektronik['harga_elektronik'],0,',','.');?></td>
					<td class="text-center" width="20%">
						<a href="" class="btn btn-success">Ubah</a>
						<a href="" class="btn btn-danger">Hapus</a>
					</td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</main>
<?php
	include 'layout/footer.php';
?>