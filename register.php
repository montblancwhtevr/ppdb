 <!-- Content-->
            <div class="card-content black-text">
              <span class="card-title"><h5> <i class="material-icons prefix">mode_edit</i>Pendaftaran Calon Siswa</h5></span>
               <ul class="collection"></ul>
                <div class="card-panel"> 
                <?php 
include'inc/koneksi.php';
$carikode = mysqli_query($con,"select max(kode_siswa) from tb_siswa") or die(mysqli_error());
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
                  <form action="" method="post" enctype="multipart/form-data" class="col s12">
                    <div class="row">
                      <div class="input-field col s12">
                        <i class="material-icons prefix">label_outline</i>
                        <input name="kode_siswa" type="text" value="<?php echo "$hasilkode";?>" id="label_outline" type="text" class="validate">
                        <label for="icon_prefix">Kode Siswa</label>
                      </div>
                      <div class="input-field col s12">
                        <i class="material-icons prefix">person_pin</i>
                        <input name="nama_lengkap" id="person_pin" type="text" class="validate">
                        <label for="icon_telephone">Nama Lengkap</label>
                      </div>                  
                       <div class="input-field col s12">
                        <i class="material-icons prefix">perm_identity</i>
                        <input name="username" id="perm_identity" type="text" class="validate">
                        <label for="icon_telephone">Username</label>
                      </div>
                       <div class="input-field col s12">
                        <i class="material-icons prefix">lock_outline</i>
                        <input name="password" id="lock_outline" type="text" class="validate">
                        <label for="icon_telephone">Password</label>
                      </div>
                      <div class="input-field col s12">
                        <i class="material-icons prefix">lock_outline</i>
                        <input name="pass" id="icon_telephone" type="text" class="validate">
                        <label for="icon_telephone">Ulangi Password</label>
                      </div>
                      <div class="input-field col s12">
                        <i class="material-icons prefix">add_location</i>
                        <input name="alamat" id="icon_telephone" type="text" class="validate">
                        <label for="icon_telephone">Alamat</label>
                      </div>
                      
                      <div class="file-field input-field col s12">
                        <div class="waves-effect black waves-light btn-large">
                        <span>Foto</span>                        
                        <input name="foto" type="file" multiple>
                        </div>
                        <div class="file-path-wrapper">                         
                          <input type="hidden" name="siswa" value="siswa">
                          <input type="hidden" name="keterangan" value="SEDANG DIPROSES OLEH PETUGAS">
                        </div>
                      </div> 
                         <div class="input-field col s12">
                         	<input name="simpan" type="submit" value="DAFTAR" class="btn waves-effect light-blue waves-light">
                          <button class="btn waves-effect red accent-3 waves-light" type="reset" name="action">Reset
                          <i class="material-icons right">loop</i>
                          </button>
                      </div>

                    </div>                    
                  </form>
        <?php
      $kode_siswa = @$_POST['kode_siswa'];
      $nama_lengkap = @$_POST['nama_lengkap'];
      $username = @$_POST['username'];      
      $password=md5(@$_POST['password']);
      $pass = @$_POST['pass'];      
      $alamat = @$_POST['alamat'];
      $siswa = @$_POST['siswa'];
      $keterangan = @$_POST['keterangan'];

      $sumber = @$_FILES['foto']['tmp_name'];
      $target = 'assets/gambar/user/';
      $nama_gambar = @$_FILES['foto']['name'];


      $simpan_data = @$_POST['simpan']; 

      if ($simpan_data) {

        if ($kode_siswa == "" || $username == "" || $password == "" || $pass == "" || $nama_lengkap == "" || $alamat== ""|| $nama_gambar==""){
                   ?>

                   <script type="text/javascript">
                  
         alert("Inputan harus diisi, silahkan Lengkapi lagi ");
                   </script>
                   <?php
           
       } else{


$pindah = move_uploaded_file($sumber, $target.$nama_gambar);

if ($pindah) {
  $query = "INSERT INTO tb_siswa
  VALUES
  (
    '$kode_siswa',
    '$username',
    '$password',
    '$pass',
    '$nama_lengkap',
    '',
    '',
    '1981-01-01',
    '0',
    '0',
    '-',
    '$alamat',
    '-',
    '0',
    '-',
    '0',
    '0',
    '0',
    '0',
    '0',
    '$keterangan',
    '$siswa',
    '$nama_gambar'
  )";
  $result = mysqli_query($con,$query);
  var_dump($query);
  var_dump($result);
   ?>

         <script type="text/javascript">
          alert(" Sukses ! Berhasil Mendaftar.. SILAHKAN LOGIN !!"); 
          window.location.href="?page=login";     
         </script>
         <?php

       } else{


        ?>
         <script type="text/javascript">
                  
         alert("gambar gagal disimpan  !!");
          </script>         

        <?php
       }

        }

        }
      

     ?>
       

                </div>
            </div>
            <!--END Content-->