<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="GET" action="isi.php">

	<!-- <TABLE>
		<tr>
			<td>
				<label>Nama</label>
			</td>
			<td>
				<input type="text" name="nama[]">
			</td>
		</tr>
		<tr>
			<td>
				<label>Nama Depan</label>
			</td>
			<td>
				<input type="text" name="nama[]">
			</td>
		</tr>
		<tr>
			<td>
				<label>Nama Belakang</label>
			</td>
			<td>
				<input type="text" name="nama[]">
			</td>
		</tr>
	</TABLE> -->





<!-- // Kuis Ke 11 _____ Senin,3 Oktober 2016_____________ -->

		<!-- <label>
			Alamat
		</label>
		<input type="text" name="alamat">
		<label>
			Nomor Telp
		</label>
		<input type="text" name="no_telp">
		<label>
			Jenis Kelamin
		</label>
		<input type="text" name="kelamin">
		<label>
			Hoby
		</label>
		<input type="text" name="hobi"> -->
		
	
		<<?php 
		for ($i=0; $i < 10; $i++) { 
		
		 } 
		 ?>
		<label>	
			Nilai 1 <?php echo $i+1; ?>
		</label>
		<input type="text" name="nilai_1">
		<<?php 
		for ($i=0; $i < 10; $i++) { 
		
		 } 
		 ?>
		<label>
			Nilai 2 <?php echo $i+1; ?>
		</label>
		<input type="text" name="nilai_2">
		<<?php 
		for ($i=0; $i < 10; $i++) { 
		
		 } 
		 ?>
		<label>
			Nilai 3	<?php echo $i+1; ?>
		</label>
		<input type="text" name="nilai_3">
		<<?php 
		for ($i=0; $i < 10; $i++) { 
		
		 } 
		 ?>
		<label>
			Nilai 4	<?php echo $i+1; ?>
		</label>
		<input type="text" name="nilai_4">
		<<?php 
		for ($i=0; $i < 10; $i++) { 
		
		 } 
		 ?>
		<label>
			Nilai 5	<?php echo $i+1; ?>
		</label>
		<input type="text" name="nilai_5">
		<<?php 
		for ($i=0; $i < 10; $i++) { 
		
		 } 
		 ?>
		<label>
			Nilai 6	<?php echo $i+1; ?>
		</label>
		<input type="text" name="nilai_6">
		<<?php 
		for ($i=0; $i < 10; $i++) { 
		
		 } 
		 ?>
		<label>
			Nilai 7	<?php echo $i+1; ?>
		</label>
		<input type="text" name="nilai_7">
		<<?php 
		for ($i=0; $i < 10; $i++) { 
		
		 } 
		 ?>

		<label>
			Nilai 8
		</label>
		<input type="text" name="nilai_8">
		
		<<?php 
		for ($i=0; $i < 10; $i++) { 
		
		 } 
		 ?>

		<label>
			Nilai 9
		</label>
		<input type="text" name="nilai_9">
		<label>
			Nilai 10
		</label>
		<input type="text" name="nilai_10">
	
		<input type="submit" value="simpan">
	
	</form>
</body>
</html>