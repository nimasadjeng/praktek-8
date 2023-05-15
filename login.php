<?php
$username = $_POST['username'];
$password = $_POST['password'];

// Buat koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "latihan");

// Query untuk mengecek apakah username dan password cocok
$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) == 1) {
    // Jika cocok, berikan akses ke halaman selanjutnya
    header("Location: registrasi.php");
} else {
    // Jika tidak cocok, tampilkan pesan kesalahan
    echo "Username atau password salah.";
}
?>
