<?php
	include 'layout/header.php';

	// upload
	if (isset($_POST['tambah'])){
		if(create_elektronik($_POST)>0){
			echo "<script>
				alert('Data Elektronik Berhasil Ditambahkan');
				document.location.href = 'elektronik.php';
			</script>";
		}else{
			echo "<script>
			alert('Data Elektronik Berhasil Ditambahkan');
			document.location.href = 'elektronik.php';
		</script>";
		}
	}
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	<div
		class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Tambah Data</h1>
	</div>
	<form action="" method="post">
		<div class="mb-3">
			<label for="kode_elektronik" class="form-label">Kode Barang</label>
			<input type="text" class="form-control" id="kode_elektronik" placeholder="Kode Barang ..." name="kode_elektronik" required>
		</div>
		<div class="mb-3">
			<label for="nama_elektronik" class="form-label">Nama Elektronik</label>
			<input type="text" class="form-control" id="nama_elektronik" placeholder="Nama Elektronik ..." name="nama_elektronik" required>
		</div>
		<div class="mb-3">
			<label for="pic_elektronik" class="form-label">PIC INV</label>
			<input type="text" class="form-control" id="pic_elektronik" placeholder="PIC INV ..." name="pic_elektronik" required>
		</div>
		<div class="mb-3">
			<label for="tanggal_diperoleh" class="form-label">Tanggal Pembelian</label>
			<input type="date" class="form-control" id="tanggal_diperoleh" placeholder="Tanggal pembelian ..." name="tanggal_diperoleh" required>
		</div>
		<div class="mb-3">
			<label for="keadaan_elektronik" class="form-label">Keadaan Elektronik</label>
			<input type="text" class="form-control" id="keadaan_elektronik" placeholder="Keadaan Elektronik ..." name="keadaan_elektronik" required>
		</div>
		<div class="mb-3">
			<label for="harga_elektronik" class="form-label">Harga Elektronik</label>
			<input type="number" class="form-control" id="harga_elektronik" placeholder="Harga Elektronik ..." name="harga_elektronik" required>
		</div>

		<center>
			<button type="submit" name="tambah" class="btn btn-primary">Tambah Data Elektronik</button>
		</center>
	</form>
</main>
<?php
	include 'layout/footer.php';
?>