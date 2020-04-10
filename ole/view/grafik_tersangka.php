<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Polres Kota Pekanbaru</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);

      <?php
            $koneksi = mysqli_connect("localhost","root","","dbkepolisiann");
            $cowo=mysqli_query($koneksi,"SELECT * from penduduk JOIN detailstatus on penduduk.nik=detailstatus.nik JOIN status_penduduk ON detailstatus.id_status=status_penduduk.id_status where penduduk.jk='Laki-laki' and status_penduduk.id_status='S04'") ;
            $cewe=mysqli_query($koneksi,"SELECT * from penduduk JOIN detailstatus on penduduk.nik=detailstatus.nik JOIN status_penduduk ON detailstatus.id_status=status_penduduk.id_status where penduduk.jk='Perempuan' and status_penduduk.id_status='S04'") ;
            $jmlcowo = mysqli_num_rows($cowo);
            $jmlcewe = mysqli_num_rows($cewe);
      ?>
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Jenis Kelamin', 'Jumlah Tersangka'],
          ['Laki-laki',  <?php echo $jmlcowo ?>],
          ['Perempuan',    <?php echo $jmlcewe ?>]
        ]);

        var options = {
          title: 'Perbandingan Jumlah Tersangka Berdasarkan Jenis Kelamin',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
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
    <li><a href="
    tambahlaporan.php">Form Laporan Kepolisian</a></li>
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
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
    </div>
    

  </div>
</div>

  </body>

</html>















<!-- <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);

      <?php
            $koneksi = mysqli_connect("localhost","root","","dbkepolisiann");
            $cowo=mysqli_query($koneksi,"SELECT * from penduduk JOIN detailstatus on penduduk.nik=detailstatus.nik JOIN status_penduduk ON detailstatus.id_status=status_penduduk.id_status where penduduk.jk='Laki-laki' and status_penduduk.id_status='S04'") ;
            $cewe=mysqli_query($koneksi,"SELECT * from penduduk JOIN detailstatus on penduduk.nik=detailstatus.nik JOIN status_penduduk ON detailstatus.id_status=status_penduduk.id_status where penduduk.jk='Perempuan' and status_penduduk.id_status='S04'") ;
            $jmlcowo = mysqli_num_rows($cowo);
            $jmlcewe = mysqli_num_rows($cewe);
      ?>
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Jenis Kelamin', 'Jumlah Tersangka'],
          ['Laki-laki',  <?php echo $jmlcowo ?>],
          ['Perempuan',    <?php echo $jmlcewe ?>]
        ]);

        var options = {
          title: 'Perbandingan Jumlah Tersangka Berdasarkan Jenis Kelamin',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>
</html> -->
