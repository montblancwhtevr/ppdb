

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Halaman Siswa PPDB SMP MUHAMMADIYAH 4 YOGYAKARTA</title>
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="../assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="../assets/css/datepicker3.css" rel="stylesheet">
	<link href="../assets/css/styles.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="../assets/DataTables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="../assets/DataTables/media/css/dataTables.bootstrap.css">
	<style type="text/css">
		.navbar navbar-custom navbar-fixed-top{
			background-color:#3e2723;
		}
	</style>
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>

		
<?php
include '../inc/koneksi.php';
$kdsis = @$_GET['kdsis'];
$sql = mysqli_query($con,"select * from tb_siswa where kode_siswa = '$kdsis'") or die(mysqli_error());
$data = mysqli_fetch_array($sql);
?>

	<div class="col-md-12">
<div class="panel panel-default">
	<TABLE WIDTH="75%">
    <TR>
    <TD ALIGN="LEFT" WIDTH="30%"><IMG SRC="../assets/gambar/user/mupat.png" WIDTH="30%"></TD>
    <!--<TD ALIGN="CENTER" WIDTH="10%"><IMG SRC="../assets/gambar/user/pdm.jpg" WIDTH="100" height="100"></TD>-->

    <TD ALIGN="CENTER" WIDTH="50%"><FONT SIZE="3">
                 <B>FORMULIR BUKTI PENDAFTARAN CALON SISWA BARU<BR>
    <FONT SIZE="5"><B>SMP MUHAMMADIYAH 4<BR>
    <FONT SIZE="3">JL. Ki Mangunsarkoro No. 43 Yogyakarta Telp (0274) 554623<BR>
    <FONT SIZE="2"><I>website : http://www.smpmuh4yogya.sch.id&nbsp;&nbsp;&nbsp;email : smpmuh4yk@gmail.com</FONT>
    </TD>
    </TR>
    </TABLE>
<hr style="border: 2px solid;">
					<div class="panel-body">
						<center>
							<img src="../assets/gambar/user/<?php echo $data ['foto']; ?>" alt="..." class="img-thumbnail" width="100" height="40" style="border: 3px solid silver; border-radius: 8%;">
						</center>
<table class="table table-striped">
	<thead>
		<tr style="color: dodgerblue;">
			<th>DATA SISWA</th>
			<th></th>
		
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Kode Siswa</td>
			<td><?php echo $data['kode_siswa']; ?></td>	
		</tr>
			<tr>
			<td>NISN</td>
			<td><?php echo $data['nisn']; ?></td>
		</tr>
		<tr>
			<td>Nama Siswa</td>
			<td><?php echo $data['nama_lengkap']; ?></td>
		</tr>
			<tr>
			<td>Jenis Kelamin</td>
			<td><?php echo $data['jenis_kelamin']; ?></td>
		</tr>
			<tr>
			<td>Tempat, Tanggal Lahir</td>
			<td><?php echo $data['tempat']; ?>,&nbsp;<?php echo $data['tgl_lahir']; ?></td>
		</tr>
			<tr>
			<td>Anaka ke</td>
			<td><?php echo $data['anak_ke']; ?></td>
		</tr>
			<tr>
			<td>Jumlah Saudara</td>
			<td><?php echo $data['jml_saudara']; ?></td>
		</tr>
		</tr>
			<tr>
			<td>Agama</td>
			<td><?php echo $data['agama']; ?></td>
		</tr>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><?php echo $data['alamat']; ?></td>		
		</tr>
	</tbody>
	<thead>
		<tr style="color: dodgerblue;">
			<th>Orangtua/wali</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Nama ayah</td>
			<td><?php echo $data['nama_ayah']; ?></td>
		</tr>
		<tr>
			<td>Pekerjaan ayah</td>
			<td><?php echo $data['pekerjaan_ayah']; ?></td>
		</tr>
		<tr>
			<td>Nama ibu</td>
			<td><?php echo $data['nama_ibu']; ?></td>
		</tr>
		<tr>
			<td>Pekerjaan ibu</td>
			<td><?php echo $data['pekerjaan_ibu']; ?></td>
		</tr>
		<tr>
			<td>No Telepon</td>
			<td><?php echo $data['no_telp_ortu']; ?></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><?php echo $data['alamat_ortu']; ?></td>
		</tr>
	</tbody>
	<thead>
		<tr style="color: dodgerblue;">
			<th>Wali</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Nama wali</td>
			<td><?php echo $data['nama_wali']; ?></td>
		</tr>
		<tr>
			<td>Pekerjaan wali</td>
			<td><?php echo $data['pekerjaan_wali']; ?></td>
		</tr>
		<tr>
			<td>No Telepon</td>
			<td><?php echo $data['no_telp_wali']; ?></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><?php echo $data['alamat_wali']; ?></td>
		</tr>
	</tbody>
	<thead>
		<tr style="color: dodgerblue;">
			<th>SEKOLAH/MADRASAH</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Asal Sekolah</td>
			<td><?php echo $data['asal_sekolah']; ?></td>
		</tr>
		<tr>
			<td>Nilai STTB/Ijazah</td>
			<td><?php echo $data['nilai_ijazah']; ?></td>		
		</tr>
	</tbody>
	<thead>
		<tr style="color: dodgerblue;">
			<th>NILAI UJIAN AKHIR NASIONAL SD</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Matematika</td>
			<td><?php echo $data['nilai1']; ?></td>					
		</tr>
		<tr>
			<td>Bahasa Indonesia</td>
			<td><?php echo $data['nilai3']; ?></td>					
		</tr>
			<tr>
			<td>Ilmu Pengetahuan Alam</td>
			<td><?php echo $data['nilai4']; ?></td>					
		</tr>
	</tbody>
		<thead>
		<tr style="color: dodgerblue;">
			<th>STATUS PENERIMAAN</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Status</td>
			<td><b style="color: dodgerblue;"><?php echo $data['keterangan']; ?></b></td>					
		</tr>
		<tr>
			<td>Waktu Penerimaan</td>
			<td><b> <?php echo date (" d F Y") ?></b></td>				
		</tr>
			<tr>
			<td>NB :</td>
			<td><b style="color: red;">Perhatian !!</b> Mohon Kartu ini Dibawa ketika Daftar Ulang ke sekolah !!</td>					
		</tr>
	</tbody>
</table>
					</div>
				</div>
			</div>

	<script src="../assets/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="../assets/DataTables/media/js/jquery.js"></script>
	<script type="text/javascript" src="../../assets/DataTables/media/js/jquery.dataTables.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/chart.min.js"></script>
	<script src="../assets/js/chart-data.js"></script>
	<script src="../assets/js/easypiechart.js"></script>
	<script src="../assets/js/easypiechart-data.js"></script>
	<script src="../assets/js/bootstrap-datepicker.js"></script>
	<script src="../assets/js/custom.js"></script>

</body>
</html>
<?php
//otomatis muncul ketika laman di akses
echo "<script>window.print()</script>";
?>