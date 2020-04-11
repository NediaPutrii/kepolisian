<?php 

session_start();

include"../koneksi.php";

if( !isset($_SESSION["login"])){
  header("Location: ../login.php");
  exit;
}

 ?> 
    

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Formulir</title>
</head>
<body>
  
  
</body>
</html>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Polres Kota Pekanbaru</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

    <style>
      .buttons{
        float: right;
      }
    </style>
  </head>
  <body>
  <section class="hero is-warning is-bold">
    <div class="hero-body">
      <div class="container">
      <img src="..\img\Lambang_Polda_Riau.png" alt="" width="100px" height="100px">
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
<!--       <p class="title">One</p>
 -->      <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p> -->
      <aside class="menu">
  <p class="menu-label">
    General
  </p>
  <ul class="menu-list">
    <li><a href="index.php">Dashboard</a></li>
    <li><a class="is-active"  href="tambahlaporan.php">Form Laporan Kepolisian</a></li>
    <li><a href="halamantampil.php">Laporan Kepolisian</a></li>
  </ul>
  <p class="menu-label">
    Administration
  </p>
  <ul class="menu-list">
    <li><a>Team Settings</a></li>
    <li>
      <a >Manage Your Team</a>
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
      <p class="title">Data Petugas</p>


     <form action="" method="post">
    <tr>
      <td>Cari Data Petugas: </td>
      <td>
        <div class="field">
          <div class="control">
            <table>
              <tr>
                <td><input class="input" type="text" placeholder="Pencarian" name="nt" ></td>
                <td><input type="submit" name="submit" value="Cari" class="button"></td>
              </tr>
            </table>
          </div>
        </div>
      </td>
    </tr>

      </form>
      <br>


   <table border=1 class="table">
   


    <?php if (ISSET($_POST['submit'])){ ?>
    <tr> 
      <td>Nama</td>
      <td>NRP</td>
      <td>Jabatan</td>
      <td>Tools</td>

    </tr>
    <?php
     $cari = $_POST['nt'];
     $query2 = "SELECT * FROM petugaskepolisian WHERE nama LIKE '%$cari%'";
     
     $sql = mysqli_query($conn, $query2);
     while ($r = mysqli_fetch_array($sql)){
      ?>
    <tr>
     <td><?php echo $r['nama']; ?></td>
     <td><?php echo $r['nrp']; ?></td>
     <td><?php echo $r['jabatan']; ?></td>
     <td><div class="buttons">
         <a href="caripenyidik.php?id=<?php echo $r['nrp'] ?>" class="button">OK</a>
         <a href="" class="button">Cancel</a>
      </div></td>
     
    </tr>  
     <?php }} ?>

</table>



     <form action="../controller/addpenyidik.php" method="post">
<!--     <progress class="progress is-warning" value="15" max="100">25%</progress>
 -->    
 <p class="title">Tambah Data Petugas</p>
    <tr>
      <td>No. Laporan Kejadian </td>
      <td>
        <div class="field">
          <div class="control">
             <input  class="input" type="text" placeholder="No. Laporan Kejadian" name="nolaporan" value="<?php 
              $nolaporan=$_SESSION['nolaporan'];
              echo($nolaporan) ?>">
          </div>
        </div>
      </td> 
    </tr>
<!--   -->
          

   <tr>
      <td>NRP </td>
      <td>
        <div class="field">
          <div class="control">
             <input class="input" type="text" placeholder="NRP Petugas" name="nrp">
          </div>
        </div>
      </td>
    </tr>


   <tr>
      <td>Nama Petugas </td>
      <td>
        <div class="field">
          <div class="control">
             <input class="input" type="text" placeholder="Nama Petugas" name="nama">
          </div>
        </div>
      </td>
    </tr>

      <tr>
      <td>Jabatan Petugas</td>
      <td>
        <div class="control">
          <div class="select">
            <select name="jabatan">
                <option>Please Select</option>
              <option >Penyelidik</option>
              <option >Penyidik</option>
              <option >Penyidik pembantu</option>
                     
            </select>
          </div>
        </div>

      </td>
    </tr>



     <tr>
      
      <td> 
        <br>
      
  <div class="buttons">
        <button class="button is-success is-outlined" type="submit" name="tambah">
            <span class="icon is-small">
              <i class="fas fa-plus"></i>
            </span>
            <span>Add</span>
          </button>

          <button class="button is-success is-outlined" type="submit" name="save">
            <span class="icon is-small">
              <i class="fas fa-check"></i>
            </span>
            <span>Save</span>
          </button> 

  </div>
        
       
      </td>
    </tr>

    <br>
    <br>

    
  </form>

    </div>
  </div>
</div>


  <footer class="footer">
  <div class="content has-text-centered">
    <p>
      <strong>Copyright @dhinda</strong> 
    </p>
  </div>
</footer>

  </body>


</html>

