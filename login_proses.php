<?php
include 'db/koneksi.php';
session_start(); // Mulai sesi

//cek apakah pengguna sudah login, jika ya, redirect kehalaman lain
if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php"); // Ganti dengan halaman setelah login 
    exit();                                                                                                                                                                                                                                         
}
//Cek apakah form login telah di-submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Ambil nilai dari form login
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    echo $username;
    //Query untuk memeriksa login
    $query ="SELECT * FROM user WHERE username = '$username' AND password ='$password'";
    $result = $koneksi->query($query);
    if ($result->num_rows == 1) {
        //Login sukses
        $row = $result->fetch_assoc();
        $_SESSION['user_id'] = $row ['user_id'];
        $_SESSION['$username'] = $row['username'];
        header("Location: dashboard.php"); //Ganti dengan halaman setelah login
        exit();
} else {
        //Login gagal
        echo "<script>alert('login gagal');window.location='index.php';</script>";
         // Ganti dengan halaman setelah login
}

// Tutup koneksi
$koneksi->close();
}