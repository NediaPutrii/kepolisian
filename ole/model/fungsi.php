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
        $latitude       = $data['lat'];
        $longitude      = $data['lng'];
      
        $query = "INSERT INTO laporan VALUES ('$nolaporan','$tkp','$tgl_kejadian','$penanganan','$status','$latitude','$longitude')";

        
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

  
      
?>