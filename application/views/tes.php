<!DOCTYPE html>
<html>
<head>
	<title>CI Inner Join</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<table class="table table-striped table-bordered">
					<thead class="thead-light">
						<tr class="bg-primary">
							<th> No </th>
							<th> Id Categori </th>
							<th> Nama Kategori </th>
							<th> Id </th>
							<th> Category </th>
						</tr>
					</thead>
					<tbody>
						<?php for ($i = 0; $i < count($produk); $i++) { ?>
						<tr>
							<td> <?php echo $i+1; ?></td>
							<td> <?php echo $produk[$i]->id_category; ?> </td>
							<td> <?php echo $produk[$i]->nama_kategori; ?> </td>
							<td> <?php echo $produk[$i]->id; ?> </td>
							<td> <?php echo $produk[$i]->category; ?> </td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>