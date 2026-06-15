<?php
session_start();
include 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($conn,
"SELECT * FROM pengguna 
WHERE username='$username' AND password='$password'");

$data = mysqli_fetch_assoc($query);

if($data){
    $_SESSION['login'] = true;
    $_SESSION['username'] = $data['username'];

    header("Location: index.php");
    exit;
}else{
    echo "<script>
    alert('Login gagal!');
    window.location='login.php';
    </script>";
}
?>