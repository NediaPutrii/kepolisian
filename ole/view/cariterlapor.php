<?php 

session_start();

include"../koneksi.php";

if( !isset($_SESSION["login"])){
  header("Location: ../login.php");
  exit;
}

 ?>
   
    <!DOCTYPE html>
    <html>
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Polres Kota Pekanbaru</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
        <link rel="stylesheet" href="style.css" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
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
        <li><a  href="index.php">Dashboard</a></li>
        <li><a class="is-active" href="tambahlaporan.php">Form Laporan Kepolisian</a></li>
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
          <p class="title">Data Terlapor/Pelaku</p>

          
          


         <form action="../controller/cariaddterlapor.php" method="post">
     <!--    <progress class="progress is-warning" value="35" max="100">25%</progress> -->


      <tr>
      <td>No. Laporan Kejadian </td>
      <td>
        <div class="field">
          <div class="control">
             <input  class="input" type="text" placeholder="No. Laporan Kejadian" name="nolaporan" value="<?php 
              $nolaporan=$_SESSION['nolaporan'];
              echo($nolaporan) ?>" readonly>
          </div>
        </div>
      </td> 
    </tr>


         <?php 
        include"../koneksi.php";
                    
            $result = mysqli_query($conn,"SELECT * FROM status_penduduk where id_status='S02'");      
          ?>

          <div class="container">
            <div class="field">
              <label class="label">Status Penduduk Terkait</label>
                <div class="control">
                  <div class="select">
                    <select name="statuslap">
                      <?php
                         while($row = mysqli_fetch_assoc($result))
                         {
                      
                           echo "<option>".$row[id_status]."</option>";
                           echo "<option disabled>".$row[status_dlmlap]."</option>";
                          } 
                  
                     
                      ?>

                    </select>
                   
                  </div>
                </div>
              </div>
               
        <tr>


       <tr>
      <td>Kali-ke </td>
      <td>
        <div class="field">
          <div class="control">
             <input class="input" type="text" placeholder="NIK Pelapor" name="kali_ke" value="<?php 
     $id=$_GET['id'];
     $sql    ="SELECT * FROM detailstatus where nik='$id'";
     $query    =mysqli_query($conn,$sql);
     $count    =mysqli_num_rows($query);
     $result=$count+1;
     echo "$result";?>">
          </div>
        </div>
      </td>
    </tr>
    
<?php $query2 = "SELECT * FROM penduduk WHERE nik='$id'";
     
     $sql = mysqli_query($conn, $query2);
     while ($r = mysqli_fetch_array($sql)){
      ?>
    
    <tr>
      <td>NIK </td>
      <td>
        <div class="field">
          <div class="control">
             <input class="input" type="text" placeholder="NIK Pelapor" name="nik" value="<?php echo $r['nik']; ?>">
          </div>
        </div>
      </td>
    </tr>

   
    
    <tr>
      <td>Nama </td>
      <td>
        <div class="field">
          <div class="control">
             <input class="input" type="text" placeholder="Nama Pelapor" name="nama" value="<?php echo $r['nama']; ?>">
          </div>
        </div>
      </td>
    </tr>

     <tr>
      <td>Jenis Kelamin </td>
      <td>
        <div class="field">
          <div class="control">
             <input class="input" type="text" placeholder="Jenis Kelamin" name="jk" value="<?php echo $r['jk']; ?>">
          </div>
        </div>
      </td>
    </tr>
    
     <tr>
      <td>Tanggal Lahir </td>
      <td>
        <div class="field">
          <div class="control">
             <input class="input" type="text" placeholder="Tanggal Lahir" name="ttl" value="<?php echo $r['ttl']; ?>">
          </div>
        </div>
      </td>
    </tr>

      
   <tr>
      <td>No Telp</td>
      <td>
        <div class="field">
          <div class="control">
             <input class="input" type="text" placeholder="No Telp Pelapor" name="notlp" value="<?php echo $r['notlp']; ?>">
          </div>
        </div>
      </td>
    </tr>
      
    <tr>
      <td>Alamat</td>
      <td>
        <div class="field">
          <div class="control">
             <input class="input" type="text" placeholder="Alamat" name="alamat" value="<?php echo $r['alamat']; ?>">
          </div>
        </div>
      </td>
    </tr>
<?php } ?>



    <tr>
      
      <td> 

        <div class="buttons">
          <button class="button is-success is-outlined" type="submit" name="tambah">
            <span class="icon is-small">
              <i class="fas fa-plus"></i>
            </span>
            <span>Tambah</span>
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

      
    <!-- 
        </table> -->
        
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

