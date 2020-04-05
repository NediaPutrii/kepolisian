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

    <h1 class="title" align="center" style="margin-top: 40px;">Laporan Kepolisian</h1>

    <form action="" method="post">
    <div class="container">
            <tr>
                <td>
                    Pilih Bulan (Jika Perlu)
                </td>
                <br>
                <td>
                    <select name="bulan" id="">
                            <option value="01">Januari</option>
                            <option value="02">Februari</option>
                            <option value="03">Maret</option>
                            <option value="04">April</option>
                            <option value="05">Mei</option>
                            <option value="06">Juni</option>
                            <option value="07">Juli</option>
                            <option value="08">Agustus</option>
                            <option value="09">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select>
                </td>
                <td>          
                    <input type="submit" value="Cari">  
                </td>
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
                    <th>Tools</th>

                </tr>
            </thead>
            <tbody>

                 <?php 

                       include '../controller/lihat.php';
                       $no=1;
                 ?>
         
            <?php 

             if(isset($_POST['bulan']))
             {
                 $koneksi = mysqli_connect("localhost","root","","dbkepolisiann");
                 $bulan = $_POST['bulan'];
                 $laporan = mysqli_query($koneksi, "SELECT * FROM laporan where month(tgl_kejadian)='$bulan'" );
             }
             else
             {
                $koneksi = mysqli_connect("localhost","root","","dbkepolisiann");
                $laporan = mysqli_query($koneksi, "SELECT * FROM laporan" );

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
                    
                    <td> 
                      
                        <a href="../view/haledit.php?id=<?php echo $row["no_lapkejadian"] ?>"class="button is-warning">Edit</a>
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
