<?php
include 'inc/koneksi.php';
$kdsis = @$_GET['kdsis'];
$sql = mysqli_query($con, "select * from tb_siswa where kode_siswa = '$kdsis'");
$data = mysqli_fetch_array($sql);
$sql2 = mysqli_query($con, "select * from tb_admins where id = '$kdsis'");
$data2 = mysqli_fetch_array($sql2);
?>

<div class="col-md-10">
	<div class="panel panel-danger">
		<div class="panel-heading">
			<center>
				<b>PENENTUAN KELULUSAN</b>
				<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
			</center>

		</div>
		<div class="panel-body">
			<center>
				<img src="assets/gambar/user/<?php echo $data['foto']; ?>" alt="..." class="img-thumbnail" width="100" height="40" style="border: 3px solid silver; border-radius: 8%;">
			</center>
			<form action="" method="post" class="form-horizontal">
				<table class="table table-striped">
					<thead>
						<tr style="color: dodgerblue;">
							<th>STATUS PENERIMAAN</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Status</td>
							<td><b style="color: dodgerblue;"><?php echo $data['keterangan']; ?></b>
							</td>
						</tr>
						<tr>
							<td>Tentukan</td>
							<td></b>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Penentuan</label>
									<div class="col-md-9">
										<p>
											<input name="keterangan" type="radio" value="DITERIMA" <?= $data['keterangan'] == 'DITERIMA' ? 'checked' : ''; ?>> Diterima
										</p>
										<p>
											<input name="keterangan" type="radio" value="TIDAK DITERIMA" <?= $data['keterangan'] == 'TIDAK DITERIMA' ? 'checked' : ''; ?>> Tidak Diterima
										</p>
										<p>
											<input name="keterangan" type="radio" value="CADANGAN" <?= $data['keterangan'] == 'CADANGAN' ? 'checked' : ''; ?>> Cadangan
										</p>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Dana Pengembangan</label>
									<div class="col-md-9">
										<input id="dana_pengembangan" name="dana_pengembangan" type="text" class="form-control" placeholder="Dana Pengembangan Sekolah(Rp)" value="<?= $data2['dana_pengembangan']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Dana Tahunan</label>
									<div class="col-md-9">
										<input id="dana_tahunan" name="dana_tahunan" type="text" class="form-control" placeholder="Dana Tahunan Siswa kelas VII (Rp)" value="<?= $data2['dana_tahunan']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">SPP</label>
									<div class="col-md-9">
										<input id="spp" name="spp" type="text" class="form-control" placeholder="SPP(Rp)" value="<?= $data2['spp']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Katering</label>
									<div class="col-md-9">
										<input id="katering" name="katering" type="text" class="form-control" placeholder="Katering(Rp)" value="<?= $data2['katering']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Tabungan Wisata</label>
									<div class="col-md-9">
										<input id="tabungan_wisata" name="tabungan_wisata" type="text" class="form-control" placeholder="Tabungan Wisata(Rp)" value="<?= $data2['tabungan_wisata']; ?>">
									</div>
								</div>
								<div class="form-group">
									<div class="row flexs">
										<div class="col-md-5">
											<label class="col-md-3 control-label" for="name">Angsuran</label>
										</div>
										<div class="col-md-5">
											<label class="col-md-3 control-label" for="name">Tanggal</label>
										</div>
										<button class="btn btn-primary" id="addField"> + </button>
									</div>
									<div class="adminPops">

										<?php
										$dataPops = explode(",", $data2['angsuran']);
										$datePops = explode(",", $data2['tanggal_angsuran']);
										if (count($dataPops) < 2) {
										?>

											<div class="row flexs" style="margin-bottom:12px;">
												<div class="col-md-5">
													<input id="angsuran" name="angsuran[]" type="text" class="form-control" placeholder="Angsuran(Rp)" value="<?= $data2['angsuran']; ?>">
												</div>
												<div class="col-md-5">
													<input id="tanggal_angsuran" name="tanggal_angsuran[]" type="date" class="form-control" value="<?= $data2['tanggal_angsuran']; ?>">
												</div>
												<button class="btn btn-warning removeField"> - </button>
											</div>
											<?php
										} else {
											for ($i = 0; $i < count($dataPops); $i++) {
											?>
												<div class="row flexs" style="margin-bottom:12px;">
													<div class="col-md-5">
														<input id="angsuran" name="angsuran[]" type="text" class="form-control" placeholder="Angsuran(Rp)" value="<?= $dataPops[$i]; ?>">
													</div>
													<div class="col-md-5">
														<input id="tanggal_angsuran" name="tanggal_angsuran[]" type="date" class="form-control" value="<?= $datePops[$i]; ?>">
													</div>
													<button class="btn btn-warning removeField"> - </button>
												</div>
										<?php
											}
										}
										?>
									</div>
								</div>
								<input type="submit" name="proses" class="btn btn-primary btn-lg" value="PROSES">

							</td>
						</tr>
					</tbody>

				</table>
			</form>
			<?php
			include 'inc/koneksi.php';
			if (isset($_POST['proses'])) {
				$keterangan = $_POST['keterangan'];
				$dana_pengembangan = $_POST['dana_pengembangan'];
				$dana_tahunan = $_POST['dana_tahunan'];
				$spp = $_POST['spp'];
				$katering = $_POST['katering'];
				$tabungan_wisata = $_POST['tabungan_wisata'];
				$angsuran = $_POST['angsuran'];
				$tanggal_angsuran = $_POST['tanggal_angsuran'];

				$angsuranUnion = implode(",", $angsuran);
				$tanggalUnion = implode(",", $tanggal_angsuran);

				var_dump($angsuranUnion);
				var_dump($tanggalUnion);

				$queryUpd = "UPDATE tb_siswa SET keterangan='$keterangan' WHERE kode_siswa='$kdsis' ";
				$queryAdm = "UPDATE tb_admins SET id='S001', dana_pengembangan='$dana_pengembangan', dana_tahunan='$dana_tahunan', spp='$spp', katering='$katering', tabungan_wisata='$tabungan_wisata', angsuran='$angsuranUnion', tanggal_angsuran='$tanggalUnion' WHERE (id='S001');
";

				$result1 = mysqli_query($con, $queryUpd);
				$result2 = mysqli_query($con, $queryAdm);

				// var_dump($result1);
				// var_dump($result2);
				// var_dump(mysqli_error($con));

			?>

				<script type="text/javascript">
					alert(" Suskse !! Data berhasil di PROSES !! ")

					window.location.href = "?page=admin&action=penentuan";
				</script>
			<?php
			} ?>


		</div>
	</div>
</div>

<div class="col-md-2">
	<a target="_blank" href="Laporan/print_wawancara.php?kdsis=<?php echo $data['kode_siswa'] ?>">
		<button type="button" class="btn btn-primary btn-lg">
			<span class="glyphicon glyphicon-print" aria-hidden="true"></span> Wawancara
		</button>
	</a>
	<br>
	<br>
	<a target="_blank" href="Laporan/print_id.php?kdsis=<?php echo $data['kode_siswa'] ?>">
		<button type="button" class="btn btn-primary btn-lg" style="width: 130px;">
			<span class="glyphicon glyphicon-print" aria-hidden="true"></span> Cetak
		</button>
	</a>
	<br>
	<br>
	<a target="_blank" href="Laporan/cetak_pdf_id.php?kdsis=<?php echo $data['kode_siswa'] ?>">
		<button type="button" class="btn btn-danger btn-lg" style="width: 130px;">
			<span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> PDF
		</button>
	</a>
	<br>
	<br>
	<a target="_blank" href="Laporan/cetak_excell_id.php?kdsis=<?php echo $data['kode_siswa'] ?>">
		<button type="button" class="btn btn-success btn-lg" style="width: 130px;">
			<span class="glyphicon glyphicon-file" aria-hidden="true"></span> Excell
		</button></a>
</div>