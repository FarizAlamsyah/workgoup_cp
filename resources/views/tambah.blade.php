<!DOCTYPE html>
<html>
<head>
	<title>Tambah</title>
</head>
<body>
	<a href="/home">Kembali</a>
	<form action="/home/protambah" method="post">
	{{csrf_field()}}
		<table>
			<tr>
				<td>Nama :</td>
				<td><input type="text" name="nama" required="required"></td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td><input type="text" name="jabatan" required="required"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" name="tanggal_lahir" required="required"></td>
			</tr>
			<tr>
				<td>Alamat</td>
			</tr>
			<tr>
				<td><textarea name="alamat" required="required"></textarea></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="Simpan Data">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>