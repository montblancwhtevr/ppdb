<div class="panel panel-info">
	<div class="panel-heading">
		<span class="fa fa-edit" style="font-size: 23px;"></span> <b>Edit Data Siswa</b>
		<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
	</div>
	<!-- <div class="panel-body">
	<div class="col-md-6">	
	<span class="label label-info" style="font-size: 16px;" >PILIHAN</span>
</div> -->
	<div class="panel-body">
		<!-- <div class="col-md-6">
			<span class="label label-info" style="font-size: 16px;">DATA SISWA</span>
		</div> -->

		<br> <br>
		<?php
include 'inc/koneksi.php';
$kdsis = $_GET['kdsis'];
$sql = mysqli_query($con,"select * from tb_siswa where kode_siswa = '$kdsis'");
$data = mysqli_fetch_array($sql);

?>
		<form class="form-horizontal" action="" method="post">
			<fieldset>
				<!-- Name input-->
				<div class="col-md-6">
					<div class="row" id="space-row">
						<span class="label label-info" style="font-size: 16px;"> Data Siswa</span>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="name">Kode Siswa</label>
						<div class="col-md-9">
							<input id="name" value="<?php echo $data ['kode_siswa']; ?>" name="kode_siwa" type="text"
								class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="name">Nama Siswa</label>
						<div class="col-md-9">
							<input id="name" name="nama_lengkap" type="text" placeholder="Your name"
								class="form-control" value="<?php echo $data ['nama_lengkap']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="name">Jenis Kelamin</label>
						<div class="col-md-9">
							<div class="radio">
								<label>
									<input type="radio" name="jenis_kelamin" id="optionsRadios1" value="Laki-laki"
										<?php if ($data['jenis_kelamin'] == 'Laki-laki') {echo "checked";} ?>> Laki-laki
								</label>
								<label>
									<input type="radio" name="jenis_kelamin" id="optionsRadios1" value="Perempuan"
										<?php if ($data['jenis_kelamin'] == 'Perempuan') {echo "checked";} ?>> Perempuan
								</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="name">Tempat Lahir</label>
						<div class="col-md-9">
							<input id="name" name="tempat" type="text" class="form-control"
								value="<?php echo $data ['tempat']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="name">Tanggal Lahir</label>
						<div class="col-md-9">
							<input id="name" name="tgl_lahir" type="date" class="form-control"
								value="<?php echo $data ['tgl_lahir']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="name">Anak Ke</label>
						<div class="col-md-9">
							<input id="name" name="anak_ke" type="number" class="form-control"
								value="<?php echo $data ['anak_ke']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="name">Jumlah Saudara</label>
						<div class="col-md-9">
							<input id="name" name="jml_saudara" type="number" class="form-control"
								value="<?php echo $data ['jml_saudara']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="name">No Telepon</label>
						<div class="col-md-9">
							<input id="no_telepon" name="no_telepon" type="number" class="form-control"
								value="<?php echo $data['no_telp'];?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="name">Kelas</label>
						<div class="col-md-7">
							<select name="kelas" class="form-control">
								<option value="" <?php if($data['kelas'] == ''){echo 'selected';} ?>>-- Pilih Kelas --
								</option>
								<option value="Reguler" <?php if($data['kelas'] == 'Reguler'){echo 'selected';} ?>>
									Reguler</option>
								<option value="ICT" <?php if($data['kelas'] == 'ICT'){echo 'selected';} ?>>ICT</option>
							</select>

						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="name">Agama</label>
						<div class="col-md-7">
							<select name="agama" class="form-control">
								<option value="Islam">Islam</option>
								<option value="Kristen">Kristen</option>
								<option value="Hindu">Hindu</option>
								<option value="Budha">Budha</option>

							</select>

						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="name">Alamat</label>
						<div class="col-md-9">
							<textarea name="alamat" class="form-control"
								rows="3"> <?php echo $data['alamat']; ?> </textarea>
						</div>
					</div>
					<div class="row" style="margin-bottom: 14px;">
						<div class="col-md-6">
							<span class="label label-info" style="font-size: 16px;">Orangtua/wali</span>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label" for="name">Orang tua</label>
						<div class="col-md-9">
							<input id="ortu-sec" name="ortu-sec" type="radio" class="form-control"
								value="">
						</div>
					</div>

					<div class="ortu-section">
						<div class="form-group">
							<label class="col-md-3 control-label" for="name">Nama Ayah</label>
							<div class="col-md-9">
								<input id="nama_ayah" name="nama_ayah" type="text" class="form-control"
									value="<?php echo $data['nama_ayah'];?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="name">Nama Ibu</label>
							<div class="col-md-9">
								<input id="nama_ibu" name="nama_ibu" type="text" class="form-control"
									value="<?php echo $data['nama_ibu'];?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="name">No Telepon</label>
							<div class="col-md-9">
								<input id="no_telportu" name="no_telportu" type="number" class="form-control"
									value="<?php echo $data['no_telp_ortu'];?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="name">Pekerjaan Ayah</label>
							<div class="col-md-9">
								<input id="pekerjaan_ayah" name="pekerjaan_ayah" type="text" class="form-control"
									value="<?php echo $data['pekerjaan_ayah'];?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="name">Pekerjaan Ibu</label>
							<div class="col-md-9">
								<input id="pekerjaan_ibu" name="pekerjaan_ibu" type="text" class="form-control"
									value="<?php echo $data['pekerjaan_ibu'];?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="name">Alamat</label>
							<div class="col-md-9">
								<textarea name="alamat_ortu" class="form-control"
									rows="3"><?php echo $data['alamat_ortu'];?></textarea>
							</div>
						</div>
					</div>

					<!-- WALI SECTION -->
					<div class="wali-section">
						<div class="form-group">
							<label class="col-md-3 control-label" for="name">Nama Wali</label>
							<div class="col-md-9">
								<input id="nama_wali" name="nama_wali" type="text" class="form-control"
									value="<?php echo $data['nama_wali'];?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="name">No Telepon Wali</label>
							<div class="col-md-9">
								<input id="no_telpwali" name="no_telpwali" type="number" class="form-control"
									value="<?php echo $data['no_telp_wali'];?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="name">Pekerjaan Wali</label>
							<div class="col-md-9">
								<input id="pekerjaan_wali" name="pekerjaan_wali" type="text" class="form-control"
									value="<?php echo $data['pekerjaan_wali'];?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="name">Alamat Wali</label>
							<div class="col-md-9">
								<textarea name="alamat_wali" class="form-control"
									rows="3"><?php echo $data['alamat_wali'];?></textarea>
							</div>
						</div>
					</div>
					<!-- END WALI SECTION -->

					<div class="row" id="space-row">
						<span class="label label-info" style="font-size: 16px;"> REGISTER</span>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label" for="email"> Username</label>
						<div class="col-md-9">
							<input id="email" name="username" type="text" value="<?php echo $data ['username']; ?>"
								class="form-control" disabled>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="email"> Password</label>
						<div class="col-md-9">
							<input id="email" name="pass" type="text" value="<?php echo $data ['pass']; ?>"
								class="form-control">
						</div>
					</div>




				</div>

				<div class="col-md-6">
					<div class="row" id="space-row">
						<span class="label label-info" style="font-size: 16px;">SEKOLAH</span>
					</div>
					<!-- Email input-->
					<!-- <div class="col-md-6"> -->
					<div class="form-group">
						<label class="col-md-3 control-label" for="email"> Asal Sekolah Dasar</label>
						<div class="col-md-9">
							<input id="email" name="asal_sekolah" type="text" placeholder="Asal Sekolah : SMP/MTS"
								value="<?php echo $data ['asal_sekolah']; ?>" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="email">Nilai STTB / Ijazah</label>
						<div class="col-md-9">
							<input id="email" name="nilai_ijazah" type="text" class="form-control"
								value="<?php echo $data ['nilai_ijazah']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="email">NISN</label>
						<div class="col-md-9">
							<input id="email" name="nisn" type="text" class="form-control"
								value="<?php echo $data ['nisn']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="name">Alamat Sekolah</label>
						<div class="col-md-9">
							<textarea name="alamat_sekolah" class="form-control"
								rows="3"><?php echo $data['alamat_sekolah'];?></textarea>
						</div>
					</div>
					<!-- </div> -->
					<div class="row" id="space-row">
						<span class="label label-info" style="font-size: 16px;">NILAI UJIAN AKHIR NASIONAL SD</span>
					</div>

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
								<td> <input type="number" name="nilai1" class="form-control"
										value="<?php echo $data['nilai1'];?>"> </td>
							</tr>
							<tr>
								<td>2.</td>
								<td>Bahasa Indonesia</td>
								<td> <input type="number" name="nilai3" class="form-control"
										value="<?php echo $data['nilai3'];?>"> </td>
							</tr>
							<tr>
								<td>3.</td>
								<td>Ilmu Pengetahuan Alam</td>
								<td> <input type="number" name="nilai4" class="form-control"
										value="<?php echo $data['nilai4'];?>"> </td>
							</tr>
							<tr class="info">
								<td> <b>Status Penerimaan</b></td>
								<td>:</td>
								<td><b style="color: red;"><?php echo $data['keterangan']; ?></b></td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- Email input-->

				<!-- Form actions -->
				<div class="form-group">
					<div class="col-md-6 widget-left">
						<input type="submit" name="edit" class="btn btn-info" value="SIMPAN">
						<input type="reset" class="btn btn-danger" value="RESET">
						<!-- <button type="submit" class="btn btn-default btn-md pull-right">Submit</button> -->
					</div>
				</div>

			</fieldset>
		</form>
		<?php
include 'inc/koneksi.php';
if (isset($_POST['edit'])) {
$pass = $_POST['pass'];
$nama_lengkap = $_POST['nama_lengkap'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tempat = $_POST['tempat'];
$tgl_lahir = $_POST['tgl_lahir'];
$anak_ke = $_POST['anak_ke'];
$jml_saudara = $_POST['jml_saudara'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$asal_sekolah = $_POST['asal_sekolah'];
$nilai_ijazah = $_POST['nilai_ijazah'];
$nisn = $_POST['nisn'];
$nilai1 = $_POST['nilai1'];
$nilai2 = 0;
$nilai3 = $_POST['nilai3'];
$nilai4 = $_POST['nilai4'];
$nilai5 = 0;
$nama_ayah = $_POST['nama_ayah'];
$nama_ibu = $_POST['nama_ibu'];
$alamat_ortu = $_POST['alamat_ortu'];
$no_telp_ortu = $_POST['no_telportu'];
$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
$nama_wali = $_POST['nama_wali'];
$alamat_wali = $_POST['alamat_wali'];
$no_telp_wali = $_POST['no_telpwali'];
$pekerjaan_wali = $_POST['pekerjaan_wali'];
$no_telp = $_POST['no_telepon'];
$alamat_sekolah = $_POST['alamat_sekolah'];
$kelas = $_POST['kelas'];


$query = "UPDATE tb_siswa SET pass='$pass',password =md5('$pass'),nama_lengkap='$nama_lengkap',jenis_kelamin='$jenis_kelamin',tempat='$tempat',tgl_lahir='$tgl_lahir',anak_ke='$anak_ke',jml_saudara='$jml_saudara',agama='$agama',alamat='$alamat',asal_sekolah='$asal_sekolah',nilai_ijazah='$nilai_ijazah',nisn='$nisn',nilai1='$nilai1',nilai2='$nilai2',nilai3='$nilai3',nilai4='$nilai4',nilai5='$nilai5', no_telp='$no_telp', nama_ayah='$nama_ayah', nama_ibu='$nama_ibu', kelas='$kelas', alamat_sekolah='$alamat_sekolah', alamat_ortu='$alamat_ortu', no_telp_ortu='$no_telp_ortu', pekerjaan_ayah='$pekerjaan_ayah', pekerjaan_ibu='$pekerjaan_ibu', nama_wali='$nama_wali', alamat_wali='$alamat_wali', pekerjaan_wali='$pekerjaan_wali', no_telp_wali='$no_telp_wali' WHERE kode_siswa='$kdsis'";
$result = mysqli_query($con,$query);
// var_dump($query);
// var_dump($result);
// var_dump(mysqli_error($con));
// var_dump($_SERVER);
// header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING']);
?>

		<script type="text/javascript">
			alert(" Suskse !! Data berhasil di perbaharui !! ")

			window.location.href = "?page=admin&action=lihat";
		</script>
		<?php 
}?>

	</div>
</div>
</div>
<!--/.col-->