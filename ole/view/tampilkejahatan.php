<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pasal Kejahatan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body>
  <section class="section">
    <div class="container" style="margin-bottom:30px;">
      <h1 class="title">
        Pasal Kejahatan 
      </h1>
    </div>
    <div class="container">
        <table class="table is-hoverable">
                <tr>
                    <th>ID Kejahatan</th>
                    <th>Kejahatan</th>
                    <th>Deskripsi</th>
                    <th>Jenis Kejahatan</th>
                    <th>Tool</th>
                </tr>
                <tr>
                    <?php 
                        $koneksi = mysqli_connect("localhost","root","","dbkepolisiann");
                        $hasil = mysqli_query($koneksi,"SELECT id_kejahatan, nama_kejahatan, keterangan,jenis_kejahatan.jenis_kejahatan,jenis_kejahatan.id_jeniskejahatan FROM kejahatan JOIN jenis_kejahatan on kejahatan.Id_jeniskejahatan=jenis_kejahatan.id_jeniskejahatan");
                        while($ambil=$hasil->fetch_assoc()){ 
                    ?>
                    <td><?php echo $ambil['id_kejahatan']; ?></td>
                    <td><?php echo $ambil['nama_kejahatan']; ?></td>
                    <td><?php echo $ambil['keterangan']; ?></td>
                    <td><?php echo $ambil['jenis_kejahatan']; ?></td>
                    <td>
                        <a href="../view/haleditkejahatan.php?id=<?php echo $ambil["id_kejahatan"] ?>"class="button is-warning">Edit</a>
                        <a href="../controller/hapuskejahatan.php?id=<?php echo $ambil["id_kejahatan"] ?>"class="button is-danger">Hapus</a>
                    </td>
                </tr>
                    <?php } ?>

        </table>
        <a class="button is-primary" href="../index.php">Home</a>
    </div>
  </section>

        

  </body>
</html>