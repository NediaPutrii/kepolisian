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
      <p class="title">Data Pelapor</p>

     <form action="tambahsaksi.php" method="post">
 <!--    <progress class="progress is-warning" value="35" max="100">25%</progress> -->


     <?php 
        include"../koneksi.php";
                    
            $result = mysqli_query($conn,"SELECT * FROM status_penduduk order by id_status");      
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
      <td>Kali-ke </td>
      <td>
        <div class="field">
          <div class="control">
             <input class="input" type="text" placeholder="NIK Pelapor" name="kali_ke" id="nik">
          </div>
        </div>
      </td>
    </tr>


    
    <tr>
      <td>NIK </td>
      <td>
        <div class="field">
          <div class="control">
             <input class="input" type="text" placeholder="NIK Pelapor" name="nik" id="nik">
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
          <label class="radio">
            <input type="radio" value="Laki-laki" name="jk" checked="">
            Laki-laki
          </label>
          <label class="radio">
            <input type="radio" value="Perempuan" name="jk">
            Perempuan
          </label>
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
  <br>
    <p class="title">Keterangan Kejadian</p>

    <tr>
      <td>No.Laporan Kejadian </td>
      <td>
        <div class="field">
          <div class="control">
             <input class="input" type="text" name="nolaporan" value=" ">
          </div>
        </div>
      </td>
    </tr>


    <tr>
      <td>Tempat Kejadian</td>
      <td>
        <div class="control">
          <textarea class="textarea" placeholder="TKP" name="tkp"></textarea>
        </div>
      </td>
    </tr>
  
    <tr>
      <td>Tanggal Kejadian </td>
      <td>
        <div class="field">
          <div class="control">
             <input class="input" type="date" placeholder="Tanggal Kejadian" name="tgl_kejadian">
          </div>
        </div>
      </td>
    </tr>

    <tr>
      <td>Penanganan</td>
      <td>
        <div class="control">
          <textarea class="textarea" placeholder="Penanganan" name="penanganan"></textarea>
        </div>
      </td>
    </tr>
    
    <tr>
      <td>Status_Kejadian</td>
      <td>
        <div class="control">
          <div class="select">
            <select name="status">
              <option>Please Select</option>
              <option>Kasus Ditutup </option>
              <option>Kasus On Progress</option>
              <option>Kasus Selesai</option>
            </select>
          </div>
        </div>

      </td>
    </tr>

<br>

    <tr>
      <td>Tempat Kejadian Melalui MAP</td>
     <td>
        <div class="field">
          <div class="control">
             <input id="lat" class="input" type="text" placeholder="latitude" name="lat" >
             
          </div>
        </div>
      </td>

       <td>
        <div class="field">
          <div class="control">
            <input id="lng" class="input" type="text" placeholder="longitude" name="lng" >
          </div>
        </div>
      </td>


<script src="https://maps.google.com/maps/api/js?sensor=false"></script>

<script>
// variabel global marker
var marker;
  
function taruhMarker(peta, posisiTitik){
    
    if( marker ){
      // pindahkan marker
      marker.setPosition(posisiTitik);
    } else {
      // buat marker baru
      marker = new google.maps.Marker({
        position: posisiTitik,
        map: peta
      });
    }
  
     // isi nilai koordinat ke form
    document.getElementById("lat").value = posisiTitik.lat();
    document.getElementById("lng").value = posisiTitik.lng();
    
}
  
function initialize() {
  var propertiPeta = {
    center:new google.maps.LatLng(-8.5830695,116.3202515),
    zoom:9,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
  var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
  
  // even listner ketika peta diklik
  google.maps.event.addListener(peta, 'click', function(event) {
    taruhMarker(this, event.latLng);
  });

}


// event jendela di-load  
google.maps.event.addDomListener(window, 'load', initialize);
  

</script>

<div id="googleMap" style="width:100%;height:380px;"></div>
<br>


     <button class="button is-success is-outlined" type="submit" name="tambah">
            <span class="icon is-small">
              <i class="fas fa-check"></i>
            </span>
            <span>Save</span>
          </button>
       <!--  <div class="buttons">
          

        <a class="button is-primary" href="halamantampil.php">Tampil Data</a>
      </div> -->

  
<!-- 
    </table> -->
    
  </form>

  

    </div>
  </div>
</div>


  </body>
 <!--   <footer class="footer">
    <div class="content has-text-centered">
      <p>
        <strong>Copyright @dhinda</strong> 
      </p>
    </div>
  </footer>
 -->
</html>