<?php 
	
	require'../model/fungsi.php';

	$id=$_REQUEST["id"];

    if ( hapus($id) > 0) {
      echo "
        <script>
        alert('data berhasil dihapus');
        document.location.href = '../view/halamantampil.php';
        </script>
      ";
    }
    else {
      echo "
      <script>
        alert('data gagal dihapus');
        document.location.href = '../view/halamantampil.php';
        </script>
      ";
    }


 ?>