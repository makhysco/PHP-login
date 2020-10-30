<?php

    //mengaktifkan session php
    session_start();

    include 'koneksi.php';

    //menangkap data yang dikirim dari form
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    // menyeleksi data admin dengan username dan password yang sesuai
    $data = "SELECT * from mahasiswas where username='".$username."' and password='".$password."' limit 1";
    $hasil = mysqli_query($koneksi, $data);
    $jumlah = mysqli_num_rows($hasil);

        if ($jumlah>0) {
            $row = mysqli_fetch_assoc($hasil);
            $_SESSION["id_user"]=$row["id_user"];
            $_SESSION["username"]=$row["username"];
            $_SESSION["nama"]=$row["nama"];

            header("location:user.php");

        } else {
            header("location:index.php?pesan=gagal");
        }
?>

