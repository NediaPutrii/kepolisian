<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Polres Kota Pekanbaru</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);<?php 
      $koneksi = mysqli_connect("localhost","root","","dbkepolisiann");
      $januari=mysqli_query($koneksi,"SELECT tgl_kejadian,no_lapkejadian FROM laporan where month(tgl_kejadian)='01'") ;
      $februari=mysqli_query($koneksi,"SELECT tgl_kejadian,no_lapkejadian FROM laporan where month(tgl_kejadian)='02'") ;
      $maret=mysqli_query($koneksi,"SELECT tgl_kejadian,no_lapkejadian FROM laporan where month(tgl_kejadian)='03'") ;
      $april=mysqli_query($koneksi,"SELECT tgl_kejadian,no_lapkejadian FROM laporan where month(tgl_kejadian)='04'") ;
      $mei=mysqli_query($koneksi,"SELECT tgl_kejadian,no_lapkejadian FROM laporan where month(tgl_kejadian)='05'") ;
      $juni=mysqli_query($koneksi,"SELECT tgl_kejadian,no_lapkejadian FROM laporan where month(tgl_kejadian)='06'") ;
      $juli=mysqli_query($koneksi,"SELECT tgl_kejadian,no_lapkejadian FROM laporan where month(tgl_kejadian)='07'") ;
      $agustus=mysqli_query($koneksi,"SELECT tgl_kejadian,no_lapkejadian FROM laporan where month(tgl_kejadian)='08'") ;
      $september=mysqli_query($koneksi,"SELECT tgl_kejadian,no_lapkejadian FROM laporan where month(tgl_kejadian)='09'") ;
      $oktober=mysqli_query($koneksi,"SELECT tgl_kejadian,no_lapkejadian FROM laporan where month(tgl_kejadian)='10'") ;
      $november=mysqli_query($koneksi,"SELECT tgl_kejadian,no_lapkejadian FROM laporan where month(tgl_kejadian)='11'") ;
      $desember=mysqli_query($koneksi,"SELECT tgl_kejadian,no_lapkejadian FROM laporan where month(tgl_kejadian)='12'") ;

      $jml_januari = mysqli_num_rows($januari);
      $jml_februari = mysqli_num_rows($februari);
      $jml_maret = mysqli_num_rows($maret);
      $jml_april = mysqli_num_rows($april);
      $jml_mei = mysqli_num_rows($mei);
      $jml_juni = mysqli_num_rows($juni);
      $jml_juli = mysqli_num_rows($juli);
      $jml_agustus = mysqli_num_rows($agustus);
      $jml_september = mysqli_num_rows($september);
      $jml_oktober = mysqli_num_rows($oktober);
      $jml_november = mysqli_num_rows($november);
      $jml_desember = mysqli_num_rows($desember);
?>

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Bulan', 'Kejadian'],
          ['Januari', <?php echo $jml_januari ?>],
          ['Februari', <?php echo $jml_februari ?>],
          ['Maret', <?php echo $jml_maret ?>],
          ['April', <?php echo $jml_april ?>],
          ['Mei', <?php echo $jml_mei ?>],
          ['Juni', <?php echo $jml_juni ?>],
          ['Juli', <?php echo $jml_juli ?>],
          ['Agustus', <?php echo $jml_agustus ?>],
          ['September', <?php echo $jml_september ?>],
          ['Oktober', <?php echo $jml_oktober ?>],
          ['November', <?php echo $jml_november ?>],
          ['Desember', <?php echo $jml_desember ?>]
        ]);

        var options = {
          chart: {
            title: 'Jumlah Kejadian per Bulan',
            subtitle: '',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>


  <body>
  <section class="hero is-warning is-bold">
  	<div class="hero-body">
  		<div class="container">
    	<img src="img\Lambang_Polda_Riau.png" alt="" width="100px" height="100px">
    	<h1 class="title">
         Kepolisian Resor
        </h1> 
      <p class="subtitle">
         Kota <strong>Pekanbaru</strong>
      </p>
    	</div>
  	</div>
  </section>

<hr>

 <div class="tile is-ancestor">
  <div class="tile is-4 is-vertical is-parent">
    <div class="tile is-child box">

<aside class="menu">
  <p class="menu-label">
    General
  </p>
  <ul class="menu-list">
    <li><a class="is-active" href="index.php">Dashboard</a></li>
    <li><a href="tambahlaporan.php">Form Laporan Kepolisian</a></li>
    <li><a href="halamantampil.php">Laporan Kepolisian</a></li>
    <li><a href="grafik.php">Grafik Kejadian</a></li>
    <li><a href="grafik_tersangka.php">Grafik Tersangka</a></li>

  </ul>
  <p class="menu-label">
    Administration
  </p>
  <ul class="menu-list">
    <li><a>Team Settings</a></li>
    <li>
      <a>Manage Your Team</a>
      <ul>
        <li><a>Members</a></li>
        <li><a>Plugins</a></li>
        <li><a>Add a member</a></li>
      </ul>
    </li>
    <li><a>Invitations</a></li>
    <li><a>Cloud Storage Environment Settings</a></li>
    <li><a>Authentication</a></li>
  </ul>
  <p class="menu-label">
    Transactions
  </p>
  <ul class="menu-list">
    <li><a>Payments</a></li>
    <li><a>Transfers</a></li>
    <li><a>Balance</a></li>
  </ul>
</aside>
    </div>
    <div class="tile is-child box">
       <article class="message">
		  <div class="message-header">
		    <p>Pesan</p>
		    <button class="delete" aria-label="delete"></button>
		  </div>
		  <div class="message-body">
		    <p>Selamat datang di Website Kepolisian Sektor Pauh Kota Padang.</p>
		  </div>
		</article>
    </div>
  </div>
  <div class="tile is-parent">
    <div class="tile is-child box">
<br><br>

    <div class="container">
      <div class="container" id="columnchart_material" style="width: 800px; height: 500px;"></div>
    </div>
    

  </div>
</div>

  </body>


    

</html>






<!-- <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

<?php 
      $koneksi = mysqli_connect("localhost","root","","dbkepolisiann");
      $januari=mysqli_query($koneksi,"SELECT tgl_kejadian,no_lapkejadian FROM laporan where month(tgl_kejadian)='01'") ;
      $februari=mysqli_query($koneksi,"SELECT tgl_kejadian,no_lapkejadian FROM laporan where month(tgl_kejadian)='02'") ;
      $maret=mysqli_query($koneksi,"SELECT tgl_kejadian,no_lapkejadian FROM laporan where month(tgl_kejadian)='03'") ;
      $april=mysqli_query($koneksi,"SELECT tgl_kejadian,no_lapkejadian FROM laporan where month(tgl_kejadian)='04'") ;
      $mei=mysqli_query($koneksi,"SELECT tgl_kejadian,no_lapkejadian FROM laporan where month(tgl_kejadian)='05'") ;
      $juni=mysqli_query($koneksi,"SELECT tgl_kejadian,no_lapkejadian FROM laporan where month(tgl_kejadian)='06'") ;
      $juli=mysqli_query($koneksi,"SELECT tgl_kejadian,no_lapkejadian FROM laporan where month(tgl_kejadian)='07'") ;
      $agustus=mysqli_query($koneksi,"SELECT tgl_kejadian,no_lapkejadian FROM laporan where month(tgl_kejadian)='08'") ;
      $september=mysqli_query($koneksi,"SELECT tgl_kejadian,no_lapkejadian FROM laporan where month(tgl_kejadian)='09'") ;
      $oktober=mysqli_query($koneksi,"SELECT tgl_kejadian,no_lapkejadian FROM laporan where month(tgl_kejadian)='10'") ;
      $november=mysqli_query($koneksi,"SELECT tgl_kejadian,no_lapkejadian FROM laporan where month(tgl_kejadian)='11'") ;
      $desember=mysqli_query($koneksi,"SELECT tgl_kejadian,no_lapkejadian FROM laporan where month(tgl_kejadian)='12'") ;

      $jml_januari = mysqli_num_rows($januari);
      $jml_februari = mysqli_num_rows($februari);
      $jml_maret = mysqli_num_rows($maret);
      $jml_april = mysqli_num_rows($april);
      $jml_mei = mysqli_num_rows($mei);
      $jml_juni = mysqli_num_rows($juni);
      $jml_juli = mysqli_num_rows($juli);
      $jml_agustus = mysqli_num_rows($agustus);
      $jml_september = mysqli_num_rows($september);
      $jml_oktober = mysqli_num_rows($oktober);
      $jml_november = mysqli_num_rows($november);
      $jml_desember = mysqli_num_rows($desember);
?>

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Bulan', 'Kejadian'],
          ['Januari', <?php echo $jml_januari ?>],
          ['Februari', <?php echo $jml_februari ?>],
          ['Maret', <?php echo $jml_maret ?>],
          ['April', <?php echo $jml_april ?>],
          ['Mei', <?php echo $jml_mei ?>],
          ['Juni', <?php echo $jml_juni ?>],
          ['Juli', <?php echo $jml_juli ?>],
          ['Agustus', <?php echo $jml_agustus ?>],
          ['September', <?php echo $jml_september ?>],
          ['Oktober', <?php echo $jml_oktober ?>],
          ['November', <?php echo $jml_november ?>],
          ['Desember', <?php echo $jml_desember ?>]
        ]);

        var options = {
          chart: {
            title: 'Jumlah Kejadian per Bulan',
            subtitle: '',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div class="container">
      <div class="container" id="columnchart_material" style="width: 800px; height: 500px;"></div>
    </div>
  </body>
</html> -->