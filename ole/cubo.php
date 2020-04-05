<html>

<form action="" method="get">
	 <tr>
      <td>Petugas Terkait</td>
      <td>
        <div class="control">
          <div class="select">
            <select name="statuslap">
              	<option>Please Select</option>
	            <option id="penyelidik">Penyelidik</option>
	            <option id="penyidik">Penyidik</option>
	            <option id="penyidikbantu">Penyidik pembantu</option>
                     
            </select>
          </div>
        </div>

      </td>
    </tr>



</form>
	
	$pilih=$_REQUEST['statuslap'];
	if($pilih == 'penyelidik'){
		  $result = mysqli_query($conn,"SELECT * FROM petugaskepolisian where jabatan='Penyelidik'order by nrp");
		}elseif ($pilih == 'penyidik') {
			  $result = mysqli_query($conn,"SELECT * FROM petugaskepolisian where jabatan='Penyidik'order by nrp");
		}elseif ($pilih == 'penyidikbantu') {
			  $result = mysqli_query($conn,"SELECT * FROM petugaskepolisian where jabatan='Penyidik pembantu'order by nrp");
		}else{
			echo "
			 <script>
        	alert('data berhasil ditambahkan');
        
       		 </script>
			";
		}

	<?php 

	

  include"../koneksi.php";
      
    $result = mysqli_query($conn,"SELECT * FROM petugaskepolisian where jabatan='Penyidik'order by nrp");
         
  ?>

  <div class="container">
  <div class="field">
    <label class="label">Program Studi</label>
    <div class="control">
    <div class="select">
      <select name="id_prodi">
        <?php
           while($row = mysqli_fetch_assoc($result))
           {
        
             echo "<option>$row[nrp]</option>";
            } 
    
       
        ?>
      </select>
    </div>
  </div>
</div>


</html>