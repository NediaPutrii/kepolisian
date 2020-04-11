<?php 
  require '../model/fungsi.php';
  

  if ( isset($_POST["save"])) {
    if (tambah5($_POST)>0) {
       

       echo "
        <script>
        alert('data berhasil ditambahkan');
        document.location.href = '../view/halamantambah4.php';
        </script>
      ";
        
    }else {
      echo "
      <script>
        alert('data gagal ditambahkan');
         document.location.href = '../view/tambahpenyidik.php';
        </script>
      ";
    }
  }elseif (isset($_POST["tambah"]) ) {
     if (tambah4($_POST)>0) {

       echo "
        <script>
        alert('data berhasil ditambahkan');
        document.location.href = '../view/tambahpenyidik.php';
        </script>
      ";
        }else {
      echo "
      <script>
        alert('data gagal ditambahkan');
         document.location.href = '../view/tambahpenyidik.php';
        </script>
      ";
    }
    
  }

       


?> 