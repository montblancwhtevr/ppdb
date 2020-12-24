<div class="panel panel-info">
<div class="panel-heading">
	<span class="fa fa-edit" style="font-size: 23px;"></span> <b>Edit Data Siswa</b>
	<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
</div>
<!-- <div class="panel-body">
	<div class="col-md-12">	
	<span class="label label-info" style="font-size: 16px;" >PILIHAN</span>
</div> -->
<div class="panel-body">
	<div class="col-md-12">	
	<span class="label label-info" style="font-size: 16px;" >DATA SISWA</span>
</div>

	 <br> <br>
<?php
include 'inc/koneksi.php';
$kdsis = @$_GET['kdsis'];
$sql = mysqli_query($con,"select * from tb_siswa where kode_siswa = '$kdsis'") or die(mysqli_error());
$data = mysqli_fetch_array($sql);

?>
	<form class="form-horizontal" action="" method="post">
		<fieldset>							
			<!-- Name input-->
<div class="col-md-12">			
<div class="form-group">
	<label class="col-md-3 control-label" for="name">Kode Siswa</label>
	<div class="col-md-9">
		<input id="name" value="<?php echo $data ['kode_siswa']; ?>" name="kode_siwa" type="text" class="form-control">
	</div>
</div>
<div class="form-group">
	<label class="col-md-3 control-label" for="name">Nama Siswa</label>
	<div class="col-md-9">
		<input id="name" name="nama_lengkap" type="text" placeholder="Your name" class="form-control" value="<?php echo $data ['nama_lengkap']; ?>">
	</div>
</div>
<div class="form-group">
	<label class="col-md-3 control-label" for="name">Jenis Kelamin</label>
	<div class="col-md-9">
		<div class="radio">
			<label>
			<input type="radio" name="jenis_kelamin" id="optionsRadios1" value="Laki-laki"<?php if ($data['jenis_kelamin'] == 'Laki-laki') {echo "checked";} ?>> Laki-laki
			</label>
			<label>
			<input type="radio" name="jenis_kelamin" id="optionsRadios1" value="Perempuan" <?php if ($data['jenis_kelamin'] == 'Perempuan') {echo "checked";} ?> > Perempuan
			</label>
		</div>		
	</div>
</div>
<div class="form-group">
	<label class="col-md-3 control-label" for="name">Tempat Lahir</label>
	<div class="col-md-9">
		<input id="name" name="tempat" type="text" class="form-control"  value="<?php echo $data ['tempat']; ?>">
	</div>
</div>
<div class="form-group">
	<label class="col-md-3 control-label" for="name">Tanggal Lahir</label>
	<div class="col-md-9">
		<input id="name" name="tgl_lahir" type="date" class="form-control" value="<?php echo $data ['tgl_lahir']; ?>">
	</div>
</div>
<div class="form-group">
	<label class="col-md-3 control-label" for="name">Anak Ke</label>
	<div class="col-md-9">
		<input id="name" name="anak_ke" type="number" class="form-control" value="<?php echo $data ['anak_ke']; ?>">
	</div>
</div>
<div class="form-group">
	<label class="col-md-3 control-label" for="name">Jumlah Saudara</label>
	<div class="col-md-9">
		<input id="name" name="jml_saudara" type="number" class="form-control" value="<?php echo $data ['jml_saudara']; ?>">
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
		<textarea name="alamat" class="form-control" rows="3"> <?php echo $data['alamat']; ?> </textarea>
	</div>
</div>
<span class="label label-info" style="font-size: 16px;" > REGISTER</span>

			<div class="form-group">
				<label class="col-md-3 control-label" for="email"> Username</label>
				<div class="col-md-9">
				<input id="email" name="username" type="text" value="<?php echo $data ['username']; ?>" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-3 control-label" for="email"> Password</label>
				<div class="col-md-9">
				<input id="email" name="pass" type="text" value="<?php echo $data ['pass']; ?>" class="form-control">
				</div>
			</div>




</div>

<div class="col-md-12">	
	<span class="label label-info" style="font-size: 16px;">PILIHAN</span>
	<div class="form-group">
		<label class="col-md-3 control-label" for="name">Kelas</label>
		<div class="col-md-7">
			<select name="kelas" class="form-control">
				<option value="reguler">Reguler</option>
				<option value="ict">ICT</option>
			</select>
			
		</div>
	</div>

	<span class="label label-info" style="font-size: 16px;">SEKOLAH</span>
		
			<!-- Email input-->
		<!-- <div class="col-md-12"> -->
	<div class="form-group">
		<label class="col-md-3 control-label" for="email"> Asal Sekolah Dasar</label>
		<div class="col-md-9">
		<input id="email" name="asal_sekolah" type="text" placeholder="Asal Sekolah : SMP/MTS" value="<?php echo $data ['asal_sekolah']; ?>" class="form-control">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 control-label" for="email">Nilai STTB / Ijazah</label>
		<div class="col-md-9">
		<input id="email" name="nilai_ijazah" type="text" class="form-control" value="<?php echo $data ['nilai_ijazah']; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="col-md-3 control-label" for="email">NISN</label>
		<div class="col-md-9">
		<input id="email" name="nisn" type="text" class="form-control" value="<?php echo $data ['nisn']; ?>">
		</div>
	</div>
		<!-- </div> -->

	<span class="label label-info" style="font-size: 16px;" >NILAI UJIAN AKHIR NASIONAL SD</span>
</div>
<div class="col-md-12">
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
	<td> <input type="number" name="nilai1" class="form-control" value="<?php echo $data['nilai1'];?>"> </td>
</tr>
<tr>
	<td>2.</td>
	<td>Bahasa Indonesia</td>
	<td> <input type="number" name="nilai3" class="form-control" value="<?php echo $data['nilai3'];?>"> </td>
</tr>
<tr>
	<td>3.</td>
	<td>Ilmu Pengetahuan Alam</td>
	<td> <input type="number" name="nilai4" class="form-control" value="<?php echo $data['nilai4'];?>"> </td>
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
				<div class="col-md-12 widget-left">
					<input type="submit" name="edit" class="btn btn-info" value="SIMPAN">
				    <input type="reset" class="btn btn-danger" value="RESET">
					<button type="submit" class="btn btn-default btn-md pull-right">Submit</button>
				</div>
			</div>
		
		</fieldset>
	</form>
	<?php
include 'inc/koneksi.php';
if (@$_POST['edit']) {
@$kode_user = mysqli_real_escape_string($con,$con,$_POST['kode_user']);
@$username = mysqli_real_escape_string($con,$con,$_POST['username']);
@$pass = mysqli_real_escape_string($con,$con,$_POST['pass']);
@$nama_lengkap = mysqli_real_escape_string($con,$con,$_POST['nama_lengkap']);
@$jenis_kelamin = mysqli_real_escape_string($con,$con,$_POST['jenis_kelamin']);
@$tempat = mysqli_real_escape_string($con,$con,$_POST['tempat']);
@$tgl_lahir = mysqli_real_escape_string($con,$con,$_POST['tgl_lahir']);
@$anak_ke = mysqli_real_escape_string($con,$con,$_POST['anak_ke']);
@$jml_saudara = mysqli_real_escape_string($con,$con,$_POST['jml_saudara']);
@$agama = mysqli_real_escape_string($con,$con,$_POST['agama']);
@$alamat = mysqli_real_escape_string($con,$con,$_POST['alamat']);
@$asal_sekolah = mysqli_real_escape_string($con,$con,$_POST['asal_sekolah']);
@$nilai_ijazah = mysqli_real_escape_string($con,$con,$_POST['nilai_ijazah']);
@$nisn = mysqli_real_escape_string($con,$con,$_POST['nisn']);
@$nilai1 = mysqli_real_escape_string($con,$con,$_POST['nilai1']);
@$nilai2 = 0;
@$nilai3 = mysqli_real_escape_string($con,$con,$_POST['nilai3']);
@$nilai4 = mysqli_real_escape_string($con,$con,$_POST['nilai4']);
@$nilai5 = 0;

$query = "UPDATE tb_siswa SET username='$username',pass='$pass',password =md5('$pass'),nama_lengkap='$nama_lengkap',jenis_kelamin='$jenis_kelamin',tempat='$tempat',tgl_lahir='$tgl_lahir',anak_ke='$anak_ke',jml_saudara='$jml_saudara',agama='$agama',alamat='$alamat',asal_sekolah='$asal_sekolah',nilai_ijazah='$nilai_ijazah',nisn='$nisn',nilai1='$nilai1',nilai2='$nilai2',nilai3='$nilai3',nilai4='$nilai4',nilai5='$nilai5' WHERE kode_siswa='$kdsis'";
$result = mysqli_query($con,$query);

var_dump($_SERVER);
header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . '?' . $_SERVER['QUERY_STRING']);
?>

<!-- <script type="text/javascript">
	alert(" Suskse !! Data berhasil di perbaharui !! ")

window.location.href="?page=admin&action=lihat";     
</script> -->
<?php 
}?>

</div>
</div>
</div><!--/.col-->
