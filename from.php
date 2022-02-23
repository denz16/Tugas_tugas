<!-- <html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Form HTML dengan PHP</title>
	<style>
		body {
			font-family: "segoe ui";
		}

		h1 {
			font-size: 25px;
		}

		div {
			margin-bottom: 5px;
		}

		input {
			border: 1px solid #CCCCCC;
			padding: 7px;
			font-size: 14px;
		}

		input[type="submit"] {
			padding: 7px 15px;
			margin-left: 70px;
			cursor: pointer;
		}

		label {
			width: 70px;
			display: block;
			float: left;
		}
	</style>
</head>

<body>
	<h1>Form HTML Dengan PHP</h1>
	<form action="proses.php" method="post">
		<div>
			<label>Nama</label><input type="text" name="nama">
		</div>
		<div>
			<label>Email</label><input type="text" name="email">
		</div>
		<input type="submit" name="submit" value="Simpan">
	</form>

</body>

</html> -->
<?php
include("contoh_koneksi.php");
$kode = $_POST['kode'];
$nama  = $_POST['nama'];
$nip = $_POST['NIP'];

$q_simpan = "insert into tbdosen values('$kode','$nama','$nip')";
$hasil = mysqli_query($sambung, $q_simpan);

if ($hasil) {
	echo "Data tersimpan: <br>";
} else {
	echo "Data gagal disimpan";
}
?>
<a href="form.php">kembali input lagi</a>