<?php 

    session_start();

if( !isset($_SESSION["login"])){
  header("Location: ../login.php");
  exit;
 ?>

<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Halaman Data Kepolisian</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.css"/>
    </head>
    <body>

    <h1 class="title" align="center" style="margin-top: 40px;">DAFTAR XXXXXXX</h1>

    <div class="container">
        <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No.Laporan Kejadian</th>
                    <th>Tempat Kejadian</th>
                    <th>Tanggal Kejadian</th>
                    <th>Pelaku</th>
                    <th>Pelapor</th>
                    <th>Saksi</th>
                    <th>Penyidik</th>
                    <th>Tools</th>

                </tr>
            </thead>
            <tbody>

                 <?php 

                       include '../controller/lihat.php';
                       $no=1;
                 ?>
         
            <?php foreach($laporan as $row) :?>
                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $row["no_lapkejadian"]; ?></td>
                    <td><?php echo $row["tempat_kejadian"]; ?></td>
                    <td><?php echo $row["tgl_kejadian"]; ?></td>
                    <td><?php echo $row["nama"]; ?></td>
                    <td><?php echo $row["status_kejadian"]; ?></td>
                    <td><?php echo $row["latitude"]; ?></td>
                    <td><?php echo $row["longitude"]; ?></td>
                    
                    <td> 
                      
                        <a href="../view/halamanedit.php?id=<?php echo $row["no_lapkejadian"] ?>"class="button is-warning">Edit</a>
                        <a href="../controller/hapus.php?id=<?php echo $row["no_lapkejadian"] ?>"class="button is-danger">Hapus</a>
                    </td>
                </tr>
            <?php $no++; ?>
            <?php endforeach;?>
            </tbody>
        </table>

        <a class="button is-primary" href="tambahlaporan.php">Tambah Data</a>
        <a class="button is-primary" href="halamandetail.php">Detail Data</a>

    </div>

    </body>
</html>
