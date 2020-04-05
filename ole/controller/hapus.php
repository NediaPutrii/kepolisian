
 <?php

include_once("../koneksi.php");


$conn->query("DELETE FROM laporan where no_lapkejadian='$_GET[id]'");


echo "<meta http-equiv='refresh' content='1;url=../view/halamantampil.php'>";
?> 
