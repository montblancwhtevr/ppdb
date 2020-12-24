

<?php
include 'inc/koneksi.php';
$kdjab = @$_GET['kdjab'];
mysqli_query($con,"delete from tb_agama where kode_agama = '$kdjab'") or die(mysqli_error());
?>
 <script type="text/javascript">
        alert(" Sukses !", "Data berhasil di hapus!", "success") 
        window.location.href="?page=admin&action=agama";       
 </script>


