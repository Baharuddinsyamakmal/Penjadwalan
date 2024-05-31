<?php
// Konfigurasi koneksi database
$servername = "localhost";
$username = "root"; // Sesuaikan dengan username database Anda
$password = "your_password"; // Sesuaikan dengan password database Anda
$dbname = "user_auth"; // Nama database yang Anda buat

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Mengambil data dari form login
$user_username = $_POST['username'];
$user_password = $_POST['password'];

// Menyiapkan dan mengeksekusi query
$stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
$stmt->bind_param("s", $user_username);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($hashed_password);
$stmt->fetch();

if ($stmt->num_rows > 0) {
    // Memverifikasi password
    if (password_verify($user_password, $hashed_password)) {
        echo "Login successful!";
    } else {
        echo "Invalid password.";
    }
} else {
    echo "No user found.";
}

$stmt->close();
$conn->close();
?>
