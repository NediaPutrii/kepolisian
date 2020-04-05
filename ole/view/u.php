<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Polsekta Pauh Padang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

    <style>
      .button{
        float: right;
      }
    </style>

    <link rel="stylesheet" href="style.css" type="text/css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
  </head>
  <body>
  <section class="hero is-warning is-bold">
    <div class="hero-body">
      <div class="container">
      <img src="img\Lambang_Polda_Sumbar.png" alt="" width="100px" height="100px">
        <h1 class="title">
         Kepolisian Sektor Pauh
        </h1> 
      <p class="subtitle">
         Kota <strong>Padang</strong>
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
    <li><a class="is-active" href="halamantambah2.php">Laporan Kepolisian</a></li>
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
      <p class="title">Data Saksi</p>


     <form action="tambahpenyidik.php" method="post">
  
    
     <tr>
      <td>No. Laporan Kejadian </td>
      <td>
        <div class="field">
          <div class="control">
             <input  class="input" type="text" placeholder="No. Laporan Kejadian" name="nolaporan" value="<?php $nolaporan=$_REQUEST['nolaporan'];echo($nolaporan) ?>
             "  >
          </div>
        </div>
      </td> 
    </tr>

     <tr>
      <td>Status Dalam Laporan</td>
      <td>
        <div class="control">
          <div class="select">
            <select name="statuslap" >
              <option>Please Select</option>
              <option>Pelapor</option>
              <option>Saksi</option>
              <option>Terlapor</option>
              <option>Pelaku</option>
            
            </select>
          </div>
        </div>

      </td>
    </tr>

    
    <tr>
      <td>NIK </td>
      <td>
        <div class="field">
          <div class="control">
             <input class="input" type="text" placeholder="NIK Pelapor" name="nik">
          </div>
        </div>
      </td>
    </tr>

   
    
    <tr>
      <td>Nama </td>
      <td>
        <div class="field">
          <div class="control">
             <input class="input" type="text" placeholder="Nama Pelapor" name="nama">
          </div>
        </div>
      </td>
      
      
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td>
        <div class="control">
          <div class="select">
            <select name="jk" >
              <option>Laki-laki</option>
              <option>Perempuan</option>
            </select>
          </div>
        </div>  
        
    </tr>
    <br>
    <tr>
      <td>Tempat/Tgl Lahir</td>
      <td>
        <div class="field">
          <div class="control">
             <input class="input" type="date" placeholder="TTL Pelapor" name="ttl">
          </div>
        </div>
      </td>
    </tr>
  
   <tr>
      <td>No Telp</td>
      <td>
        <div class="field">
          <div class="control">
             <input class="input" type="text" placeholder="No Telp Pelapor" name="notlp">
          </div>
        </div>
      </td>
    </tr>
      
<br>
    <tr>
      <td>Alamat</td>
      <td>
        <div class="control">
          <textarea class="textarea" placeholder="Alamat Pelapor" name="alamat"></textarea>
        </div>
      </td>
        
    </tr>

 
<!-- 
    </table> -->
   
    <!-- <div class="containers">
      <div class="box">
        <div class="icon"><i id="fas" class="fas fa-user-plus"></i></div>
        <div class="isi">
    
          <h3>Saksi 2</h3>

         <?php 

          include 'tambahsaksi2.php';
         ?>
        </div>
      </div>


      <div class="box">
        <div class="icon"><i id="fas" class="fas fa-user-plus"></i></div>
        <div class="isi">
    
          <h3>Saksi 3</h3>

         <?php 

          include 'tambahsaksi2.php';
         ?>
        </div>
      </div>
    </div>
      -->
      <tr>
        <td> 
          <br>
             <button class="button is-success is-outlined" type="submit" name="tambah">
                <span class="icon is-small">
                  <i class="fas fa-check"></i>
                </span>
                <span>Save</span>
              </button>
          </td>
        </tr>


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
