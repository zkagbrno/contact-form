<?php
$koneksi = mysqli_connect("localhost","root","","azka");
// cek koneksi
if (!$koneksi){
  die("Error koneksi: " . mysqli_connect_errno());
}
?>
