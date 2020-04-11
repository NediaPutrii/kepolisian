<?php 

$koneksi = mysqli_connect("localhost","root","","dbkepolisiann");
 
$id_kejahatan    = $_POST["id_kejahatan"];
$nama_kejahatan      = $_POST["nama_kejahatan"];
$deskripsi   = $_POST["keterangan"];

$query = mysqli_query($koneksi,"UPDATE kejahatan SET 
id_kejahatan='$id_kejahatan',
nama_kejahatan='$nama_kejahatan', 
keterangan='$deskripsi' 
WHERE id_kejahatan='$id_kejahatan'");

//var_dump($query);
if ($query)
{
    echo "
    <script>
    alert('pasal berhasil diupdate');
    </script>
  ";
 header("location:../view/tampilkejahatan.php?pesan=update");
}else
{
    echo "
    <script>
    alert('data GAGAL diupdate');
    </script>
  ";
  header("location:../view/tampilkejahatan.php?pesan=gagal");

}

 
?>