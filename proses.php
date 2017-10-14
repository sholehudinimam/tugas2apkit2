<?php
	//awal validasi
	$ada_error = false;
	$pesan_error = "Kesalahan yang terjadi : <br>";

	//penangkapan file
	$nim=trim($_POST["inim"]);
	$nama=trim($_POST["inama"]);
	$kelamin=trim($_POST["ikelamin"]);
	$tanggal=trim($_POST["itanggal"]);
	$bulan=trim($_POST["ibulan"]);
	$tahun=trim($_POST["itahun"]);
	$email=trim($_POST["iemail"]);
	$alamat=trim($_POST["ialamat"]);
	$username=trim($_POST["iusername"]);
	$password=trim($_POST["ipassword"]);

	//filter nim
	if(strlen($nim)<8){
		$pesan_error = $pesan_error."- Panjang NIM harus 8 huruf<br>";
		$ada_error=true;
	}
	if(!mb_ereg("[0-9]{8}",$nim)){
		$pesan_error.="- NIM Hanya boleh angka <br>";
		$ada_error=true;
	}
	$jenjang = substr($nim,0,3);
		if(($jenjang!="101")and
			($jenjang!="102")and
			($jenjang!="103")and
			($jenjang!="104")and
			($jenjang!="105")and
			($jenjang!="106")and
			($jenjang!="108")and
			($jenjang!="109")and
			($jenjang!="110")and
			($jenjang!="131")and
			($jenjang!="130")and
			($jenjang!="140")and
			($jenjang!="144")and
			($jenjang!="211")and
			($jenjang!="212")and
			($jenjang!="245")and
			($jenjang!="246")and
			($jenjang!="213")and
			($jenjang!="214")and
			($jenjang!="215")and
			($jenjang!="316")and
			($jenjang!="418")and
			($jenjang!="443")and
			($jenjang!="417")and
			($jenjang!="519")and
			($jenjang!="520")and
			($jenjang!="547")and
			($jenjang!="548")and
			($jenjang!="521")and
			($jenjang!="637")and
			($jenjang!="638")
			){
			$pesan_error = $pesan_error."- Coba periksa lagi kode fakultas dan kode jurusannya<br>";
			$ada_error = true;
		}

	switch ($jenjang) {
		case '101':
			$fakultas = 'Teknik dan Ilmu Kmputer';
			$prodi    = 'Teknik Informatika[S1]';
			break;
		case '102':
			$fakultas = 'Teknik dan Ilmu Kmputer';
			$prodi    = 'Teknik Komputer[S1]';
			break;
		case '103':
			$fakultas = 'Teknik dan Ilmu Kmputer';
			$prodi    = 'Teknik Industri[S1]';
			break;
		case '131':
			$fakultas = 'Teknik dan Ilmu Kmputer';
			$prodi    = 'Teknik Elektro[S1]';
			break;
		case '130':
			$fakultas = 'Teknik dan Ilmu Kmputer';
			$prodi    = 'Teknik Sipil[S1]';
			break;	
		case '104':
			$fakultas = 'Teknik dan Ilmu Kmputer';
			$prodi    = 'Teknik Arsitektur[S1]';
			break;
		case '105':
			$fakultas = 'Teknik dan Ilmu Kmputer';
			$prodi    = 'Sistem Informasi[S1]';
			break;
		case '106':
			$fakultas = 'Teknik dan Ilmu Kmputer';
			$prodi    = 'Perencanaan Wilayah dan Kota[S1]';
			break;
		case '140':
			$fakultas = 'Teknik dan Ilmu Kmputer';
			$prodi    = 'Sistem Informasi(Internasional)[S1]';
			break;
		case '144':
			$fakultas = 'Teknik dan Ilmu Kmputer';
			$prodi    = 'Teknik Komputer(Internasional)[S1]';
			break;
		case '108':
			$fakultas = 'Teknik dan Ilmu Kmputer';
			$prodi    = 'Teknik Komputer[D3]';
			break;
		case '109':
			$fakultas = 'Teknik dan Ilmu Kmputer';
			$prodi    = 'Manajemen Informatika[D3]';
			break;
		case '110':
			$fakultas = 'Teknik dan Ilmu Kmputer';
			$prodi    = 'Komputerisasi Akuntansi[D3]';
			break;
		case '211':
			$fakultas = 'Ekonomi';
			$prodi    = 'Akuntansi[S1]';
			break;
		case '212':
			$fakultas = 'Ekonomi';
			$prodi    = 'Manajemen[S1]';
			break;
		case '245':
			$fakultas = 'Ekonomi';
			$prodi    = 'Akuntansi Syariah(Internasional)[S1]';
			break;
		case '246':
			$fakultas = 'Ekonomi';
			$prodi    = 'Manajemen Rumah Sakit(Internasional)[S1]';
			break;
		case '213':
			$fakultas = 'Ekonomi';
			$prodi    = 'Akuntansi[D3]';
			break;
		case '214':
			$fakultas = 'Ekonomi';
			$prodi    = 'Manajemen Pemasaran[D3]';
			break;
		case '215':
			$fakultas = 'Ekonomi';
			$prodi    = 'Manajemen Keuangan[D3]';
			break;
		case '316':
			$fakultas = 'Hukum';
			$prodi    = 'Ilmu Hukum[S1]';
			break;
		case '418':
			$fakultas = 'Sospol';
			$prodi    = 'Ilmu Komunikasi[S1]';
			break;
		case '443':
			$fakultas = 'Sospol';
			$prodi    = 'Hubungan Internasional[S1]';
			break;
		case '417':
			$fakultas = 'Sospol';
			$prodi    = 'Ilmu Pemerintahan[S1]';
			break;
		case '519':
			$fakultas = 'Desain';
			$prodi    = 'Desain Komunikasi Visual[S1]';
			break;
		case '520':
			$fakultas = 'Desain';
			$prodi    = 'Desain Interior[S1]';
			break;
		case '547':
			$fakultas = 'Desain';
			$prodi    = 'Multimedia Interaktif(Internasional)[S1]';
			break;
		case '548':
			$fakultas = 'Desain';
			$prodi    = 'Desain Komunikasi Visual(Internasional)[S1]';
			break;
		case '521':
			$fakultas = 'Desain';
			$prodi    = 'Desain Komunikasi Visual[D3]';
			break;
		case '637':
			$fakultas = 'Sastra';
			$prodi    = 'Sastra Inggris[S1]';
			break;
		case '638':
			$fakultas = 'Sastra';
			$prodi    = 'Sastra Jepang[S1]';
			break;
		default:
			$fakultas = '';
			$prodi 	  = '';
			break;
	}

	$tahun_masuk = substr($nim,3,2);
	//filter nama
	if(strlen($nama)<2){
		$pesan_error=$pesan_error."- Nama Minimal 2 Huruf</br>";
		$ada_error = true;
	}
	//filter kelamin
	if($kelamin==""){
		$pesan_error = $pesan_error."- Pilih Jenis Kelamin Terlebih Dahulu</br>";
		$ada_error = true;
	}
	//filter tanggal lahir
	if(($tanggal==0)or($bulan==0)or($tahun==0)){
		$pesan_error= $pesan_error."- Tanggal Lahir harus diisi lengkap<br>";
		$ada_error= true;
	}
	if(!checkdate($bulan,$tanggal,$tahun)){
		$pesan_error = $pesan_error."- Tanggal Lahir tidak sah";
		$ada_error= true;
	}
	//filter Alamat
	if(strlen($alamat)<5){
		$pesan_error=$pesan_error."- Alamat Minimal 5 Huruf</br>";
		$ada_error = true;
	}
	//filter email
	if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) {
  		$pesan_error=$pesan_error."- Email tidak valid</br>";
		$ada_error = true;
	}
	//filter username
	if(strlen($username)<6){
		$pesan_error=$pesan_error."- Username Minimal 6 Huruf</br>";
		$ada_error = true;
	}
	//filter password
	if(strlen($password)<6){
		$pesan_error=$pesan_error."- Password Minimal 6 Huruf</br>";
		$ada_error = true;
	}
	if(!preg_match('/[0-9]+/i',$password)){
    	$pesan_error=$pesan_error."- Password harus mengandung angka</br>";
		$ada_error = true;
    }
    if(!preg_match('/[a-z]+/',$password)){
    	$pesan_error=$pesan_error."- Password harus mengandung huruf kecil</br>";
		$ada_error = true;
    }
    if(!preg_match('/[A-Z]+/',$password)){
    	$pesan_error=$pesan_error."- Password harus mengandung huruf kapital</br>";
		$ada_error = true;
    }
    //filter error
    if($ada_error){
		echo "Proses perhitungan dibatalkan. Data yang anda isikan tidak valid.<br>$pesan_error<br> <a href='javascript:history.back();'>kembali</a>";
	}else if(!$ada_error){
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hasil Proses</title>
</head>
<body>
	<table align="center">
		<tr>
			<td colspan=3 align="center" bgcolor="yellow">
				HASIL INPUTAN
			</td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><?php echo $nim; ?></td>
		</tr>
		<tr>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td><?php echo $nama; ?></td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><?php echo $fakultas; ?></td>
		</tr>
		<tr>
			<td>Prodi</td>
			<td>:</td>
			<td><?php echo $prodi ?></td>
		</tr>
		<tr>
			<td>Tahun Masuk</td>
			<td>:</td>
			<td><?php echo "20".$tahun_masuk; ?></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td>:</td>
			<td><?php echo $tanggal."-".$bulan."-".$tahun; ?></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td width="50%"><?php echo $alamat; ?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><?php echo $email; ?></td>
		</tr>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><?php echo $username; ?></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><?php echo $password; ?></td>
		</tr>
		<tr>
			<td colspan=3><a href='javascript:history.back();'>kembali</a></td>
			
		</tr>
	</table>
</body>

</html>

<?php
	}
?>