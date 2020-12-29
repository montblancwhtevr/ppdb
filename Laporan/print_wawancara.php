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
        .navbar navbar-custom navbar-fixed-top {
            background-color: #3e2723;
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
    $sql = mysqli_query($con, "SELECT
    tb_siswa.kode_siswa,
    tb_siswa.username,
    tb_siswa.`password`,
    tb_siswa.pass,
    tb_siswa.nama_lengkap,
    tb_siswa.jenis_kelamin,
    tb_siswa.tempat,
    tb_siswa.tgl_lahir,
    tb_siswa.anak_ke,
    tb_siswa.jml_saudara,
    tb_siswa.agama,
    tb_siswa.alamat,
    tb_siswa.asal_sekolah,
    tb_siswa.nilai_ijazah,
    tb_siswa.nisn,
    tb_siswa.nilai1,
    tb_siswa.nilai2,
    tb_siswa.nilai3,
    tb_siswa.nilai4,
    tb_siswa.nilai5,
    tb_siswa.keterangan,
    tb_siswa.`level`,
    tb_siswa.foto,
    tb_siswa.nama_ayah,
    tb_siswa.nama_ibu,
    tb_siswa.alamat_ortu,
    tb_siswa.no_telp_ortu,
    tb_siswa.pekerjaan_ayah,
    tb_siswa.pekerjaan_ibu,
    tb_siswa.nama_wali,
    tb_siswa.alamat_wali,
    tb_siswa.no_telp_wali,
    tb_siswa.pekerjaan_wali,
    tb_siswa.no_telp,
    tb_siswa.alamat_sekolah,
    tb_siswa.kelas,
    tb_siswa.admins,
    tb_admins.id,
    tb_admins.dana_pengembangan,
    tb_admins.dana_tahunan,
    tb_admins.spp,
    tb_admins.katering,
    tb_admins.tabungan_wisata,
    tb_admins.angsuran,
    tb_admins.tanggal_angsuran
    from tb_siswa JOIN tb_admins
    WHERE kode_siswa = '$kdsis'");
    $data = mysqli_fetch_array($sql);
    // var_dump($data);
    $total_bayar = $data['dana_pengembangan'] + $data['dana_tahunan'] + $data['spp'] + $data['tabungan_wisata'] + $data['katering'];
    $angsuranPops = explode(",", $data['angsuran']);
    $tanggalAngsuranPops = explode(",", $data['tanggal_angsuran']);
    ?>
    <div class="col-md-12">
        <table style="width: 100%;">
            <tr style="width: 100%;">
                <td></td>
                <td style="text-align: end;">Kelas <?= $data['kelas']; ?></td>
            </tr>
        </table>
    </div>
    <div class="col-md-12" style="text-align: center;">
        <p><b>RINCIAN BIAYA PENDIDIKAN PPDB</b></p>
        <p><b>SMP MUHAMMADIYAH 4 YOGYAKARTA</b></p>
        <p><b>TA 2020/2021</b></p>
    </div>

    <div class="col-md-12">
        <table class="col-md-12">
            <tr>
                <td>Kode siswa</td>
                <td>:</td>
                <td><?= $data['kode_siswa']; ?></td>
            </tr>
            <tr>
                <td>Nama siswa</td>
                <td>:</td>
                <td><?= $data['nama_lengkap']; ?></td>
            </tr>
            <tr>
                <td>Nama orang tua</td>
                <td>:</td>
                <td><?= !empty($data['nama_wali']) ? $data['nama_wali'] : $data['nama_ayah']; ?></td>
            </tr>
            <tr>
                <td>Sekolah asal</td>
                <td>:</td>
                <td><?= $data['asal_sekolah']; ?></td>
            </tr>
            <tr>
                <td>Pekerjaan Orang Tua</td>
                <td>:</td>
                <td><?= !empty($data['pekerjaan_wali']) ? $data['pekerjaan_wali'] : $data['pekerjaan_ayah']; ?></td>
            </tr>
            <tr>
                <td>No telepon/WA</td>
                <td>:</td>
                <td><?= !empty($data['no_telp_ortu']) ? $data['no_telp_ortu'] : $data['no_telp_wali']; ?></td>
            </tr>
        </table>
    </div>

    <div class="col-md-12">
        <table class="col-md-12">
            <tr>

                <td>1. Dana Pengembangan Sekolah</td>
                <td>Rp</td>
                <td><?= $data['dana_pengembangan']; ?></td>
            </tr>
            <tr>

                <td> 2. Dana Tahunan Siswa kelas VII </td>
                <td>Rp</td>
                <td><?= $data['dana_tahunan']; ?></td>
            </tr>
            <tr>

                <td>3. SPP</td>
                <td>Rp</td>
                <td><?= $data['spp']; ?></td>
            </tr>
            <tr>

                <td>4. Katering(kisaran biaya tahun lalu) </td>
                <td>Rp</td>
                <td><?= $data['katering']; ?></td>
            </tr>
            <tr>
                <td>5. Tabungan Wisata </td>
                <td>Rp</td>
                <td><?= $data['tabungan_wisata']; ?></td>
            </tr>
            <tr>
                <td><b>Total yang harus di bayar</b></td>
                <td>Rp</td>
                <td><?= $total_bayar; ?></td>
            </tr>
            <tr>
                <td colspan="3">6. Angsuran</td>
            </tr>
            <?php
            for ($i = 0; $i < count($angsuranPops); $i++) {
            ?>
                <tr>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Angsuran <?= $i + 1 ?> dibayar pada tanggal <?= date("d F Y", strtotime($tanggalAngsuranPops[$i])); ?></td>
                    <td>Rp</td>
                    <td><?= $angsuranPops[$i] ?></td>
                </tr>
            <?php } ?>

            <tr>
                <td colspan="3">Adapun Jika anak saya mengundurkan diri dari SMP Muhammadiyah 4 Yogyakarta atau diterima di
                    sekolah lain, maka saya akan :</td>
            </tr>
            <tr>
                <td colspan="3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Menginfakkan <b>Rp 1.000.000<b></td>
            </tr>
            <tr>
                <td colspan="3">Demikian Pernyataan kesepakatan biaya pendidikan ini kami buat dengan sebenarnya.</td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: end;">Yogyakarta, <?= date('d F Y') ?></td>
            </tr>
            <table class="col-md-12" style="width: 100%;">
                <tr style="text-align: center;">
                    <td><b>Pewawancara</b></td>
                    <td><b>Yang Menyatakan <br> Orang Tua/Wali Siswa</b></td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr>
                    <td><br></td>
                </tr>
                <tr style="text-align: center;">
                    <td>Admin PPDB</td>
                    <td><?= !empty($data['nama_wali']) ? $data['nama_wali'] : $data['nama_ayah']; ?></td>
                </tr>
            </table>
        </table>
    </div>




</body>
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

</html>
<?php
//otomatis muncul ketika laman di akses
echo "<script>window.print()</script>";
?>