<?php
	include'database.php';
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

	$data_elektronik = select("SELECT * FROM elektronik")
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
	<header>
		<nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
			<div class="container">
				<a class="navbar-brand" href="#">PT Mitra Alat Ternak</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" aria-current="page" href="index.php">Dashboard</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
								aria-expanded="false">
								Aset
							</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#">Elektronik</a></li>
								<li><a class="dropdown-item" href="#">Another action</a></li>
								<li><a class="dropdown-item" href="#">Something else here</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<main class="container-fluid mt-5">
		<h1>Data Elektronik</h1>
		<table class="table table-bordered table-striped table-hover mt-3">
			<thead class="text-center">
				<tr>
					<th>no</th>
					<th>no</th>
					<th>no</th>
					<th>no</th>
					<th>no</th>
					<th>no</th>
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
					<td><?= $elektronik['tanggal_diperoleh'];?></td>
					<td><?= $elektronik['keadaan_elektronik'];?></td>
					<td><?= $elektronik['harga_elektronik'];?></td>
					<td class="text-center" width="20%">
						<a href="" class="btn btn-success">Ubah</a>
						<a href="" class="btn btn-danger">Hapus</a>
					</td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</main>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
	</script>
	<!-- plugin charjs -->
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<!-- data chartjs -->
	<script>
	const ctx = document.getElementById('myChart');

	new Chart(ctx, {
		type: 'pie',
		data: {
			labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
			datasets: [{
				label: '# of Votes',
				data: [12, 19, 3, 5, 2, 3],
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				y: {
					beginAtZero: true
				}
			}
		}
	});
	</script>
</body>

</html>