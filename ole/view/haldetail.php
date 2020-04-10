<?php $no_lapkejadian=$_GET['id']; ?>
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Detail Laporan</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.css"/>
    </head>
    <body>
    <?php 
            $koneksi = mysqli_connect("localhost","root","","dbkepolisiann");
            $query = mysqli_query($koneksi, "SELECT * from laporan 
            JOIN detailpenduduk ON laporan.no_lapkejadian=detailpenduduk.no_lapkejadian 
            JOIN penduduk ON detailpenduduk.nik=penduduk.nik 
            JOIN detailstatus ON penduduk.nik=detailstatus.nik 
            JOIN status_penduduk ON detailstatus.id_status=status_penduduk.id_status 
            join detail_kejahatan on laporan.no_lapkejadian=detail_kejahatan.no_lapkejadian 
            join kejahatan on detail_kejahatan.id_kejahatan=kejahatan.id_kejahatan 
            join detail_pasal on kejahatan.id_kejahatan=detail_pasal.id_kejahatan 
            join pasal on detail_pasal.id_pasal=pasal.id_pasal 
            join detail_penyidik on laporan.no_lapkejadian=detail_penyidik.no_lapkejadian 
            join petugaskepolisian on detail_penyidik.nrp=petugaskepolisian.nrp where laporan.no_lapkejadian='$no_lapkejadian'" );
            $data = mysqli_fetch_assoc($query);
    ?><br><br>
    <center>
    <img  src="lambangpolri.png" alt="" sizes="" srcset="" width="100" ></center>
    <h1 class="title" align="center" style="margin-top: 40px;">Laporan Polisi</h1>
    <h1 class="subtitle" align="center" style="margin-top: 40px;">Nomor Laporan : <?php echo $data['no_lapkejadian']; ?></h1> <hr>

    <div class="container">
    <!-- pelapor -->
           <hr><b>Yang Melaporkan</b><hr>
           <table >
                <tr>
                    <td width="250px">Nama    </td>
                    <?php
                        $koneksi = mysqli_connect("localhost","root","","dbkepolisiann");
                        $pelapor = mysqli_query($koneksi, "SELECT * from laporan 
                        JOIN detailpenduduk ON laporan.no_lapkejadian=detailpenduduk.no_lapkejadian 
                        JOIN penduduk ON detailpenduduk.nik=penduduk.nik 
                        JOIN detailstatus ON penduduk.nik=detailstatus.nik 
                        JOIN status_penduduk ON detailstatus.id_status=status_penduduk.id_status 
                        join detail_kejahatan on laporan.no_lapkejadian=detail_kejahatan.no_lapkejadian 
                        join kejahatan on detail_kejahatan.id_kejahatan=kejahatan.id_kejahatan 
                        join detail_pasal on kejahatan.id_kejahatan=detail_pasal.id_kejahatan 
                        join pasal on detail_pasal.id_pasal=pasal.id_pasal where laporan.no_lapkejadian='$no_lapkejadian' and detailstatus.id_status='S01'" );
                        $ambilpelapor = mysqli_fetch_assoc($pelapor); 
                    ?>
                    <td>: <?php echo $ambilpelapor['nama'] ?></td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td>: <?php echo $ambilpelapor['nik'] ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>: <?php echo $ambilpelapor['jk'] ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: <?php echo $ambilpelapor['alamat'] ?></td>
                </tr>
                <tr>
                    <td>No. Telepon</td>
                    <td>: <?php echo $ambilpelapor['notlp'] ?></td>
                </tr>
           </table>


    <!-- Saksi -->
           <hr><b>Saksi</b><hr>
           <table >
                <tr>
                    <td width="250px">Nama    </td>
                    <?php
                        $koneksi = mysqli_connect("localhost","root","","dbkepolisiann");
                        $saksi = mysqli_query($koneksi, "SELECT * from laporan 
                        JOIN detailpenduduk ON laporan.no_lapkejadian=detailpenduduk.no_lapkejadian 
                        JOIN penduduk ON detailpenduduk.nik=penduduk.nik 
                        JOIN detailstatus ON penduduk.nik=detailstatus.nik 
                        JOIN status_penduduk ON detailstatus.id_status=status_penduduk.id_status 
                        join detail_kejahatan on laporan.no_lapkejadian=detail_kejahatan.no_lapkejadian 
                        join kejahatan on detail_kejahatan.id_kejahatan=kejahatan.id_kejahatan 
                        join detail_pasal on kejahatan.id_kejahatan=detail_pasal.id_kejahatan 
                        join pasal on detail_pasal.id_pasal=pasal.id_pasal where laporan.no_lapkejadian='$no_lapkejadian' and detailstatus.id_status='S03'" );
                        $ambilsaksi = mysqli_fetch_assoc($saksi); 
                    ?>
                    <td>: <?php echo $ambilsaksi['nama'] ?></td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td>: <?php echo $ambilsaksi['nik'] ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>: <?php echo $ambilsaksi['jk'] ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: <?php echo $ambilsaksi['alamat'] ?></td>
                </tr>
                <tr>
                    <td>No. Telepon</td>
                    <td>: <?php echo $ambilsaksi['notlp'] ?></td>
                </tr>
           </table>


    <!-- Tersangka -->
        <hr><b>Terlapor/ Tersangka</b><hr>
           <table >
                <tr>
                    <td width="250px">Nama    </td>
                    <?php
                        $koneksi = mysqli_connect("localhost","root","","dbkepolisiann");
                        $terlapor = mysqli_query($koneksi, "SELECT * from laporan 
                        JOIN detailpenduduk ON laporan.no_lapkejadian=detailpenduduk.no_lapkejadian 
                        JOIN penduduk ON detailpenduduk.nik=penduduk.nik 
                        JOIN detailstatus ON penduduk.nik=detailstatus.nik 
                        JOIN status_penduduk ON detailstatus.id_status=status_penduduk.id_status 
                        join detail_kejahatan on laporan.no_lapkejadian=detail_kejahatan.no_lapkejadian 
                        join kejahatan on detail_kejahatan.id_kejahatan=kejahatan.id_kejahatan 
                        join detail_pasal on kejahatan.id_kejahatan=detail_pasal.id_kejahatan 
                        join pasal on detail_pasal.id_pasal=pasal.id_pasal
                         where laporan.no_lapkejadian='$no_lapkejadian' and detailstatus.id_status='S04'" );
                        $ambilterlapor = mysqli_fetch_assoc($terlapor); 
                    ?>
                    <td>: <?php echo $ambilterlapor['nama'] ?></td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td>: <?php echo $ambilterlapor['nik'] ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>: <?php echo $ambilterlapor['jk'] ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: <?php echo $ambilterlapor['alamat'] ?></td>
                </tr>
                <tr>
                    <td>No. Telepon</td>
                    <td>: <?php echo $ambilterlapor['notlp'] ?></td>
                </tr>
           </table>



<!-- Peristiwa yang dilaporkan -->
        <hr><b>Peristiwa yang Dilaporkan</b><hr>
           <table >
                <tr>
                    <td width="250px">Tanggal Kejadian   </td>
                    <td>: <?php echo $data['tgl_kejadian'] ?></td>
                </tr>
                <tr>
                    <td>Tempat kejadian</td>
                    <td>: <?php echo $data['tempat_kejadian'] ?></td>
                </tr>
                <tr>
                    <td>Status Kejadian</td>
                    <td>: <?php echo $data['status_kejadian'] ?></td>
                </tr>
                <tr>
                    <td>Kejahatan yang Terjadi</td>
                    <td>: <?php echo $data['nama_kejahatan'] ?></td>
                </tr>
                <tr>
                    <td>Pasal terkait</td>
                    <td>: <?php echo $data['pasal'] ?></td>
                </tr>
           </table>
           <hr><br><br>

           <div>
           <a href="../laporan/cetaklaporan.php?id=<?php echo $no_lapkejadian;?>" class="button is-warning"><i class="fas fa-edit fa-sm"></i>Cetak Laporan</a href=""></a>
           <a class="button is-primary" href="halamantampil.php">Kembali</a>
           </div>


           <div  class="container" id="penyidik" style="margin-right:100px;margin-left:600px;text-align:center;" >
 
                <b>Penyidik</b>
                <br><br><br><br>
                <h5><?php echo $data['nama'] ?></h5>
                <p style="text-decoration: overline;">NRP : <?php echo $data['nrp'] ?></p>
         
           </div>
    </div>
    <br><br>
  


    </body>
</html>
