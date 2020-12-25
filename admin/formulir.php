<div class="panel panel-info">
	<div class="panel-heading">
		<b><span class="glyphicon glyphicon-check" style="font-size: 20px;"></span> FORMULIR PENDAFTARAN SISWA BARU</b>
		<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
	</div>
	<div class="panel-body">
		<div class="col-md-6">
			<span class="label label-info" style="font-size: 16px;">DATA SISWA</span>
		</div>
		<div class="col-md-6">
			<span class="label label-info" style="font-size: 16px;">SEKOLAH/MADRASAH</span>
		</div>
		<br> <br>
		<?php 
include'inc/koneksi.php';
$carikode = mysqli_query($con,"select max(kode_siswa) from tb_siswa");
$datakode = mysqli_fetch_array($carikode);
if ($datakode) {
$nilaikode = substr($datakode[0], 1);
$kode = (int) $nilaikode;
$kode = $kode + 1;
$hasilkode= "S" .str_pad($kode, 3, "0", STR_PAD_LEFT);
} else{
$hasilkode = "S001";
}
?>
		<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
			<fieldset>
				<!-- Name input-->
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-md-3 control-label" for="name">Kode Siswa</label>
						<div class="col-md-9">
							<input id="name" name="kode_siswa" value="<?php echo "$hasilkode";?>" type="text"
								class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="name">Nama Siswa</label>
						<div class="col-md-9">
							<input id="name" name="nama_lengkap" type="text" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="name">Jenis Kelamin</label>
						<div class="col-md-9">
							<div class="radio">
								<label>
									<input type="radio" name="jenis_kelamin" value="Laki-laki" id="optionsRadios1">
									Laki-laki
								</label>
								<label>
									<input type="radio" name="jenis_kelamin" value="Perempuan" id="optionsRadios1">
									Perempuan
								</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="name">Tempat Lahir</label>
						<div class="col-md-9">
							<input id="name" name="tempat" type="text" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="name">Tanggal Lahir</label>
						<div class="col-md-9">
							<input id="name" name="tgl_lahir" type="date" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="name">Anak Ke</label>
						<div class="col-md-9">
							<input id="name" name="anak_ke" type="number" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="name">Jumlah Saudara</label>
						<div class="col-md-9">
							<input id="name" name="jml_saudara" type="number" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="name">No Telepon</label>
						<div class="col-md-9">
							<input id="no_telepon" name="no_telepon" type="number" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="name">Agama</label>
						<div class="col-md-7">

							<select name="agama" class="form-control">
								<option> -- Pilih Agama -- </option>
								<?php 
		include 'inc/koneksi.php';
		$agama = mysqli_query($con,"SELECT nama_agama FROM tb_agama");
		while($hasil = mysqli_fetch_array($agama)){
		echo "<option>$hasil[nama_agama]</option>";
		}
		?>

							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="name">Alamat</label>
						<div class="col-md-9">
							<textarea name="alamat" class="form-control" rows="3"></textarea>
						</div>
					</div>

					<div class="row" style="margin-bottom: 14px;">
						<div class="col-md-6">
							<span class="label label-info" style="font-size: 16px;">Orangtua/wali</span>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-md-3 control-label" for="name">Nama Ayah</label>
						<div class="col-md-9">
							<input id="nama_ayah" name="nama_ayah" type="text" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="name">Nama Ibu</label>
						<div class="col-md-9">
							<input id="nama_ibu" name="nama_ibu" type="text" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="name">No Telepon</label>
						<div class="col-md-9">
							<input id="no_telportu" name="no_telportu" type="number" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="name">Pekerjaan Ayah</label>
						<div class="col-md-9">
							<input id="pekerjaan_ayah" name="pekerjaan_ayah" type="text" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="name">Pekerjaan Ibu</label>
						<div class="col-md-9">
							<input id="pekerjaan_ibu" name="pekerjaan_ibu" type="text" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="name">Alamat</label>
						<div class="col-md-9">
							<textarea name="alamat_ortu" class="form-control" rows="3"></textarea>
						</div>
					</div>

					<!-- WALI SECTION -->
					<div class="form-group">
						<label class="col-md-3 control-label" for="name">Nama Wali</label>
						<div class="col-md-9">
							<input id="nama_wali" name="nama_wali" type="text" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="name">No Telepon Wali</label>
						<div class="col-md-9">
							<input id="no_telpwali" name="no_telpwali" type="number" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="name">Pekerjaan Wali</label>
						<div class="col-md-9">
							<input id="pekerjaan_wali" name="pekerjaan_wali" type="text" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="name">Alamat Wali</label>
						<div class="col-md-9">
							<textarea name="alamat_wali" class="form-control" rows="3"></textarea>
						</div>
					</div>
					<!-- END WALI SECTION -->

					<span class="label label-info" style="font-size: 16px;"> REGISTER</span>

					<div class="form-group">
						<label class="col-md-3 control-label" for="email"> Username</label>
						<div class="col-md-9">
							<input id="email" name="username" type="text" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="email"> Password</label>
						<div class="col-md-9">
							<input id="email" name="password" type="text" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="email">Ulangi Password</label>
						<div class="col-md-9">
							<input id="email" name="pass" type="text" class="form-control">
							<input type="hidden" name="siswa" value="siswa">
							<input type="hidden" name="keterangan" value="SEDANG DIPROSES OLEH PETUGAS">
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label class="col-md-3 control-label" for="email"> Asal Sekolah</label>
						<div class="col-md-9">
							<input id="email" name="asal_sekolah" type="text" placeholder="Asal Sekolah : SMP/MTS"
								class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="email">Nilai STTB / Ijazah</label>
						<div class="col-md-9">
							<input id="nilai_ijazah" name="nilai_ijazah" type="number" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="email">NISN</label>
						<div class="col-md-9">
							<input id="email" name="nisn" type="text" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="name">Alamat Sekolah</label>
						<div class="col-md-9">
							<textarea name="alamat_sekolah" class="form-control" rows="3"></textarea>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<span class="label label-info" style="font-size: 16px;">NILAI UJIAN AKHIR NASIONAL SD</span>
				</div>
				<div class="col-md-6">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>No.</th>
								<th>Mata Pelajaran</th>
								<th>Nilai</th>
							</tr>

						</thead>
						<tbody>
							<tr>
								<td>1.</td>
								<td>Matematika</td>
								<td> <input type="number" name="nilai1" class="form-control"> </td>
							</tr>

							<tr>
								<td>2.</td>
								<td>Bahasa Indonesia</td>
								<td> <input type="number" name="nilai3" class="form-control"> </td>
							</tr>
							<tr>
								<td>3.</td>
								<td>Ilmu Pengetahuan Alam</td>
								<td> <input type="number" name="nilai4" class="form-control"> </td>
							</tr>

							<tr>
								<td> <b> Foto</b></td>
								<td>:</td>
								<td><input type="file" class="form-control" name="foto"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- Email input-->

				<!-- Form actions -->
				<div class="form-group">
					<div class="col-md-12 widget-left">
						<input type="submit" name="simpan" class="btn btn-info" value="SIMPAN">
						<input type="reset" class="btn btn-danger" value="RESET">
						<button type="submit" class="btn btn-danger btn-md pull-right">Back</button>
					</div>
				</div>

			</fieldset>
		</form>
		<?php
$kode_siswa = @$_POST['kode_siswa'];   
$username = @$_POST['username'];      
$password=md5(@$_POST['password']);
$pass = @$_POST['pass'];  
$nama_lengkap = @$_POST['nama_lengkap'];
$jenis_kelamin = @$_POST['jenis_kelamin']; 
$tempat = @$_POST['tempat'];
$tgl_lahir = @$_POST['tgl_lahir'];  
$anak_ke = @$_POST['anak_ke'];
$jml_saudara = @$_POST['jml_saudara'];
$agama = @$_POST['agama'];
$alamat = @$_POST['alamat'];
$asal_sekolah = @$_POST['asal_sekolah'];
$nilai_ijazah = @$_POST['nilai_ijazah'];
$nisn = @$_POST['nisn'];
$nilai1 = @$_POST['nilai1'];
$nilai2 = 0;
$nilai3 = @$_POST['nilai3'];
$nilai4 = @$_POST['nilai4'];
$nilai5 = 0;
$siswa = @$_POST['siswa'];
$keterangan = @$_POST['keterangan'];
$sumber = @$_FILES['foto']['tmp_name'];
$nama_ayah = @$_POST['nama_ayah'];
$nama_ibu = @$_POST['nama_ibu'];
$alamat_ortu = @$_POST['alamat_ortu'];
$no_telp_ortu = @$_POST['no_telportu'];
$pekerjaan_ayah = @$_POST['pekerjaan_ayah'];
$pekerjaan_ibu = @$_POST['pekerjaan_ibu'];
$nama_wali = @$_POST['nama_wali'];
$alamat_wali = @$_POST['alamat_wali'];
$no_telp_wali = @$_POST['no_telp_wali'];
$pekerjaan_wali = @$_POST['pekerjaan_wali'];
$no_telp = @$_POST['no_telepon'];
$alamat_sekolah = @$_POST['alamat_sekolah'];
// nama_ayah	
// nama_ibu
// alamat_ortu
// no_telp_ortu	
// pekerjaan_ayah 
// pekerjaan_ibu 
// nama_wali
// alamat_wali
// no_telp_wali 
// pekerjaan_wali	
// no_telp	
// alamat_sekolah

$target = 'assets/gambar/user/';
$nama_gambar = @$_FILES['foto']['name'];
$simpan_data = @$_POST['simpan']; 
if ($simpan_data) {
if ($kode_siswa == "" || $username == "" || $password == "" || $pass == "" || $nama_lengkap == "" || $nama_gambar==""){
?>
		<script type="text/javascript">
			alert("Inputan harus diisi, silahkan Lengkapi lagi ");
		</script>
		<?php

} else{
$pindah = move_uploaded_file($sumber, $target.$nama_gambar);
if ($pindah)
{
	$query = "insert into tb_siswa values ('$kode_siswa','$username','$password','$pass','$nama_lengkap','$jenis_kelamin','$tempat','$tgl_lahir','$anak_ke','$jml_saudara','$agama','$alamat','$asal_sekolah','$nilai_ijazah','$nisn','$nilai1','$nilai2','$nilai3','$nilai4','$nilai5','$keterangan','$siswa','$nama_gambar','$nama_ayah', '$nama_ibu','$alamat_ortu','$no_telp_ortu','$pekerjaan_ayah', '$pekerjaan_ibu', '$nama_wali', '$alamat_wali', '$no_telp_wali', '$pekerjaan_wali', '$no_telp', '$alamat_sekolah')";
	$result = mysqli_query($con,$query);
	// var_dump($query);
	// var_dump($result);
	// echo("Error description: " . mysqli_error($con));
?><script type="text/javascript">
			alert(" Sukses ! Berhasil Mendaftar !!");
			window.location.href = "?page=admin&action=penentuan";
		</script><?php
} else{
	?><script type="text/javascript">
			alert("gambar gagal disimpan  !!");
		</script><?php
	
}

}

}


?>

	</div>
</div>
</div>
<!--/.col-->