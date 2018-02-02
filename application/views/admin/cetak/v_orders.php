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
				<th> Serial		</th>
                <th> Tanggal 	</th>
                <th> ID Customer</th>
			</tr>
		</thead>
		<?php 
			$no = 1;
			foreach ($data as $value){ 
		?>
		<tbody>
			<tr>
				<td> <?php echo $no; ?>					</td>
				<td> <?php echo $value->serial; ?>  	</td>
				<td> <?php echo $value->date; ?> 		</td>
				<td> <?php echo $value->customerid; ?> 	</td>
			</tr>
		</tbody>
		<?php 
			$no++; 
			} 
		?>
	</table>
	
</body>	
</html>