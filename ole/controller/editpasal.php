<?php 

$koneksi = mysqli_connect("localhost","root","","dbkepolisiann");
 
$id_pasal    = $_POST["id_pasal"];
$pasal       = $_POST["pasal"];
$isi_pasal   = $_POST["isi_pasal"];

$query = mysqli_query($koneksi,"UPDATE pasal SET 
id_pasal='$id_pasal',
pasal='$pasal', 
isi_pasal='$isi_pasal' 
WHERE id_pasal='$id_pasal'");
//var_dump($query);
if ($query)
{
    echo "
    <script>
    alert('pasal berhasil diupdate');
    </script>
  ";
 header("location:../view/tampilpasal.php?pesan=update");
}else
{
    echo "
    <script>
    alert('data GAGAL diupdate');
    </script>
  ";
  header("location:../view/tampilpasal.php?pesan=gagal");

}

 
?>