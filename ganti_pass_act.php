<?php 
include 'scripts/config.php';
$user=$_POST['user'];
$lama=md5($_POST['lama']);
$baru=$_POST['baru'];
$ulang=$_POST['ulang'];

$cek=mysqli_query($mysqli, "select * from admin where pass='$lama' and uname='$user'");
if(mysqli_num_rows($cek)==1){
	if($baru==$ulang){
		$b = md5($baru);
		mysqli_query($mysqli, "update admin set pass='$b' where uname='$user'");
		header("location:ganti_pass.php?pesan=oke");
	}else{
		header("location:ganti_pass.php?pesan=tidaksama");
	}
}else{
	header("location:ganti_pass.php?pesan=gagal");
}

 ?>