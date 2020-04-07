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
                    <th>ID Pasal</th>
                    <th>Pasal</th>
                    <th>Isi Pasal</th>
                    <th>Tool</th>
                </tr>
                <tr>
                    <?php 
                        $koneksi = mysqli_connect("localhost","root","","dbkepolisiann");
                        $hasil = mysqli_query($koneksi,"SELECT * FROM pasal");
                        while($ambil=$hasil->fetch_assoc()){ 
                    ?>
                    <td><?php echo $ambil['id_pasal']; ?></td>
                    <td><?php echo $ambil['pasal']; ?></td>
                    <td><?php echo $ambil['isi_pasal']; ?></td>
                    <td>
                        <a href="../view/haleditpasal.php?id=<?php echo $ambil["id_pasal"] ?>"class="button is-warning">Edit</a>
                        <a href="../controller/hapuspasal.php?id=<?php echo $ambil["id_pasal"] ?>"class="button is-danger">Hapus</a>
                    </td>
                </tr>
                    <?php } ?>

        </table>
    </div>
  </section>

        

  </body>
</html>