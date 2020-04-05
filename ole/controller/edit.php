<?php 

	require '../model/fungsi.php';

	$id = $_GET["id"];

	$laporan = lihat("select * from laporan where id= $id")[0];

	if ( isset($_POST["ubah"]) ) {
    if ( edit($_POST) > 0) {
      echo "
        <script>
        alert('data berhasil diupdate');
        document.location.href = '../index.php';
        </script>
      ";
    }
    else {
      echo "
      <script>
        alert('data gagal diupdate');
        document.location.href = '../index.php';
        </script>
      ";
    }
  }
 ?>
