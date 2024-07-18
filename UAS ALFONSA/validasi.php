<?php
session_start();    
include ('koneksi.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $result = $conn -> query($sql);

    if ($result && $result -> num_rows > 0){
        echo "Login Berhasil";
        $_SESSION['email'] = $email;
        header("Location: indexuser.php");
    }
    else{
      echo "Login Gagal";
    }
}
?>