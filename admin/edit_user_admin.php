<?php
include 'inc/koneksi.php';
$kdsis = @$_GET['kdsis'];
$sql = mysqli_query($con,"select * from tb_user where kode_user = '$kdsis'") or die(mysqli_error());
$data = mysqli_fetch_array($sql);

?>
<div class="row">
<div class="col-lg-12">

<div class="panel panel-success">
<div class="panel-heading">
<span class="glyphicon glyphicon-edit" style="font-size: 23px;"></span>
<b>Edit User Admin/Kepsek</b></div>
<div class="panel-body">
<div class="col-md-12">
<form action="" method="post">     	
<div class="form-group">
<label>Kode</label>
<input name="kode_user" type="text" class="form-control" value="<?php echo $data['kode_user']; ?> ">
</div>

<div class="form-group">
<label>Username</label>
<input name="username" type="text" class="form-control" value="<?php echo $data['username']; ?> ">
</div>

<div class="form-group">
<label>Password</label>
<input name="pass" type="text" class="form-control" value="<?php echo $data['pass']; ?> ">
</div>
<input type="submit" name="edit" class="btn btn-primary" value="Edit Data">

</div>
</form>
<?php
include 'inc/koneksi.php';
if (@$_POST['edit']) {
@$username = mysqli_real_escape_string($con,$_POST['username']);
@$pass = mysqli_real_escape_string($con,$_POST['pass']);
@$level = mysqli_real_escape_string($con,$_POST['level']);
mysqli_query($con,"update tb_user set username='$username',pass='$pass',password =md5('$pass') where kode_user='$kdsis' ") or die(mysqli_error());
  ?>
<script type="text/javascript">
alert(" Data Telah Terubah !!");
window.location.href="?page=admin&action=user";     
</script>
<?php 
}



?> 

</div>
</div>
</div>


	</div>
</div>


</div>


				