<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Halaman Data Kepolisian (Kecamatan)</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.css"/>
    </head>
    <body>

    <h1 class="title" align="center" style="margin-top: 40px;">Laporan Kepolisian</h1>

    <form action="" method="post">
    <div class="container">
    <tr>
            <td>Pilih Kecamatan (Jika Perlu)</td>
            <br>
            <td>
            <select name="kecamatan" id="">
                    <?php
                        $koneksi = mysqli_connect("localhost","root","","dbkepolisiann");
                        $hasil = mysqli_query($koneksi,"SELECT * FROM kecamatan order by id_kecamatan");  
                        
                    ?>
                            <option value="" selected>Pilih Kecamatan</option>
                        <?php while($ambil=$hasil->fetch_assoc()){ ?>
                            <option value="<?php echo $ambil['id_kecamatan']; ?>"><?php echo $ambil['kecamatan']; ?></option>
                            
                            <?php }  ?>
                </select>
            </td>
            <td><input type="submit" value="Cari"></td>
            </tr>
            </div>
    </form>
    <br>

    <div class="container">
        <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No.Laporan Kejadian</th>
                    <th>Tempat Kejadian</th>
                    <th>Tanggal Kejadian</th>
                    <th>Penanganan</th>
                    <th>Status Kejadian</th>
                    <th>Longitude</th>
                    <th>Latitude</th>
                    <th>Id kecamatan</th>
                    <th>Tools</th>

                </tr>
            </thead>
            <tbody>

                 <?php 

                       include '../controller/lihat.php';
                       $no=1;
                 ?>
         
            <?php 

             if(isset($_POST['kecamatan']))
             {
                $koneksi = mysqli_connect("localhost","root","","dbkepolisiann");
                $kecamatan = $_POST['kecamatan'];
                $laporan = mysqli_query($koneksi, "SELECT * from laporan where id_kecamatan='$kecamatan'" );                
             }
             else
             {
                $koneksi = mysqli_connect("localhost","root","","dbkepolisiann");
                $laporan = mysqli_query($koneksi, "SELECT * from laporan" );

             }
            
            
            foreach($laporan as $row) :?>
                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $row["no_lapkejadian"]; ?></td>
                    <td><?php echo $row["tempat_kejadian"]; ?></td>
                    <td><?php echo $row["tgl_kejadian"]; ?></td>
                    <td><?php echo $row["penanganan"]; ?></td>
                    <td><?php echo $row["status_kejadian"]; ?></td>
                    <td><?php echo $row["latitude"]; ?></td>
                    <td><?php echo $row["longitude"]; ?></td>
                    <td><?php echo $row["id_kecamatan"]; ?></td>                    
                    <td> 
                      
                        <a href="../view/haledit.php?id=<?php echo $row["no_lapkejadian"] ?>"class="button is-warning">Edit</a>
                        <a href="../controller/hapus.php?id=<?php echo $row["no_lapkejadian"] ?>"class="button is-danger">Hapus</a>
                        <a href="../view/haldetail.php?id=<?php echo $row["no_lapkejadian"] ?>"class="button is-primary">Detail</a>

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
