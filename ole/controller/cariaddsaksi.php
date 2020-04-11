<?php 
  require '../model/fungsi.php';
  
  if ( isset($_POST["tambah"]) ) {
          
      if (tambah6($_POST)>0) {

         if (tambah3($_POST)>0 ) {

         echo "
        <script>
        alert('data berhasil ditambahkan');
        document.location.href = '../view/tambahsaksi.php';
        </script>
      ";
        }
          }else {
              echo "
              <script>
                alert('data gagal ditambahkan');
                document.location.href = '../view/tambahlaporan.php';
                </script>
              ";
            }
          }else if(isset($_POST["save"])){
            
                  
              if (tambah6($_POST)>0) {

                 if (tambah3($_POST)>0 ) {

                 echo "
                <script>
                alert('data berhasil ditambahkan');
                document.location.href = '../view/tambahterlapor.php';
                </script>
              ";
                }
                  }else {
                      echo "
                      <script>
                        alert('data gagal ditambahkan');
                        document.location.href = '../view/tambahlaporan.php';
                        </script>
                      ";
                    }
          }

?> 