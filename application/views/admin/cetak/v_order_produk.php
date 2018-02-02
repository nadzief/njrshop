<!DOCTYPE html>
<html>
<head>
	<title> View </title>
</head>
<body>
	
	<img src="<?php echo base_url().'image/logomusik.jpg'; ?>" style="width: 300px; height: 100px;">
	<h3 align="center" style="margin-top: -30px;" border="1"> Data Order Produk </h3>
	<table border="0.1">
		<thead>
			<tr style="background-color: skyblue;">
				<th> No 		</th>
				<th> ID 		</th>
                <th> ID Produk 	</th>
                <th> ID Pemesan </th>
                <th> Nama 		</th>
                <th> Email 		</th>
                <th> Alamat 	</th>
                <th> No .Hp 	</th>
                <th> Status 	</th>
                <th> Jumlah 	</th>
                <th> Tanggal 	</th>
			</tr>
		</thead>
		<?php 
			$no = 1;
			foreach ($data as $value){ 
		?>
		<tbody>
			<tr>
				<td> <?php echo $no; ?>					</td>
				<td> <?php echo $value->id; ?>  		</td>
				<td> <?php echo $value->id_product; ?> 	</td>
				<td> <?php echo $value->id_pemesan; ?> 	</td>
				<td> <?php echo $value->nama; ?> 		</td>
				<td> <?php echo $value->email; ?> 		</td>
				<td> <?php echo $value->alamat; ?> 		</td>
				<td> <?php echo $value->phone; ?> 		</td>
				<td> <?php echo $value->status; ?> 		</td>
				<td> <?php echo $value->jumlah; ?> 		</td>
				<td> <?php echo $value->tanggal; ?> 	</td>
			</tr>
		</tbody>
		<?php 
			$no++; 
			} 
		?>
	</table>
	
</body>	
</html>