<!DOCTYPE html>
<html>
<head>
	<title>GUEST BOOK</title>
    <style>
		html{
			font-family:Arial;
		}
		h1{
			text-align: center;
		}
		table, td, th{
			border: 1px solid black;
			padding: 10px;
		}
		table{
			border-collapse: collapse;
			margin-left: auto;
			margin-right: auto;
		}
		#customers tr:nth-child(odd){background-color: #f2f2f2;}
		#customers tr:hover {background-color: #ddd;}
    </style>
</head>
<body>
	<h1>GUEST BOOK</h1>
	<?php
		if(isset($_POST['submit'])){
			if(isset($_POST['facebook'])){$fb="Yes";}else{$fb="-";}
			if(isset($_POST['twitter'])){$tw="Yes";}else{$tw="-";}
			if(isset($_POST['instagram'])){$ig="Yes";}else{$ig="-";}
			if(isset($_POST['tiktok'])){$tt="Yes";}else{$tt="-";}
			echo "<table id='customers'>
			<tr>
				<td>Full Name</td>
				<td>: ".$_POST['nama_lengkap']."</td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>: ".$_POST['jenis_kelamin']."</td>
			</tr>
			<tr>
				<td>Address</td>
				<td>: ".$_POST['alamat']."</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>: ".$_POST['email']."</td>
			</tr>
			<tr>
				<td colspan=2>Social Media</td>
			</tr>
			<tr>
				<td>Facebook</td>
				<td>: ".$fb."</td>
			</tr>
			<tr>
				<td>Twitter</td>
				<td>: ".$tw."</td>
			</tr>
			<tr>
				<td>Instagram</td>
				<td>: ".$ig."</td>
			</tr>
			<tr>
				<td>Tiktok</td>
				<td>: ".$tt."</td>
			</tr>
			<tr>
				<td>Knowing this website from</td>
				<td>: ".$_POST['info']."</td>
			</tr>
			<tr>
				<td>Testimonials</td>
				<td>: ".$_POST['pesan']."</td>
			</tr>
		</table>";
		}
		else{
			echo "<h2>This page cannot be called directly</h2>";
		}
	?>
</body>
</html>