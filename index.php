<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login Mahasiswa</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-5">
			<h4 class="mt-3 text-center text-primary">Login Mahasiswa</h4><br/>

			<!-- cek pesan notifikasi -->
			<?php 
			if(isset($_GET['pesan'])){
				if($_GET['pesan'] == "gagal"){
					echo "Username atau password yang anda masukkan salah!"."</br></br>";
				}else if($_GET['pesan'] == "login_dulu"){
					echo "Anda harus login untuk mengakses halaman user ! "."</br></br>";
				}
			}
			?>
				
				<form action="login_action.php  " method="post">
					<div class="form-grup">
						<label for="username">Username</label>
						<input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
					</div><br>
					<div class="form-grup">
						<label for="password">Password</label>
						<input type="password" name="password" id="username" class="form-control" placeholder="Password" required>
					</div><br>
                    <div class="form-group">
                        <input type="submit"  class="btn btn-primary btn-block"  value="Login">
                    </div>
				</form>
				
			</div>
		</div>
	</div>
	
</body>
</html>
