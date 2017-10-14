<!DOCTYPE html>
<html>
<head>
	<title>DAFTAR ACCOUNT KULIAH ONLINE</title>
</head>
<body>
	<br>
	<br>
	<form action="proses.php" method="POST">
	<table align="center">
		<tr>
			<td colspan="3" align="center" bgcolor="bluesky">FORM REGISTRASI</td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="inim" placeholder="Masukan NIM" size="10" maxlength="8"></td>
		</tr>
		<tr>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td><input type="text" name="inama" placeholder="Masukan nama"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>
				<select name="ikelamin">
					<option value="">Pilih Jenis Kelamin</option>
					<option value="Laki-laki">Laki-laki</option>
					<option value="Perempuan">Perempuan</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>:</td>
			<td>
				<select name="itanggal">
						<option value="0">Pilih</option>
					<?php
						for($tgl=1;$tgl<=31;$tgl++){
							echo "<option value=$tgl>$tgl</option>";
						}
					?>
					</select>-
					<select name="ibulan">
						<option value="0">Pilih </option>
						<option value="1">Januari </option>
						<option value="2">Februari </option>
						<option value="3">Maret </option>
						<option value="4">April </option>
						<option value="5">Mei </option>
						<option value="6">Juni </option>
						<option value="7">Juli </option>
						<option value="8">Agustus </option>
						<option value="9">September </option>
						<option value="10">Oktober </option>
						<option value="11">November </option>
						<option value="12">Desember </option>
					</select>-
					<select name="itahun">
						<option value="0">Plih</option>
					<?php
						for($thn=2000;$thn>=1950;$thn--){
							echo"<option value=$thn>$thn</option>";
						}
					?>
					</select>
			</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><textarea name="ialamat" placeholder="Masukan alamat lengkap"></textarea></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><input type="text" name="iemail" placeholder="Masukan email"></td>
		</tr>
		<tr>
			<td> Username</td>
			<td>:</td>
			<td> <input type="text" name="iusername" placeholder="Masukan Username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td> <input type="password" name="ipassword" placeholder="Masukan Password"></td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="eksekusi" value="Lanjutkan">
				<input type="reset" name="reset" value="Reset">
			</td>
		</tr>

	</table>
	</form>

</body>
</html>