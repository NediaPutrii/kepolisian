<?php 

$koneksi = mysqli_connect("localhost","root","","dbkepolisiann");
if ($koneksi)
{
    echo "BERHASIL";
}else
{
    echo "GAGAL";
}
 
include 'koneksi.php';
$nolaporan      = $_POST["nolaporan"];
$tkp            = $_POST["tkp"];
$tgl_kejadian   = $_POST["tgl_kejadian"];
$penanganan     = $_POST["penanganan"];
$status         = $_POST["status"];
$latitude       = $_POST['lat'];
$longitude      = $_POST['lng'];
 
$query = mysqli_query($koneksi,"UPDATE laporan SET 
no_lapkejadian='$nolaporan', 
tempat_kejadian='$tkp', 
tgl_kejadian='$tgl_kejadian', 
penanganan='$penanganan',
status_kejadian='$status',
latitude='$latitude',
longitude='$longitude' WHERE no_lapkejadian='$nolaporan'");
var_dump($query);
if ($query)
{
    echo "
    <script>
    alert('data berhasil diupdate');
    </script>
  ";
 header("location:../view/halamantampil.php?pesan=update");
}else
{
    echo "
    <script>
    alert('data GAGAL diupdate');
    </script>
  ";
  header("location:../view/halamantampil.php?pesan=gagal");

}

 
?>