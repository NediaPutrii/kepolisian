<?php include '../koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Form Laporan</title>
</head>
<body>
  
  <label for="">Kali-ke</label>
  <input type="text" name="kali_ke" value="<?php 
     $id=$_GET['id'];
     $sql    ="SELECT * FROM detailstatus where nik='$id'";
     $query    =mysqli_query($conn,$sql);
     $count    =mysqli_num_rows($query);
     $result=$count+1;
     echo "$result";?>" >

     

     <?php $query2 = "SELECT * FROM penduduk WHERE nik='$id'";
     
     $sql = mysqli_query($conn, $query2);
     while ($r = mysqli_fetch_array($sql)){
      ?>
      <label for="">Nama</label>
      <input type="text" value="<?php echo $r['nama']; ?>">

      <label for="">NIK</label>
      <input type="text" value="<?php echo $r['nik']; ?>">

      <label for="">Alamat</label>
      <input type="text" value="<?php echo $r['alamat']; ?>">

      <label for="">No.Telp</label>
      <input type="text" value="<?php echo $r['notlp']; ?>">
    
     

     <?php } ?>

</body>
</html>