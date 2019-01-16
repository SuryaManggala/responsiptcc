<?php include_once ('template_atas.php') ; ?>
<div style="background: red">
<?php 
	session_start(); 
	echo "SELAMAT DATANG <br/>" ;
	echo "USER : ".$_SESSION["user"]."<br/>" ;
	echo "NAMA : ".$_SESSION["nama_lengkap"]."<br/>" ; 
	echo "AKSES : ".$_SESSION["akses"]."<br/>" ; 
?>
<hr/> <br/> 
<hl>INI HALAMAN SATU</hl> 
</div>
<?php include_once ('template_bawah.php') ; ?>