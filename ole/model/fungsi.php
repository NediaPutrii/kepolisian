<?php 
  $conn = mysqli_connect("localhost","root","","dbkepolisian")or die(mysqli_error());;

    function lihat($query)
    {
        global $conn;
        $hasil = mysqli_query($conn,$query);
        $tampungData = [];
        while ( $data = mysqli_fetch_assoc($hasil) ) {
            $tampungData[] = $data;
        }
        return $tampungData;

    }
   

  

    function tambah2($data)
    {
        global $conn;
       
        $nolaporan      = $data["nolaporan"];
        $tkp            = $data["tkp"];
        $tgl_kejadian   = $data["tgl_kejadian"];
        $penanganan     = $data['penanganan'];
        $status         = $data['status'];
        $kecamatan      = $data['kecamatan'];
        $latitude       = $data['lat'];
        $longitude      = $data['lng'];
      
        $query = "INSERT INTO laporan VALUES ('$nolaporan','$tkp','$tgl_kejadian','$penanganan','$status','$latitude','$longitude',$kecamatan)";

        
        mysqli_query($conn,$query);
      
      
        return mysqli_affected_rows($conn);
    }

       function tambah1($data)
    {
        global $conn;
       
        $nik            = $data['nik'];
        $nama           = $data['nama'];
        $ttl            = $data['ttl'];
        $alamat         = $data['alamat'];
        $jk             = $data['jk'];
        $notlp          = $data['notlp'];
                   
    
        $query = "INSERT INTO penduduk  VALUES( '$nik','$nama','$ttl','$alamat','$jk','$notlp')";
          
        mysqli_query($conn,$query);
    

        return mysqli_affected_rows($conn);
    }


     function tambah3($data)
    {
        global $conn;
       
        $nik            = $data["nik"];
        $nolaporan      = $data["nolaporan"];
        // $status_pddk    = $data["statuslap"];

        $query = "INSERT INTO detailpenduduk VALUES ('$nik','$nolaporan')";
        mysqli_query($conn,$query);
        
      
        return mysqli_affected_rows($conn);
    }


     function tambah4($data)
    {
        global $conn;
       
        $nrp       = $data["nrp"];
        $nama      = $data["nama"];
        $jabatan   = $data["jabatan"];

        $query = "INSERT INTO petugaskepolisian VALUES ('$nrp','$nama','$jabatan')";
        mysqli_query($conn,$query);
        
      
        return mysqli_affected_rows($conn);
    }

     function tambah5($data)
    {
        global $conn;
       
        $nrppetugas     = $data["nrppetugas"];
        $nolaporan      = $data["nolaporan"];

        $query = "INSERT INTO detail_penyidik VALUES ('$nrppetugas','$nolaporan')";
        mysqli_query($conn,$query);
        
      
        return mysqli_affected_rows($conn);
    }

     function tambah6($data)
    {
        global $conn;
       
        $id_status       = $data["statuslap"];
        $nik             = $data["nik"];
        $kali_ke         = $data["kali_ke"];

        $query = "INSERT INTO detailstatus VALUES ('','$id_status','$nik','$kali_ke')";
        mysqli_query($conn,$query);
        
      
        return mysqli_affected_rows($conn);
    }


    function hapus($data)
    {
        global $conn;

        $query = "DELETE FROM `laporan`  where id='$data'";

        mysqli_query($conn ,$query);
        return mysqli_affected_rows($conn);
    }

   

    function edit($data)
    {
        global $conn;
        $id=$data["id"];
        $nama=$data["nama"];
        $nim=$data["nim"];
        $asal=$data["asal"];

        $query="Update mahasiswa set nama='$nama',nim='$nim',asal='$asal' where id=$id";

        mysqli_query($conn ,$query);
        return mysqli_affected_rows($conn);
    } 

     function pesan($msg,$url){
    echo "<script>window.alert('$msg');window.location=('$url');</script>";
  }

  function register($data){
    global $conn;

    $username=strtolower(stripcslashes($data["username"]));
    $password= mysqli_real_escape_string($conn, $data["password"]);
    $password2= mysqli_real_escape_string($conn,$data["password2"]);
    // $status=$data["user"];


    if($password !== $password2){
        echo "
        <script>
        alert('Password tidak sesuai');
        </script>

        ";
        return false;
    }

    //enskripsi pass
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan user ke db
    mysqli_query($conn, "INSERT INTO admin VALUES ('','$username','$password')");



    return mysqli_affected_rows($conn);

}

function login($data){
    global $conn;

    $username = $data["username"];
    $password = $data["password"];

    $result = mysqli_query($conn,"SELECT *FROM admin WHERE username = '$username'");

    if(mysqli_num_rows($result) ===1){

        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])){

            $_SESSION["login"] = true;

            if($row['status']=="admin"){
                header("Location: admin.php");
            exit;
            }else{
                header("Location: index.php");
            exit;
            }


            
        }

    }
    $error = true;
}

  
      
?>
