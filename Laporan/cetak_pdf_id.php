<?php
error_reporting(0);
$nama_dokumen='FORMULIR PENDAFTARAN'; //Beri nama file PDF hasil.
define('mpdf60/');//lokasi folder mpdf
require_once("mpdf60/mpdf.php");
$mpdf=new mPDF('utf-8', 'A4-P'); // PDF mau L lanscape P potrait

$mpdf->setFooter('{PAGENO}');// memberikan footer nomor halaman

ob_start();
?>


		
<?php
include '../inc/koneksi.php';
$kdsis = @$_GET['kdsis'];
$sql = mysqli_query($con,"select * from tb_siswa where kode_siswa = '$kdsis'") or die(mysqli_error());
$data = mysqli_fetch_array($sql);
?>

	<div class="col-md-12">
<div class="panel panel-default">
	<TABLE WIDTH="100%">
    <TR>
    <TD ALIGN="CENTER" WIDTH="15%"><IMG SRC="../assets/gambar/user/mupat.png" WIDTH="15%"></TD>
    <!-- <TD ALIGN="CENTER" WIDTH="10%"><IMG SRC="../assets/gambar/user/pdm.jpg" WIDTH="100" height="100"></TD>-->

    <TD ALIGN="CENTER" WIDTH="50%"><FONT SIZE="4.5">
                 <B>FORMULIR BUKTI PENDAFTARAN CALON SISWA BARU<BR>
    <FONT SIZE="7"><B>SMP MUHAMMADIYAH 4<BR>
    <FONT SIZE="4">JL. Ki Mangunsarkoro No. 43 Yogyakarta Telp (0274) 554623<BR>
    <FONT SIZE="3"><I>website : http://www.smpmuh4yogya.sch.id&nbsp;&nbsp;&nbsp;email : smpmuh4yk@gmail.com</FONT>
    </TD>
    
    </TR>
    </TABLE>
<hr style="border: 3px solid;">
														
						

					
					<div class="panel-body">
						<center>
							<img src="../assets/gambar/user/<?php echo $data ['foto']; ?>" alt="..." class="img-thumbnail" width="70" height="90" style="border: 3px solid silver; border-radius: 8%;">
						</center>
<table class="table table-striped">
	<thead>
		<br>
		<br>
		<br>
		<tr style="color: dodgerblue;">
			<th>DATA SISWA</th>
			<th></th>
		
		</tr>
		</br>
		</br>
		</br>
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
			<td>Anak ke</td>
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
			<th>SEKOLAH/MADRASAH</th>
			<th></th>
		</tr>
	</thead>
	</thead>
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
		<br>
		<tr style="color: dodgerblue;">
			<th>NILAI UJIAN AKHIR NASIONAL SD</th>
			<th></th>
		
		</tr>
		</br>
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
			<td><b style="color: red;">Perhatian !!</b> Mohon Kartu ini dibawa ketika Daftar Ulang ke sekolah !! </td>					
		</tr>
	</tbody>

</table>

					</div>
				</div>
			</div>



<?php
$html = ob_get_contents();
ob_end_clean();
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output($nama_dokumen.".pdf" ,'I');
exit;
?>
