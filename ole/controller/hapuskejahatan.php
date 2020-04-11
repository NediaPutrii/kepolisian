<?php 
$koneksi = mysqli_connect("localhost","root","","dbkepolisiann");
$id_kejahatan = $_GET['id'];
 mysqli_query($koneksi,"DELETE FROM detail_pasal WHERE id_kejahatan='$id_kejahatan'");

$cek=mysqli_query($koneksi,"DELETE FROM kejahatan WHERE id_kejahatan='$id_kejahatan'");
//mysqli_query($koneksi,"DELETE FROM jenis_kejahatan WHERE id_jeniskejahatan='$id_kejahatan'")or die(mysql_error());

 if ($cek)
 {
     echo "Berhasil";
 }else
 {
    echo "GAGAl";
}
header("location:../view/tampilkejahatan.php");
?>