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
      .button{
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
      <p class="title">Data Pelapor</p>


     <form action="halamantambah4.php" method="post">
    <progress class="progress is-warning" value="15" max="100">25%</progress>
    
 
    
    

     <tr>
      
      <td> 
      
        <button class="button is-success is-outlined" type="submit" name="tambah">
            <span class="icon is-small">
              <i class="fas fa-check"></i>
            </span>
            <span>Save</span>
          </button>
       
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


