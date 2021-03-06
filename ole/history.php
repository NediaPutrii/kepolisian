<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Polres Kota Pekanbaru</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
        <link rel="stylesheet" href="style.css" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
  </head>
  <body>

  <section class="hero is-warning is-bold">

    <div class="hero-head">
    <header class="navbar">
      <div class="container">
        <div id="navbarMenuHeroC" class="navbar-menu">
          <div class="navbar-end">
           
            <a class="navbar-item" href="login.php">
              Login
            </a>
            
            <span class="navbar-item">
              <a class="button is-success is-inverted" href="logout.php">
                <span class="icon">
                  <i class="fab fa-github"></i>
                </span>
                <span>Logout</span>
              </a>
            </span>
          </div>
        </div>
      </div>
    </header>
  </div>

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
    <li><a href="view/tambahlaporan.php">Form Laporan Kepolisian</a></li>
    <li><a href="view/halamantampil.php">Laporan Kepolisian</a></li>
  </ul>
  <p class="menu-label">
    Administration
  </p>
  <ul class="menu-list">
    <li><a>Team Settings</a></li>
    <li>
      <a>Manage Your Team</a>
      <ul>
        <li><a href="members.php">Members</a></li>
        <li><a href="register.php">Add a member</a></li>
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


    <p class="title">Daftar Admin Pengelola</p>
      <table border=1 class="table">
      
      <tr> 
      <td>No</td>
      <td>Keterangan</td>
      <td>Tanggal/Waktu</td>
      <td>Data Lama</td>
      <td>Data Baru</td>
      <tr></tr>
    <?php 
    include 'koneksi.php';
     $no=1;
     $query2 = "SELECT * FROM log";
     
     $sql = mysqli_query($conn, $query2);
     while ($r = mysqli_fetch_array($sql)){
      ?>
    <tr>
     <td><?php echo $no ?></td>
     <td><?php echo $r['ket']; ?></td>
     <td><?php echo $r['datetime']; ?></td>
     <td><?php echo $r['data_lama']; ?></td>
     <td><?php echo $r['data_baru']; ?></td>

    </tr>  

     <?php  $no++; } ?>

</table>

    

  </div>
</div>

  </body>


    

</html>