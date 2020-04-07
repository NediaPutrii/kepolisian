<?php 
$koneksi = mysqli_connect("localhost","root","","dbkepolisiann");
$id_pasal = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM pasal WHERE id_pasal='$id_pasal'")or die(mysql_error());
 
header("location:../view/tampilpasal.php");
?>