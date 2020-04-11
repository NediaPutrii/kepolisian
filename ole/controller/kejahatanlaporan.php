<?php 

$koneksi = mysqli_connect("localhost","root","","dbkepolisiann");
 
$id_kejahatan    = $_POST["kejahatan"];
$nolaporan = $_POST['nolaporan'];

$query = mysqli_query($koneksi,"INSERT into detail_kejahatan VALUES ('$id_kejahatan','$nolaporan')");
//var_dump($query);
if ($query)
{
    echo "
    <script>
    alert('pasal berhasil diupdate');
    </script>
  ";
 header("location:../index.php?pesan=update");
}else
{
    echo "
    <script>
    alert('data GAGAL diupdate');
    </script>
  ";
  header("location:../view/halamantambah4.php?pesan=gagal");

}

 
?>