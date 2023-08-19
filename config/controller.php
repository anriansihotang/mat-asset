<?php
	// Fungsi Menampilkan
	function select($query)
	{
		// panggil koneksi data
		global $db;
		
		$result = mysqli_query($db, $query);
		$rows = [];

		while ($row = mysqli_fetch_assoc($result)){
			$rows[] = $row;
		}
		return $rows;
	}


	// Fungsi menambahkan data elektronik
	function create_elektronik($post){
		global $db;

		$kode_elektronik = $post['kode_elektronik'];
		$nama_elektronik = $post['nama_elektronik'];
		$pic_elektronik = $post['pic_elektronik'];
		$tanggal_diperoleh = $post['tanggal_diperoleh'];
		$keadaan_elektronik = $post['keadaan_elektronik'];
		$harga_elektronik = $post['harga_elektronik'];

		//query tambah data
		$query = "INSERT INTO elektronik VALUES(null,'$kode_elektronik','$nama_elektronik','$pic_elektronik','$tanggal_diperoleh','$keadaan_elektronik','$harga_elektronik')";
		
		mysqli_query($db,$query);

		return mysqli_affected_rows($db);
	}
?>