<?php 
include 'inc/koneksi.php';
$kdsis=$_GET['kdsis'];
mysqli_query($con,"delete from tb_user where kode_user='$kdsis' ") or die(mysqli_error());
 ?>
 <script type="text/javascript">
 	alert("Data Telah Terhapus !!");
 	window.location.href="?page=admin&action=user";
 </script>