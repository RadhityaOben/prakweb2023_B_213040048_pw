<?php
include "db/function.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Buku</title>
	<link rel="icon" href="assets/icon/favicon.ico" type="image/x-icon">

</head>

<body>
	<div class="container-xl border my-5">
		<h3 class="text-center py-3">Daftar Buku</h3>
		<div class="py-5 px-3" id="content">
			<table class="table table-striped border" id="itemTable" cellspacing="0" width="100%">

				<!-- Table Header -->
				<thead>
					<tr>
						<td class="col-1">No</td>
						<td class="col-1">Gambar</td>
						<td class="col-6">Judul Buku</td>
						<td class="col-2">Pengarang</td>
						<td class="col-2">Penerbit</td>
					</tr>
				</thead>
				<!-- End of Table Header -->

				<!-- Table Body -->
				<tbody>
					<?php
					$nomor = 1;
					$buku = query("SELECT * FROM buku");
					foreach ($buku as $b) {
					?>
						<tr>
							<td><?= $nomor++; ?></td>
							<td class="text-center"><img src="img/<?= $b['cover_buku']; ?>" alt="<?= $b['judul_buku']; ?>" class="img-thumbnail image-max-height"></td>
							<td><?= $b['judul_buku']; ?></td>
							<td><?= $b['pengarang_buku']; ?></td>
							<td><?= $b['penerbit_buku']; ?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>