<?php 

require"model/fungsi.php";

	if(isset($_POST["register"])){
		if(register($_POST)>0){
			echo "
				<script>
				alert('Anda Berhasil Registrasi');
				</script>

		";
		}else{
			echo mysqli_error($conn);
		}
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
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
        <link rel="stylesheet" href="style.css" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

        <style>
        	body{
				margin: 0;
				padding: 0;
				font-family: sans-serif;
				width: 1000px;
				height: 500px;
			}

        	.box{
				position: relative;
				width: calc(400px - 30px);
				height: calc(500px - 30px);
				float: left;
				margin-right: 500px;
				margin-left: 500px;
				margin-top: 150px;
				box-sizing: border-box;
				overflow: hidden;
				border-radius: 10px;	
			}

        </style>
	<form action="" method="POST">
		<!-- <table>
			<tr>
				<td><label for="">Username</label></td>
				<td><input type="text" name="username"></td>		
			</tr>
			<tr>
				<td><label for="">Password</label></td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td><label for="">Konfirmasi Password</label></td>
				<td><input type="password" name="password2"></td>
			</tr>
			
			<tr>
				<td><input type="submit" value="Register" name="register"></td>
				<td>Sudah terdaftar?<a href="login.php">Klik Disini!</a></td>
			</tr>

		</table> -->
		<div class="box">
		<h3 style="text-align: center;	font-size: 24px; ">Halaman Login</h3>
			<br>

			<div class="field">
			  <label class="label">Username</label>
			  <div class="control has-icons-left has-icons-right">
			    <input class="input is-success" type="text" placeholder="Username" name="username" >
			    <span class="icon is-small is-left">
			      <i class="fas fa-user"></i>
			    </span>
			    <span class="icon is-small is-right">
			      <i class="fas fa-check"></i>
			    </span>
			  </div>
			</div>

			<div class="field">
			<label class="label">Password</label>
			  <p class="control has-icons-left">
			    <input class="input" type="password" placeholder="Password" name="password">
			    <span class="icon is-small is-left">
			      <i class="fas fa-lock"></i>
			    </span>
			  </p>
			</div>

			<div class="field">
			<label class="label">Konfirmasi Password</label>
			  <p class="control has-icons-left">
			    <input class="input" type="password" placeholder="Password" name="password2">
			    <span class="icon is-small is-left">
			      <i class="fas fa-lock"></i>
			    </span>
			  </p>
			</div>

			<div class="field">
			  <p class="control">
			    <button class="button is-success" name="register">
			      Sign-In
			    </button>
			    <p>Sudah terdaftar?<a href="login.php">Klik Disini!</a></p>
			  </p>
			</div>
		</div>
	</form>

</body>
</html>