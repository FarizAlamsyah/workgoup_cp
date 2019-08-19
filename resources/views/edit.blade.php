<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body>
	<h3><center>Ubah Data</center></h3>
	@foreach($users as $u)
	<form action="/home/updated" method="post">
		
		{{csrf_field()}}
		<table>
			<tr>
				<td><input type="hidden" name="id" value="{{$u->id}}"></td>
			</tr>
			<tr>
				<td>Nama :</td>
				<td><input type="text" name="nama" required="required" value="{{$u->nama}}"></td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td><input type="text" name="jabatan" required="required" value="{{$u->jabatan}}"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" name="tanggal_lahir" required="required" value="{{$u->tanggal_lahir}}"></td>
			</tr>
			<tr>
				<td>Alamat</td>
			</tr>
			<tr>
				<td><textarea name="alamat" required="required">{{$u->alamat}}</textarea></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="Simpan Data">
				</td>
			</tr>
		</table>
		
	</form>
	@endforeach
</body>
</html>