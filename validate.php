<?php
session_start();
$User= "admin";
$Pass="admin";
if(isset($_POST['username']) and isset($_POST['password'])) {
  if($_POST['username']==$User and $_POST['password']==$Pass) {
    $_SESSION['status_login']=1;
    $_SESSION['username']=$_POST['username'];
    $_SESSION['password']=$_POST['password'];
    echo "<h1 align='center'>Klik <a href='home.html'><masuk</a> untuk ke menu utama</h1>";
  }
  else {
    echo "<h1 align='center'>Login SALAH..!!<h1>";
    die("<h1 align='center'>Silakan login kembali <a href='tugas.php'>Disini</a><h1>");
  }
}
else {
  echo "Data tidak lengkap..!!";
} 
?>