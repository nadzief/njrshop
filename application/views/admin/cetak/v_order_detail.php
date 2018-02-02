<!DOCTYPE html>
<html>
<head>
	<title> View </title>
</head>
<body>
	
	<img src="<?php echo base_url().'image/logomusik.jpg'; ?>" style="width: 300px; height: 100px;">
	<h3 align="center" style="margin-top: -30px;" border="1"> Data Orders </h3>
	<table border="0.1">
		<thead>
			<tr style="background-color: skyblue;">
				<th> No 		</th>
				<th> Id Order	</th>
                <th> Id Produk 	</th>
                <th> Jumlah		</th>
                <th> Harga 		</th>
			</tr>
		</thead>
		<?php 
			$no = 1;
			foreach ($data as $value){ 
		?>
		<tbody>
			<tr>
				<td> <?php echo $no; ?>					</td>
				<td> <?php echo $value->id_order; ?>  	</td>
				<td> <?php echo $value->id_produk; ?> 	</td>
				<td> <?php echo $value->jumlah; ?> 		</td>
				<td> <?php echo $value->harga; ?> 		</td>
			</tr>
		</tbody>
		<?php 
			$no++; 
			} 
		?>
	</table>
</body>	
</html>