<?php

    session_start();
    include 'koneksi.php';

    $datas = mysqli_query($koneksi,"SELECT * FROM matkuls");
    

    if (!isset($_SESSION["username"])) {
        header("location:index.php?pesan=login_dulu");
        
    }

    $id_user=$_SESSION["id_user"];
    $username=$_SESSION["username"];
    $nama=$_SESSION["nama"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6">
                <p class="mt-5 text-center text-success">Selamat datang <?php echo $nama; ?> !!</p>
                <h4 class="text-center text-primary">KRS Mahasiswa Semester 7</h4></<p><br>
                <table class="table table-bordered">
                    <thead class="thead-dark text-center">
                        <th>No.</th>
                        <th>Kode</th>
                        <th>Periode</th>
                        <th>Nama Mata Kuliah</th>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach($datas as $data): ?> 
                    
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $data['kode'] ?></td>
                                <td><?= $data['periode'] ?></td>
                                <td><?= $data['nama_matkul'] ?></td>

                            </tr>
                        <?php $no++ ?>
                        <?php endforeach?> 
                    
                    </tbody>
                </table>
            
            
            
                <center><a href="logout.php" class="btn btn-warning" role="button">Logout</a></center>
            </div>
		</div>
	</div>

</body>
</html>
