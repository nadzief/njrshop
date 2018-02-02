<!DOCTYPE html>
<html>
<head>
	<title>View</title>
</head>
<body>
	
	<img src="<?php echo base_url().'image/logomusik.jpg'; ?>" style="width: 300px; height: 100px;">
	<h3 align="center" style="margin-top: -30px;"> Data Laporan Pembelian </h3>
	<table border="0.1">
		<thead>
			<tr>
				<th>	No				</th>
				<th>	Id				</th>
				<th>	Nama 			</th>
                <th>	No Hp 			</th>
                <th>	Email 			</th>
                <th>	Alamat 			</th>
                <th>	Kabupaten 		</th>
                <th>	Jasa Pengiriman </th>
                <th>	Desa 			</th>
                <th>	Provinsi 		</th>
                <th>	Kode Pos 		</th>
                <th>	Kecamatan 		</th>
                <th>	Tanggal 		</th>
                <th>	Jam 			</th>
                <th>	Status 			</th>
			</tr>
		</thead>
		<?php 
			$no = 1;
			foreach ($data as $value){ 
		?>
		<tbody>
			<tr>
				<td> <?php echo $no; ?>						</td>
				<td> <?php echo $value->id; ?>  			</td>
				<td> <?php echo $value->nama; ?> 			</td>
				<td> <?php echo $value->no_hp; ?> 			</td>
				<td> <?php echo $value->email; ?> 			</td>
				<td> <?php echo $value->alamat; ?> 			</td>
				<td> <?php echo $value->kabupaten; ?> 		</td>
				<td> <?php echo $value->jasa_pengiriman; ?> </td>
				<td> <?php echo $value->desa; ?> 			</td>
				<td> <?php echo $value->provinsi; ?> 		</td>
				<td> <?php echo $value->kode_pos; ?> 		</td>
				<td> <?php echo $value->kecamatan; ?> 		</td>
				<td> <?php echo $value->tgl; ?> 		</td>
				<td> <?php echo $value->jam; ?> 			</td>
				<td> <?php echo $value->status; ?> 			</td>
			</tr>
		</tbody>
		<?php 
			$no++; 
			} 
		?>
	</table>
</body>
</html>