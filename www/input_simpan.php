<?php include_once ('template_atas.php') ; ?>
<?php
  $nama		=$_POST['pengguna'];
  $password		=$_POST['kata_kunci'];
  $nama_lengkap		=$_POST['nama_lengkap'];
  if($nama=="admin")  $akses	= "toko";
  else if($nama=="cust") $akses	= "beli";

  $dataValid="YA";

  if(strlen(trim($nama))==0) {
	echo "User Admin Harus Diisi! <br/>";
	$dataValid="TIDAK"; }
	
  if(strlen(trim($password))==0) {
	echo "Password Harus Diisi! <br/>";
	$dataValid="TIDAK"; }
	
  if(strlen(trim($nama_lengkap))==0) {
	echo "Nama Lengkap Harus Diisi! <br/>";
	$dataValid="TIDAK"; }

  if($dataValid=="TIDAK") {
	echo "Masih Ada Kesalahan, silahkan perbaiki! <br/>"; 
	echo "<input type='button' value='kembali'
			onClick='self.history.back()'>";
	exit;
	}
  include "koneksi.php";

  $sql = "insert into pengguna
		(user,password,nama_lengkap,akses)
		values
		('$nama',md5('$password'),'$nama_lengkap','$akses')";
  $hasil = mysqli_query($kon, $sql);

  if(!$hasil){
	echo "Gagal Simpan, silahkan diulangi! <br /> ";
	echo mysqli_error($kon);
	echo "<br/> <input type='button' value='kembali'
		onClick='self.history.back()'>";
	exit;
	} else {
		echo "Simpan data berhasil"; }
 ?>
 <?php include_once ('template_bawah.php') ; ?>